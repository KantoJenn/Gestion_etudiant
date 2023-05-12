<?php

use Illuminate\Support\Facades\Route;
//ito manao importation controllers
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\RechercheController;
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

//Une Route qui permet d'Afficher une vue pour lister des Etudiants
//Le "/page_etudiant_liste" ny URL de la Route
// 'liste_etudiants_page' io le nom an'le fonction miprermettre mampiseo ny liste des etudiants
Route::get('/page_etudiant_liste', [EtudiantController::class,'liste_etudiants_page']);

Route::get('/page_ajout_etudiant', [EtudiantController::class,'ajout_etudiant_page']);

Route::post('/ajoutEtudiant', [EtudiantController::class,'ajout_etudiant']);

Route::get('/page_modifer_etudiant/{id}', [EtudiantController::class,'update_etudiant_page']);

Route::POST('/modifierEtudiant', [EtudiantController::class,'update_etudiant']);

Route::get('/page_supp_etudiant/{id}', [EtudiantController::class,'supp_etudiant_page']);

Route::get('/recherche', [RechercheController::class, 'rechercher'])->name('recherche.be');
