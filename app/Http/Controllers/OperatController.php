<?php

namespace App\Http\Controllers;

use App\Models\Operateur;
use Illuminate\Http\Request;

class OperatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $operateur = Operateur::all();
        $operateur = Operateur::get();
        return view('admins',compact('operateur')) ;
    }

    public function trier($date1 , $date2)
    {
        // $operateur = Operateur::all();
        $operateur = Operateur::where('date','<',$date1)->get();
        return view('admins',compact('operateur')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('kfdjf');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $operateur = new Operateur();
        // $operateur->centre_rc=$request->centre_rc;
        // $operateur->numero_rc=$request->numero_rc;
        // $operateur->save();

        $request->validate([
            'numero_rc'=>'required',
        ]);

        Operateur::create([
             'numero_rc'=>$request->numero_rc,
             'numero_rc'=>$request->numero_rc,
             'numero_rc'=>$request->numero_rc,
             'numero_rc'=>$request->numero_rc,
             'numero_rc'=>$request->numero_rc,
        ]);
        return view('ad');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $operateur =Operateur::onlyTrashed()->get();
        return $operateur;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $operateur = Operateur::findorFail($id);
        return view('view',compact('operateur'));
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
        $operateur = Operateur::findorFail($id);
       $operateur->numero_rc = $request->numero_rc;
       $operateur->numero_rc = $request->numero_rc;
       $operateur->numero_rc = $request->numero_rc;
       $operateur->numero_rc = $request->numero_rc;
       $operateur->numero_rc = $request->numero_rc;
       $operateur->save();
       return redirect()->route('operateur.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $operateur = Operateur::findorFail($id)->delete();
        return redirect()->route('operateur.index');
        
    }

    public function restore($id)
    {
        Operateur::withTrashed()->where('id',$id)->restore();
        return redirect()->back(); //page li9bl
        
    }

    public function forceDelete($id)
    {
        Operateur::withTrashed()->where('id',$id)->forceDelete();
        return redirect()->back(); //page li9bl
        
    }

    public function reclam_op(){
        $operateur = Operateur::find(1);
        return $operateur->reclamations;
    }

    public function dum_op(){
        $operateur = Operateur::find(1);
        return $operateur->dums;
    }

    public function red(){
        $operateur = Operateur::find(1);
        return $operateur->reds;
    }

    public function red_d_op(){
        $operateur = Operateur::find(1);
        return $operateur->Reds__details;
    }

    public function situation_op(){
        $operateur = Operateur::find(1);
        return $operateur->situations_trans;
    }



}

