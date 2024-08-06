<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\EvaluationController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Route CRUD ETUDIANT
Route::apiResource('etudiants',EtudiantController::class)->only('index', 'show','store', 'destroy');
Route::post('etudiants/{etudiant}', [EtudiantController::class, 'update']);

//Routes CRUD EVALUATION
Route::apiResource('evaluations',EvaluationController::class)->only('index', 'show','store', 'destroy');
