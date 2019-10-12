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

Route::get('/', function () {
    return view('acceuil');
})->middleware('auth');
Route::get('/register', 'RegisterControler@index')->name('register');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/utilisateur', 'UserController');
Route::resource('/categories', 'CategorieController')->middleware('auth');
Route::resource('/sous-categorie', 'SousCategorieController');
Route::resource('/produit', 'ProduitController');
Route::resource('/annonce', 'AnnonceController')->middleware('auth');
