<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Mail\MailAccepter;
use App\Mail\Mailrefuser;
use App\Models\User;
use App\Models\Operateur;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showPourBloquer()
    {
        
        $demandes = DB::table('users')
            ->join('operateurs', 'users.email', '=', 'operateurs.email')
            ->select('operateurs.*', 'users.id as user_id','users.banned as banned')
            ->where('role_id','!=','1')
            ->get();
            
            return view('admin-users')->with('demandes', $demandes);

    }


    public function showOne(Request $request)
    {
        
        $demandes = DB::table('users')
        ->join('operateurs', 'users.email', '=', 'operateurs.email')
        ->select('operateurs.*', 'users.id as user_id', 'users.banned as banned')
        ->where('role_id', '!=', '1')
        ->where(function ($query) use ($request) {
            $query->where('users.id', $request->id)
                ->orWhere('users.email', $request->email)
                ->orWhere('op/trans', $request->opTrans)
                ->orWhere('banned', $request->banned);

        })
        ->get();
    
            return view('admin-users')->with('demandes', $demandes);
            
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

// app/Http/Controllers/UserController.php




    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'files.*' => 'mimes:jpg,jpeg,png,pdf,gif,xlsx|max:2048',
    //     ]);

    //     if ($request->hasFile('files')) {
    //         $filePaths = [];

    //         foreach ($request->file('files') as $file) {
    //             $path = $file->store('files', 'public');
    //             $filePaths[] = $path;
    //         }

    //         $user = new File();
    //         // Autres données du formulaire
    //         $user->file_path = json_encode($filePaths);
    //         $user->save();

    //         return redirect()->back()->with('success', 'Compte créé avec succès.');
    //     }

    //     return redirect()->back()->with('error', 'Aucun fichier sélectionné.');
    // }


    // public function show(File $user)
    // {
    //     $filePaths = json_decode($user->file_path, true);
    //     $files = [];

    //     foreach ($filePaths as $filePath) {
    //         $files[] = [
    //             'name' => basename($filePath),
    //             'url' => Storage::url($filePath),
    //         ];
    //     }
    //     return view('files', compact('user', 'files'));
    // }



    public function bloquer($user_id)
    {
        $user = DB::table('users')->find($user_id);
    
        if (!$user) {
            $message = "Utilisateur avec l'ID ".$user_id." n'existe pas";
            return redirect()->back()->with('message', $message);
        }
    
        $newBannedStatus = !$user->banned;
    
        DB::table('users')->where('id', $user_id)->update([
            'banned' => $newBannedStatus,
        ]);
    
        $message = "Utilisateur avec l'ID ".$user_id;
    
        if ($newBannedStatus) {
            $message .= " bloqué avec succès";
        } else {
            $message .= " débloqué avec succès";
        }
    
        return redirect()->route('admin-users')->with('message', $message);

    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_info()
    {
    $users = User::select('users.*')
    ->join('operateurs', Auth::user()->email, '=', 'operateurs.email')
    ->get();
    return $users;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

    public function inserer_agent(Request $request)
    {
        $request->validate([
            'email' => 'unique:demandes_inscription|unique:users',
            'cin' => 'unique:users',
            'cin' => 'unique:demandes_inscription',

        ]);
    
        // Créer un nouvel utilisateur dans la base de données
        $user = new User;
        $user->name = $request->nom;
        $user->email = $request->email;
        $user->banned = 0;
        $user->active = 1;
        $user->cin = $request->cin;
        $user->password = bcrypt($request->mdps);
        $user->role_id = 2;
        $user->save();
    
        // Rediriger ou afficher un message de succès
        return redirect()->route('admin-users')->with('message', 'Agent en douane ajouté avec succès.');
       }
    
    

    /**
     * Summary of accepter_refuser
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    public function accepter_refuser(Request $request)
    {
        if ($request->has('accepter')) {

            // $opTrans = $request->has('numero_agrement') ? 'T' : 'O';
            // $role = $request->has('numero_agrement') ? 4 : 3;

            $opTrans = !empty($request->numero_agrement) ? 'T' : 'O';
            $role = !empty($request->numero_agrement) ? 4 : 3;
    
            Operateur::create([
                'centre_rc' => $request->centre_rc,
                'numero_rc' => $request->numero_rc,
                'fax' => $request->fax ?? 0,
                'telephone' => $request->telephone,
                'email' => $request->email,
                'raison_social' => $request->raison_social,
                'numero_agrement' => $request->numero_agrement ?? 0,
                'objet_activite' => $request->objet_activite,
                'ville' => $request->ville,
                'nom_gerant' => $request->nom_gerant,
                'prenom_gerant' => $request->prenom_gerant,
                'adresse' => $request->adresse,
                'op/trans' => $opTrans,
            ]);
    
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $password = '';
    
            for ($i = 0; $i < 10; $i++) {
                $password .= $characters[random_int(0, strlen($characters) - 1)];
            }
            $banned=0;
            $active=1;
    
            User::create([
                'name' => $request->prenom_gerant.' '.$request->nom_gerant,
                'email' => $request->email,
                'cin' => $request->cin,
                'banned' => $banned,
                'active' => $active,
                'password' => bcrypt($password),
                'role_id' => $role,
            ]);

            DB::table('demandes_inscription')->where('email',$request->email)->delete();  

            Mail::to($request->email)->send(new MailAccepter($password,$request));
        }
    
        if ($request->has('refuser')) {
            DB::table('demandes_inscription')->where('email',$request->email)->delete();  
            Mail::to($request->email)->send(new MailRefuser());
        }



        return redirect()->route('demandes_show')->with('message', "La demande est bien traitée ! l'operateur a reçu le mail avec les informations ");



}
}