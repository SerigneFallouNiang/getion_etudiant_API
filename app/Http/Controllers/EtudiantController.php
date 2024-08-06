<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Http\Requests\StoreEtudiantRequest;
use App\Http\Controllers\EtudiantController;
use App\Http\Requests\UpdateEtudiantRequest;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiants = Etudiant::all();
        // return $this->customJsonResponse("Liste des etudiants", $etudiants);
        return $etudiants;
        
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEtudiantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Etudiant $etudiant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etudiant $etudiant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEtudiantRequest $request, Etudiant $etudiant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiant $etudiant)
    {
        //
    }
}
