<?php

namespace App\Http\Controllers;

use App\Mail\MailNewReclamAffect;
use App\Mail\MailNewReclam;
use App\Models\Reclamation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use App\Mail\TestMail;
use App\Notifications\NotifReclameAffect;
use App\Notifications\NotifReclame;



class ReclamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Your code here
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Your code here
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'files.*' => 'mimes:jpg,jpeg,png,pdf,gif,xlsx|max:2048',
        ]);

        $USER = DB::table('users')
            ->join('operateurs', 'users.email', '=', 'operateurs.email')
            ->where('users.id', '=', Auth::user()->id)
            ->first();

        $reclamation = new Reclamation();

        if ($request->hasFile('files')) {
            $filePaths = [];

            foreach ($request->file('files') as $file) {
                $path = $file->store('files', 'public');
                $filePaths[] = $path;
            }
            $reclamation->file_path = json_encode($filePaths);
        }

        $reclamation->theme = $request->theme;
        $reclamation->sous_theme = $request->sous_theme;
        $reclamation->ville = $request->ville;
        $reclamation->bureauD = $request->bureauD;
        $reclamation->localisation = $request->localisation;
        $reclamation->objet = $request->objet;
        $reclamation->message = $request->message;
        $reclamation->etat = 'non traitée';
        $reclamation->service = $request->service;
        $reclamation->description = $request->description;
        $reclamation->operateur_id = $USER->id;

        $reclamation->save();


        Mail::to('agent@gmail.com')->send( new MailNewReclam($request));

        $agent = User::where('role_id', 1)->orWhere('role_id', 2)->get();
        
        Notification::send($agent, new NotifReclame( $reclamation->id,$request->theme));
     
        return redirect()->back()->with('message', 'Réclamation créée avec succès. Elle sera traitée dès que possible.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function show()
     {
         $reclams = DB::table('reclamations')
             ->join('operateurs', 'reclamations.operateur_id', '=', 'operateurs.id')
             ->select('reclamations.*', 'operateurs.*', 'reclamations.id as rec_id')
             ->get();
     
         return view('agent-reclam', compact('reclams'));
     }

     public function showPourAdmin()
     {
         $reclams = DB::table('reclamations')
             ->join('operateurs', 'reclamations.operateur_id', '=', 'operateurs.id')
             ->select('reclamations.*', 'operateurs.*', 'reclamations.id as rec_id')
             ->get();
     
         return view('admin-reclam', compact('reclams'));
     }
     



     public function show_id($id)
     {
         $reclams = DB::table('reclamations')
             ->join('operateurs', 'reclamations.operateur_id', '=', 'operateurs.id')
             ->where('reclamations.id', $id)
             ->select('reclamations.*', 'operateurs.*', 'reclamations.id as rec_id')
             ->first(); // Utilize "first()" instead of "get()" to retrieve a single row of result
     
         if ($reclams) {
             if ($reclams->file_path) {
                 $filePaths = json_decode($reclams->file_path, true);
                 $files = [];
     
                 foreach ($filePaths as $filePath) {
                     $files[] = [
                         'name' => basename($filePath),
                         'url' => Storage::url($filePath),
                     ];
                 }
     
                 return view('agent-reclam-show', compact('reclams', 'files'));
             } else {
                 // Handle the case where no file path is available
                 return view('agent-reclam-show', compact('reclams'));
             }
         } else {
             // Handle the case where no matching reclamations were found
             return redirect()->back()->with('error', 'Aucune réclamation trouvée.');
         }
     }
     

         public function affecter(Request $request)
    {
        $reclams= DB::table('reclamations')->where('id',$request->id)->update([
            'service'=>$request->service,
            'etat'=>'traitée',
        ]);

        $operat = DB::table('reclamations')
        ->join('operateurs', 'reclamations.operateur_id', '=', 'operateurs.id')
        ->where('reclamations.id', $request->id)
        ->select('reclamations.*', 'operateurs.*', 'reclamations.id as rec_id')
        ->first(); 

        Mail::to($operat->email)->send( new MailNewReclamAffect($request->service ,$request->id ,$operat->nom_gerant , $operat->prenom_gerant));

        $user = User::where('email', $operat->email)->get();
        
        Notification::send($user, new NotifReclameAffect($request->service ,$request->id));
     
        return redirect()->route('agent-reclame')->with('message', 'Réclamation affectée avec succès. l \'operateur va recevoir un mail et une notification .');
  
        }
     

    public function trier(Request $request)
    {
        $reclams = DB::table('reclamations')
        ->join('operateurs', 'reclamations.operateur_id', '=', 'operateurs.id')
        ->select('reclamations.*', 'operateurs.*', 'reclamations.id as rec_id')
        ->where(function ($query) use ($request) {
            $query->where('reclamations.id', $request->id)
                ->orWhere('reclamations.theme', $request->theme)
                ->orWhere('etat', $request->etat);
        })
        ->get();

            return view('agent-reclam')->with('reclams', $reclams);
    }

    public function trierPouAdmin(Request $request)
    {
        $reclams = DB::table('reclamations')
        ->join('operateurs', 'reclamations.operateur_id', '=', 'operateurs.id')
        ->select('reclamations.*', 'operateurs.*', 'reclamations.id as rec_id')
        ->where(function ($query) use ($request) {
            $query->where('reclamations.id', $request->id)
                ->orWhere('reclamations.theme', $request->theme)
                ->orWhere('etat', $request->etat);
        })
        ->get();

            return view('admin-reclam')->with('reclams', $reclams);
    }



    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function OP (){
        $reclamations =  Reclamation::find(1);
        return $reclamations->operateur;
    }

}
