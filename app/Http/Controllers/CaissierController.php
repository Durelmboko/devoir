<?php

namespace App\Http\Controllers;

use App\Models\caissier;
use Illuminate\Http\Request;

class CaissierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caissier=caissier::all();
        return view('caissier.index',compact("caissier"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('caissier.add');
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
            "nomCaissier"=>"required",
            "prenomCaissier"=>"required",
            "niveau"=>"required",
        ]);
        $caissier=new caissier();
        $caissier->nomCaissier=$request->input('nomCaissier');
        $caissier->prenomCaissier=$request->input('prenomCaissier');
        $caissier->niveau=$request->input('niveau');
        $caissier->save();
        // return redirect()->route("tableEntreprise");
        return redirect()->route("caissier.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\caissier  $caissier
     * @return \Illuminate\Http\Response
     */
    public function show(caissier $caissier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\caissier  $caissier
     * @return \Illuminate\Http\Response
     */
    public function edit(caissier $caissier)
    {
        $caissier=caissier::findOrFail($id);
        return view("caissier.update",compact("caissier"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\caissier  $caissier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, caissier $caissier)
    {
        $caissier=caissier::findOrFail($id);
        $caissier->nomCaissier->$request->get('nomCaissier');
        $caissier->prenomCaissier->$request->get('prenomCaissier');
        $caissier->niveau->$request->get('niveau');
        $caissier->update();
        return redirect()->route("caissier.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\caissier  $caissier
     * @return \Illuminate\Http\Response
     */
    public function destroy(caissier $caissier)
    {
        caissier::find($id)->delete();
        return redirect()->route("caissier.index");
    }
}
