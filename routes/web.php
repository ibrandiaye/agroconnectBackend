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

// Les routes de l'application web. (php artisan route:list)
Route::get('/', 'AnnonceController@getLastAnnonces')->name('acceuil');
Route::get('/register', 'RegisterControler@index')->name('register');
Auth::routes();
Route::get('/utilisateur/profil', 'UserController@profil')->name('utilsateur.profil')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/utilisateur', 'UserController');
Route::resource('/categories', 'CategorieController')->middleware('auth');
Route::resource('/sous-categorie', 'SousCategorieController');
Route::resource('/produit', 'ProduitController');
Route::resource('/poster', 'PosterController');
Route::post('/poster', 'PosterController@store')->name('poster.store')->middleware('auth');
Route::resource('/cooperation', 'CooperationController');
Route::resource('/parcelle', 'ParcelleController');
Route::resource('/grenier', 'GrenierController');
Route::resource('/culture', 'CultureController');


Route::get('/tous-les-cooperatives/', 'CooperationController@getAllCooperativeAdmin')->name('cooperation.all.admin');
Route::get('/tous-les-cultures/', 'CultureController@getAllCultureAdmin')->name('culture.all.admin');
Route::resource('/service', 'ServiceController');
Route::get('/service/create', 'ServiceController@create')->name('service.create')->middleware('auth');
Route::get('/service/categorie/{id}', 'ServiceController@getServiceByCategorie')->name('service.souscategorie');
Route::resource('/interesse', 'InteresseController')->middleware('auth');

Route::resource('/annonce', 'AnnonceController');
Route::get('/une-annonce/{id}', 'AnnonceController@getOneAnnonce')->name('une.annonce')->middleware('auth');
Route::get('/utilisateur/annonce', 'AnnonceController@getAnnonceByUser')->name('utilisateur.annonce');
Route::get('/annonce/create', 'AnnonceController@create')->name('annonce.create')->middleware('auth');
Route::get('/annonces', 'AnnonceController@getAllannonce')->name('liste.annonce');
Route::get('/annonces/categorie/{id}', 'AnnonceController@getAnnoncesByCategorie')->name('categorie.annonces');
Route::get('/tous-les-annonces/', 'AnnonceController@getAllannonceAdmin')->name('annonce.all.admin');
Route::get('/valider-annonce/{id}', 'AnnonceController@validerAnnonce')->name('valider.annonce');
Route::get('/annonce-a-valider/', 'AnnonceController@getAnnonceToValidate')->name('annonce.invalide');
<<<<<<< HEAD
Route::get('/mes-annonces', 'AnnonceController@getAnnonceByUser')->name('mes.annonces')->middleware('auth');
Route::get('/une-annonce/{id}', 'AnnonceController@getAnnonceUserById')->name('utilisateur.une.annonces')->middleware('auth');
=======
Route::get('/mes-annonces','AnnonceController@getAnnonceByUser')->name('mes.annonces')->middleware('auth');
Route::get('/une-annonce/utilisateur/{id}','AnnonceController@getAnnonceUserById')->name('utilisateur.une.annonces')->middleware('auth');
>>>>>>> 4577cf272039ab06cb850e9d5767086724c64a76
