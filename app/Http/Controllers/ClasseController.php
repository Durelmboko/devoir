<?php

namespace App\Http\Controllers;

use App\Models\classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classe=classe::all();
        return view('classe.index',compact("classe"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('classe.add');
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
            "nomcl"=>"required",
            "fraisInscription"=>"required",
            "mensualite"=>"required",
            "fraistenue"=>"required",
            "fraisamicale"=>"required",
        ]);
        $classe=new classe();
        $classe->nomcl=$request->input('nomcl');
        $classe->fraisInscription=$request->input('fraisInscription');
        $classe->mensualite=$request->input('mensualite');
        $classe->fraistenue=$request->input('fraistenue');
        $classe->fraisamicale=$request->input('fraisamicale');
        $classe->save();
        // return redirect()->route("tableEntreprise");
        return redirect()->route("classe.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function show(classe $classe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function edit(classe $classe)
    {
        $classe=classe::findOrFail($id);
        return view("classe.update",compact("classe"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, classe $classe)
    {
        $classe=classe::findOrFail($id);
        $classe->nomcl->$request->get('nomcl');
        $classe->fraisInscription->$request->get('fraisInscription');
        $classe->mensualite->$request->get('mensualite');
        $classe->fraistenue->$request->get('fraistenue');
        $classe->fraisamicale->$request->get('fraisamicale');
        $classe->update();
        return redirect()->route("classe.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function destroy(classe $classe)
    {
        classe::find($id)->delete();
        return redirect()->route("classe.index");
    }
}
