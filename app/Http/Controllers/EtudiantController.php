<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Support\Facades\File;
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
        $etudiant = new Etudiant();
        $etudiant->fill($request->validated());
        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $etudiant->photo = $photo->store('etudiants', 'public');
        }

        $etudiant->save();

        return $etudiant;
    }

    /**
     * Display the specified resource.
     */
    public function show(Etudiant $etudiant)
    {
        return $this->customJsonResponse("Livre récupéré avec succès", $etudiant);
    }

    

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEtudiantRequest $request, Etudiant $etudiant)
    {
        $etudiant->fill($request->validated());

        if ($request->hasFile('photo')) {

        if(File::exists(public_path("storage/" . $etudiant->photo))){
            File::delete(public_path($etudiant->photo));
        }

        $photo = $request->file('photo');
        $etudiant->photo = $photo->store('etudiants', 'public');
    }

        $etudiant->update();

        return $etudiant;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();
        return $etudiant;
    }
}
