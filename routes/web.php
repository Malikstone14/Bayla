<?php

use App\Models\CarteVin;
use App\Models\CarteMidi;
use App\Models\CarteApero;
use App\Models\CarteTapas;
use App\Models\CarrouselPresse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControler;
use App\Http\Controllers\ConnexionControler;
use App\Http\Controllers\CarrouselController;
use App\Http\Controllers\CarteMidiController;
use App\Http\Controllers\HomeTexteController;
use App\Http\Controllers\CarteAperoController;
use App\Http\Controllers\CarrouselPresseController;

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
    // APPELLE TOUTES LES REQUETES NECESSAIRE A L'AFFICHAGE DU MENU DU MIDI

    $cartemidi = CarteMidi::all();
    $cartemidientree = CarteMidi::where('section', 'entree' )->where('active', 1)->orderby('ordre', 'asc')->get();
    $cartemidiplat = CarteMidi::where('section', 'plat' )->where('active', 1)->orderby('ordre', 'asc')->get();
    $cartemididessert = CarteMidi::where('section', 'dessert' )->where('active', 1)->orderby('ordre', 'asc')->get();

    //APPELLE TOUTES LES REQUETES NECESSAIRE A L'AFFICHAGE DE LA CARTE DES VINS

    $cartevin = CarteVin::all();
    $cartevinrouge = CarteVin::where('section', 'rouge')->get();
    $cartevinblanc = CarteVin::where('section', 'blanc')->get();
    $cartevinrose = CarteVin::where('section', 'rosé')->get();
    $cartevinchampagne = CarteVin::where('section', 'champagne')->get();

    //APPELLE TOUTES LES REQUETES NECESSAIRE A L'AFFICHAGE DE LA CARTE DES TAPAS

    $carteapero = CarteApero::orderBy('ordre', 'asc')->where('active', 1)->get();

    return view('carte', compact('cartemidi','cartemidientree', 'cartemidiplat', 'cartemididessert', 'cartevin', 'cartevinrouge', 'cartevinblanc', 'cartevinrose', 'cartevinchampagne', 'carteapero'));
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

Route::resource('carrousel', CarrouselController::class);
Route::resource('hometexte', HomeTexteController::class);
Route::resource('carrouselpresse', CarrouselPresseController::class);
Route::resource('cartemidi', CarteMidiController::class);
Route::resource('carteapero', CarteAperoController::class);


require __DIR__ . '/auth.php';
