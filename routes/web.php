<?php

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

/*Route::get('/', function () {
    return view('acceuil');
})->middleware('auth');*/
Route::get('/', 'AnnonceController@getLastAnnonces')->name('acceuil');
Route::get('/register', 'RegisterControler@index')->name('register');
Auth::routes();
Route::resource('/annonce', 'AnnonceController')->middleware('auth');
Route::get('/annonces', 'AnnonceController@getAllannonce')->name('liste.annonce');
Route::get('/une-annonce/{id}', 'AnnonceController@getOneAnnonce')->name('une.annonce');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/utilisateur', 'UserController');
Route::resource('/categories', 'CategorieController')->middleware('auth');
Route::resource('/sous-categorie', 'SousCategorieController');
Route::resource('/produit', 'ProduitController');
Route::resource('/poster', 'PosterController');
Route::resource('/cooperation', 'CooperationController');
Route::get('/annonce-a-valider/', 'AnnonceController@getAnnonceToValidate')->name('annonce.invalide');
Route::get('/tous-les-annonces/', 'AnnonceController@getAllannonceAdmin')->name('annonce.all.admin');
Route::get('/valider-annonce/{id}', 'AnnonceController@validerAnnonce')->name('valider.annonce');
Route::resource('/service', 'ServiceController')->middleware('auth');
Route::get('/service/categorie/{id}', 'ServiceController@getServiceByCategorie')->name('service.souscategorie');