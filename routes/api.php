<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\EvaluationController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Authentification
Route::post("login", [ApiController::class, "login"]);

http://127.0.0.1:8000/api/etudiants/{etudiant}


Route::middleware("auth")->group(
    function () {
        Route::get("logout", [ApiController::class, "logout"]);
        Route::get("refreshToken", [ApiController::class, "refreshToken"]);

       // Route CRUD ETUDIANT
        Route::apiResource('etudiants',EtudiantController::class)->only('index', 'show','store', 'destroy');
        Route::post('etudiants/{etudiant}', [EtudiantController::class, 'update']);

        //Routes CRUD EVALUATION
        Route::apiResource('evaluations',EvaluationController::class);


    //SoftDelete et récupération des données
        Route::get('etudiants/trashed', [EtudiantController::class, 'trashed']);
        Route::post('etudiants/{id}/restore', [EtudiantController::class, 'restore']);
        Route::delete('etudiants/{id}/force', [EtudiantController::class, 'forceDelete']);
    }
);

