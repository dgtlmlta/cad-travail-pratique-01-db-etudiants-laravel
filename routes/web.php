<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\LocaleController;

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
Route::get('/', function() {
    return view("bienvenue", [
        "pageTitle" => "Bienvenue"
    ]);
})->name("index");

Route::get('/etudiants', [EtudiantController::class, "index"])->name("etudiants.index");


// Formulaire d'ajout d'un étudiant
Route::get('/etudiants/ajout', [EtudiantController::class, "create"])->name("etudiants.create");
// Action d'ajout à la base de données
Route::post('/etudiants/ajout', [EtudiantController::class, "store"])->name("etudiants.store");


// Formulaire de mise à jour d'un étudiant
Route::get('/etudiants/{etudiant}/modifier', [EtudiantController::class, "edit"])->name("etudiants.edit");
// Action d'ajout à la base de données
Route::put('/etudiants/{etudiant}', [EtudiantController::class, "update"])->name("etudiants.update");


// Afficher un étudiant par son id
Route::get('/etudiants/{etudiant}', [EtudiantController::class, "show"])->name("etudiants.show");

// Action de supprimer un étudiant par son id
Route::delete('/etudiants/{etudiant}', [EtudiantController::class, "destroy"])->name("etudiants.destroy");

// Authentification et enregistrement
Route::get('/authentification', [CustomAuthController::class, 'index'])->name("auth.login");
Route::post('/authentifier', [CustomAuthController::class, 'login'])->name('login.custom');

Route::get('/enregistrement', [CustomAuthController::class, 'create'])->name("auth.register");
Route::post('/enregistrer', [CustomAuthController::class, 'store'])->name('register.custom');


// Choix de langue
Route::get('/locale/{lang}', [LocaleController::class, "setLocale"]);
