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