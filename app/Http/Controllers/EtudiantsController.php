<?php

namespace App\Http\Controllers;

use App\Models\etudiants;
use Illuminate\Http\Request;

class EtudiantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants=encaisser::all();
        return view('etudiant.index',compact("etudiant"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('etudiant.add');
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
            "nom"=>"required",
            "prenom"=>"required",
            "naissance"=>"required",
            "lieu"=>"required",
            "sexe"=>"required",
            "diplome"=>"required",
            "nomtuteur"=>"required",
            "classe_id"=>"required",
        ]);
        $etudiants=new encaisser();
        $etudiants->nom=$request->input('nom');
        $etudiants->prenom=$request->input('prenom');
        $etudiants->naissance=$request->input('naissance');
        $etudiants->lieu=$request->input('lieu');
        $etudiants->sexe=$request->input('sexe');
        $etudiants->diplome=$request->input('diplome');
        $etudiants->nomtuteur=$request->input('nomtuteur');
        $etudiants->classe_id=$request->input('classe_id');
        $etudiants->save();
        // return redirect()->route("tableEntreprise");
        return redirect()->route("encaisser.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\etudiants  $etudiants
     * @return \Illuminate\Http\Response
     */
    public function show(etudiants $etudiants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\etudiants  $etudiants
     * @return \Illuminate\Http\Response
     */
    public function edit(etudiants $etudiants)
    {
        $etudiants=etudiants::findOrFail($id);
        return view("etudiant.update",compact("etudiant"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\etudiants  $etudiants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, etudiants $etudiants)
    {
        $etudiants=classe::findOrFail($id);
        $etudiants->nom->$request->get('nom');
        $etudiants->prenom->$request->get('prenom');
        $etudiants->naissance->$request->get('naissance');
        $etudiants->lieu->$request->get('lieu');
        $etudiants->sexe->$request->get('sexe');
        $etudiants->diplome->$request->get('diplome');
        $etudiants->nomtuteur->$request->get('nomtuteur');
        $etudiants->classe_id->$request->get('classe_id');
        $etudiants->update();
        return redirect()->route("etudiant.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\etudiants  $etudiants
     * @return \Illuminate\Http\Response
     */
    public function destroy(etudiants $etudiants)
    {
        etudiants::find($id)->delete();
        return redirect()->route("etudiant.index");
    }
}
