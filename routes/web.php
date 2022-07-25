<?php

use App\Http\Controllers\CarrouselController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControler;
use App\Http\Controllers\ConnexionControler;
use App\Http\Controllers\HomeTexteController;
use Illuminate\Support\Facades\Auth;

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

Route::resource('carrousel', CarrouselController::class);
Route::resource('hometexte', HomeTexteController::class);
// 

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
