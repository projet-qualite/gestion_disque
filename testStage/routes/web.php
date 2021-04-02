<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\RealisateurController;
use App\Http\Controllers\DisqueController;
use App\Http\Controllers\LivreController;

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

Route::get('/', [PagesController::class, "index"]);
Route::get('/categorie', [PagesController::class, "categorie"]);
Route::get('/liste_categorie', [PagesController::class, "list_categorie"]);
Route::get('/modifier_categorie/{id}',[PagesController::class, "modifier_categorie"]);

Route::get('/realisateur', [PagesController::class, "realisateur"]);
Route::get('/liste_realisateur', [PagesController::class, "liste_realisateur"]);
Route::get('/modifier_realisateur/{id}',[PagesController::class, "modifier_realisateur"]);


Route::get('/disque', [PagesController::class, "disque"]);
Route::get('/liste_disque', [PagesController::class, "liste_disque"]);
Route::get('/modifier_disque/{id}',[PagesController::class, "modifier_disque"]);


Route::get('/livre', [PagesController::class, "livre"]);
Route::get('/liste_livre', [PagesController::class, "liste_livre"]);
Route::get('/modifier_livre/{id}',[PagesController::class, "modifier_livre"]);







Route::post('/creerCategorie', [CategorieController::class, "creerCategorie"]);
Route::get('/supprimer_categorie/{id}', [CategorieController::class, "supprimerCategorie"]);
Route::put('/modifierCategorie/{id}', [CategorieController::class, "modifierCategorie"]);



Route::post('/creerRealisateur', [RealisateurController::class, "creerRealisateur"]);
Route::get('/supprimer_realisateur/{id}', [RealisateurController::class, "supprimerRealisateur"]);
Route::put('/modifierRealisateur/{id}', [RealisateurController::class, "modifierRealisateur"]);



Route::post('/creerDisque', [DisqueController::class, "creerDisque"]);
Route::get('/supprimer_disque/{id}', [DisqueController::class, "supprimerDisque"]);
Route::put('/modifierDisque/{id}', [DisqueController::class, "modifierDisque"]);


Route::post('/creerLivre', [LivreController::class, "creerLivre"]);
Route::get('/supprimer_livre/{id}', [LivreController::class, "supprimerLivre"]);
Route::put('/modifierLivre/{id}', [LivreController::class, "modifierLivre"]);

