<?php

namespace App\Http\Controllers;

use App\Models\encaisser;
use Illuminate\Http\Request;

class EncaisserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encaisser=encaisser::all();
        return view('encaisser.index',compact("encaisser"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('encaisser.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "datedebut"=>"required",
            "datefin"=>"required",
            "heureEncaisse"=>"required",
            "etudiants_id"=>"required",
            "caissiers_id"=>"required",
        ]);
        $encaisser=new encaisser();
        $encaisser->datedebut=$request->input('datedebut');
        $encaisser->datefin=$request->input('datefin');
        $encaisser->heureEncaisse=$request->input('heureEncaisse');
        $encaisser->etudiants_id=$request->input('etudiants_id');
        $encaisser->caissiers_id=$request->input('caissiers_id');
        $encaisser->save();
        // return redirect()->route("tableEntreprise");
        return redirect()->route("encaisser.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\encaisser  $encaisser
     * @return \Illuminate\Http\Response
     */
    public function show(encaisser $encaisser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\encaisser  $encaisser
     * @return \Illuminate\Http\Response
     */
    public function edit(encaisser $encaisser)
    {
        $encaisser=encaisser::findOrFail($id);
        return view("encaisser.update",compact("encaisser"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\encaisser  $encaisser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, encaisser $encaisser)
    {
        $encaisser=classe::findOrFail($id);
        $encaisser->datedebut->$request->get('datedebut');
        $encaisser->datefin->$request->get('datefin');
        $encaisser->heureEncaisse->$request->get('heureEncaisse');
        $encaisser->etudiants_id->$request->get('etudiants_id');
        $encaisser->caissiers_id->$request->get('caissiers_id');
        $encaisser->update();
        return redirect()->route("encaisser.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\encaisser  $encaisser
     * @return \Illuminate\Http\Response
     */
    public function destroy(encaisser $encaisser)
    {
        encaisser::find($id)->delete();
        return redirect()->route("encaisser.index");
    }
}
