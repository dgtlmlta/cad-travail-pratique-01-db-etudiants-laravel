<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
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
Route::get('/', function () {
    return view("bienvenue", [
        "pageTitle" => __("welcome.pageTitle")
    ]);
})->name("index");

Route::get('/etudiants', [EtudiantController::class, "index"])->name("etudiants.index");


// Formulaire d'ajout d'un étudiant
Route::get('/etudiants/ajout', [EtudiantController::class, "create"])->name("etudiants.create");
// Action d'ajout à la base de données
Route::post('/etudiants/ajouter', [EtudiantController::class, "store"])->name("etudiants.store");


// Modifications d'un étudiant
Route::get('/etudiants/{etudiant}/modifier', [EtudiantController::class, "edit"])->name("etudiants.edit");
Route::put('/etudiants/{etudiant}', [EtudiantController::class, "update"])->name("etudiants.update");


// Afficher un étudiant par son id
Route::get('/etudiants/{etudiant}', [EtudiantController::class, "show"])->name("etudiants.show");

// Action de supprimer un étudiant par son id
Route::delete('/etudiants/{etudiant}', [EtudiantController::class, "destroy"])->name("etudiants.destroy");

// Authentification et enregistrement
Route::get('/authentification', [AuthController::class, 'index'])->name("auth.login");
Route::post('/authentifier', [AuthController::class, 'login'])->name('login.custom');
Route::get('/deconnecter', [AuthController::class, 'logout'])->name('logout.custom');;

Route::get('/enregistrement', [AuthController::class, 'create'])->name("auth.register");
Route::post('/enregistrer', [AuthController::class, 'store'])->name('register.custom');


/**
 *
 * Sections protégées par l'authentification
 *
 */
Route::middleware(['auth'])->group(function () {
    // Liste d'articles
    Route::get("/articles", [ArticleController::class, "index"])->name("articles.index");

    // Création d'articles
    Route::get("/articles/ajout", [ArticleController::class, "create"])->name("articles.create");
    Route::post("/articles/ajouter", [ArticleController::class, "store"])->name("articles.store");

    // Affichage d'un article
    Route::get("/articles/{article}", [ArticleController::class, "show"])->name("articles.show");

    // Modifications d'article
    Route::get("/articles/{article}/modifier", [ArticleController::class, "create"])->name("articles.edit");
    Route::put("/articles/{article}", [ArticleController::class, "create"])->name("articles.update");



    // Routes pour les fichiers
});



/**
 *
 * Choix de langue
 *
 */
Route::get('/locale/{lang}', [LocaleController::class, "setLocale"]);
