<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Page d'accueil, liste des étudiants
Route::get('/', [EtudiantController::class, "index"])->name("etudiants.index");
Route::get('/etudiants', [EtudiantController::class, "index"])->name("etudiants.index");

// Formulaire d'ajout d'un étudiant
Route::get('/etudiants/ajout', [EtudiantController::class, "create"])->name("etudiants.create");
// Action d'ajout à la base de données
Route::post('/etudiants/ajout', [EtudiantController::class, "store"])->name("etudiants.store");

// Afficher un étudiant par son id
Route::get('/etudiants/{id}', [EtudiantController::class, "show"])->name("etudiants.show");

// Action de supprimer un étudiant par son id
Route::delete('/etudiants/{id}', [EtudiantController::class, "destroy"])->name("etudiants.destroy");