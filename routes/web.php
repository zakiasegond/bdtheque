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
    return view('accueil');
});

Route::get('/connexion', function () {
    return view('connexion');
});

// Route::get('/collection', function () {
//     return view('collection');
// });


// Route::get('/decouvrir', function () {
//     return view('decouvrir');
// });



Route::get('/', 'accueil@getAccueil');

Route::get('/collection', 'collection@getCollection');

Route::get('/decouvrir', 'decouvrir@getDecouvrir');

Route::get('/utilisateur', 'utilisateur@getUtilisateur');


