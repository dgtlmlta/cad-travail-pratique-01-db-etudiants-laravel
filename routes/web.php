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


Route::get('/etudiants/{id}', [EtudiantController::class, "show"])->name("etudiants.show");
Route::delete('/etudiants/{id}', [EtudiantController::class, "destroy"])->name("etudiants.destroy");