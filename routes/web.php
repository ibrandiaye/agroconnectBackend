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


Route::resource('/culture', 'CultureController')->middleware('auth', 'isAdmin', 'isCooperative');
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth', 'isAdmin');
Route::resource('/utilisateur', 'UserController');
Route::resource('/categories', 'CategorieController')->middleware('auth', 'isAdmin');
Route::resource('/sous-categorie', 'SousCategorieController')->middleware('auth', 'isAdmin');
Route::resource('/produit', 'ProduitController')->middleware('auth', 'isAdmin');
Route::resource('/poster', 'PosterController');
Route::resource('/adhesion', 'AdhesionController')->middleware('isPaysan');
Route::post('/poster', 'PosterController@store')->name('poster.store')->middleware('auth');
Route::resource('/cooperation', 'CooperationController')->middleware('auth', 'isAdmin');

Route::resource('/parcelle', 'ParcelleController');

Route::resource('/grenier', 'GrenierController');



Route::get('/tous-les-cooperatives/', 'CooperationController@getAllCooperativeAdmin')->name('cooperation.all.admin')->middleware('auth', 'isAdmin');
Route::get('/tous-les-cultures/', 'CultureController@getAllCultureAdmin')->name('culture.all.admin')->middleware('auth', 'isAdmin');

Route::resource('/service', 'ServiceController');
Route::get('/service/create', 'ServiceController@create')->name('service.create')->middleware('auth');
Route::get('/service/categorie/{id}', 'ServiceController@getServiceByCategorie')->name('service.souscategorie');
Route::get('/mes-services', 'ServiceController@getServiceByUser')->name('mes.services');

Route::resource('/interesse', 'InteresseController')->middleware('auth');

Route::resource('/annonce', 'AnnonceController');
Route::get('/une-annonce/{id}', 'AnnonceController@getOneAnnonce')->name('une.annonce')->middleware('auth');
Route::get('/utilisateur/annonce', 'AnnonceController@getAnnonceByUser')->name('utilisateur.annonce');
Route::get('/annonce/create', 'AnnonceController@create')->name('annonce.create')->middleware('auth');
Route::get('/annonces', 'AnnonceController@getAllannonce')->name('liste.annonce');
Route::get('/annonces/categorie/{id}', 'AnnonceController@getAnnoncesByCategorie')->name('categorie.annonces');
Route::get('/tous-les-annonces/', 'AnnonceController@getAllannonceAdmin')->name('annonce.all.admin')->middleware('isAdmin');
Route::get('/valider-annonce/{id}', 'AnnonceController@validerAnnonce')->name('valider.annonce')->middleware('isAdmin');
Route::get('/annonce-a-valider/', 'AnnonceController@getAnnonceToValidate')->name('annonce.invalide')->middleware('isAdmin');
Route::get('/mes-annonces', 'AnnonceController@getAnnonceByUser')->name('mes.annonces')->middleware('auth');
Route::get('/une-annonce/utilisateur/{id}', 'AnnonceController@getAnnonceUserById')->name('utilisateur.une.annonces')->middleware('auth');


Route::resource('/publication', 'PublicationController');
Route::get('/publication/create', 'PublicationController@create')->name('publication.create')->middleware('auth', 'isAdmin');

Route::get('/conseils/liste', 'ConseilController@getConselsAndUser')->name("conseil.liste");
Route::get('/conseils/{id}', 'ConseilController@getOneConseil')->name("conseil.une");
Route::resource('/conseil', 'ConseilController')->middleware('auth');
