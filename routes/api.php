<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/liste/annonces', 'AnnonceController@getAllannonceApi')
    ->name('liste.annonces')
    ->middleware('cors');
Route::post('/enregistrer/utilisateur', 'UserController@storeAPI')
    ->name('enregistrer.utilisateur')
    ->middleware('cors');

Route::get('/une/annonce/{id}', 'AnnonceController@getAnnonceById')
    ->name('une.annonce')
    ->middleware('cors');

Route::get('/liste/cooperatives', 'CooperationController@getAllCooperation')
    ->name('liste.cooperations')
    ->middleware('cors');

Route::get('/liste/categories', 'CategorieController@getAllCategories')
    ->name('liste.categories')
    ->middleware('cors');

Route::get('/liste/sous-categories', 'SousCategorieController@getAllSousCategories')
    ->name('liste.sous-categories')
    ->middleware('cors');

Route::get('/liste/services', 'ServiceController@getAllServices')
    ->name('liste.services')
    ->middleware('cors');

Route::get('/liste/meteo', 'PublicationController@getPublucations')
    ->name('liste.meteo')
    ->middleware('cors');

Route::get('/liste/conseil', 'ConseilController@getConseilApi')
    ->name('liste.conseil')
    ->middleware('cors');
