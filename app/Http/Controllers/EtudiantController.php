<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class EtudiantController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
        return view("etudiants.index", [
            "pageTitle" => __("etudiants/index.pageTitle"),
            "etudiants" => Etudiant::paginate(12)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        return view("etudiants.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $etudiant = new Etudiant();

        $etudiant->nom = $request->nom;
        $etudiant->adresse = $request->adresse;
        $etudiant->ville_id = $request->ville_id;
        $etudiant->courriel = $request->courriel;
        $etudiant->telephone = $request->telephone;
        $etudiant->ddn = $request->ddn;

        if (!$etudiant->save()) {
            return redirect("/");
        };

        return redirect("/etudiants/{$etudiant->id}");
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @param  Integer  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiant) {
        return view("etudiants.show", [
            "etudiant" => $etudiant
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant) {
        // Vérifier si l'utilisateur peut modifier l'étudiant
        $this->authorize("update", $etudiant);

        return view("etudiants.edit", [
            "etudiant" => $etudiant
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiant $etudiant) {
        // Vérifier si l'utilisateur peut modifier l'étudiant
        $this->authorize("update", $etudiant);

        //
        $etudiant->nom = $request->nom;
        $etudiant->adresse = $request->adresse;
        $etudiant->ville_id = $request->ville_id;
        $etudiant->courriel = $request->courriel;
        $etudiant->telephone = $request->telephone;
        $etudiant->ddn = $request->ddn;

        if (!$etudiant->save()) {
            return redirect("/");
        };

        return redirect("/etudiants/{$etudiant->id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiant) {
        // Vérifier si l'utilisateur peut supprimer l'étudiant
        $this->authorize("delete");

        //
        if (!$etudiant->delete()) {
            return redirect("/etudiants/{$etudiant->id}");
        };

        return redirect("/");
    }
}
