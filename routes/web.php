<?php

use App\Http\Controllers\ConnexionControler;
use App\Http\Controllers\HomeControler;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeControler::class, "index"]);

Route::get('carte', function () {
    return view('carte');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('evenement', function () {
    return view('evenement');
});
Route::get('galerie', function () {
    return view('galerie');
});
Route::get('reservation', function () {
    return view('reservation');
});

Route::get('connexion', [ConnexionControler::class, "formulaire"]);
Route::post('connexion', [ConnexionControler::class, "traitementConnexion"]);


Route::get('db', function () {
    return view('db');
});
