<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDemandeRequest;
use App\Mail\TestMail;
use App\Models\User;
use App\Notifications\NotifDemande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

use Illuminate\Validation\Rule;

class DemandeController extends Controller
{
    
     public function insertion(StoreDemandeRequest $request)
    {

        $request->validate([
            'email'=>'unique:demandes_inscription|unique:users',
            'numero_rc'=>'unique:operateurs',
            'centre_rc'=>'unique:operateurs',
            'numero_rc'=>'unique:demandes_inscription',
            'centre_rc'=>'unique:demandes_inscription',
            'cin'=>'unique:users',
            'cin'=>'unique:demandes_inscription',
        ]);

        $demande = DB::table('demandes_inscription')->insertGetId([
            'centre_rc'=>$request->centre_rc,
            'numero_rc'=>$request->numero_rc,
            'telephone'=>$request->telephone,
            'fax'=>$request->fax ?? 0,
            'email'=>$request->email,
            'raison_social'=>$request->raison_social,
            'objet_activite'=>$request->objet_activite,
            'numero_agrement'=>$request->numero_agrement ?? 0,
            'ville'=>$request->ville,
            'adresse'=>$request->adresse,
            'nom_gerant'=>$request->nom_gerant,
            'prenom_gerant'=>$request->prenom_gerant,
            'date_creation'=>$request->date_creation,
            'cin'=>$request->cin,
        ]);

        Mail::to('admin@gmail.com')->send( new TestMail());

        $admins=User::where('role_id',1)->get();

        Notification::send($admins, new NotifDemande($demande,$request->email));
        
        $message_demande_envoy="Votre demande est bien reçue, une confirmation de traitement vous sera envoyée par mail ultérieurement ";
        return view('CreerCompte',compact('message_demande_envoy'));
    }

    public function show()
    {
       $demandes = DB::table('demandes_inscription')->get();

       return view('admin-demande', compact('demandes'));
    }

    public function showWithId($id)
    {
       $demande= DB::table('demandes_inscription')->where('id',$id)->get()->first();
       $getID=DB::table('notifications')->where('data->demande_id',$id)->pluck('id');
    //    DB::table('notifications')->where('id',$getID)->update(['read_at'=>now()]);
    return view('admin-demande_show', compact('demande'));
    } 
 
    public function edit($id)
    {
        $demandes= DB::table('demandes_inscription')->where('id',$id)->first();
        return view('view dyal updae',compact('demandes'));
    }
    public function update(Request $request, $id)
    {
        $demandes= DB::table('demandes_inscription')->where('id',$id)->update([
            'centre_rc'=>$request->centrerc,
            'numero_rc'=>$request->numerorc,
            'telephone'=>$request->phone,
            'fax'=>$request->fax,
            'email'=>$request->email,
            'raison_social'=>$request->raison_sociale,
            'objet_activite'=>$request->objet_activite,
            'numero_agrement'=>$request->numero_agrement,
            'ville'=>$request->ville,
            'adresse'=>$request->adresse,
        ]);
        return redirect()->route('le nom drout pour afficher lview');
    }


    public function delete($id)
    {
        DB::table('demandes_inscription')->where('id',$id)->delete();  
        return redirect()->route('demandes');    
    }

    public function deleteAll()
    {
        DB::table('demandes_inscription')->delete();  
        return redirect()->route('demandes');    
    }

    public function deleteAllTrunc($id)
    {
        DB::table('demandes_inscription')->truncate();  
        return redirect()->route('demandes');    
    }

    public function readAlll()
    {
        $users=User::find(auth()->user()->id);

        foreach($users->unreadNotifications as $notif){
            $notif->markAsRead();

        }


        return redirect()->back();    
    }


    public function showDemadeTri(Request $request)
    {
        
        $demandes = DB::table('demandes_inscription')
        ->where(function ($query) use ($request) {
            $query->where('id', $request->id)
                ->orWhere('email', $request->email);
        })
        ->get();
    
            return view('admin-demande')->with('demandes', $demandes);
            
    }


}
