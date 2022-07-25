<?php

namespace App\Http\Controllers;

use App\Models\Carrousel;
use App\Models\HomeTexte;
use Illuminate\Http\Request;

class HomeControler extends Controller
{
    public function index()
    {
        $homeTexte = HomeTexte::all();
        $carrouselActive = Carrousel::where('active', 1)->get();
        return view("home", compact('carrouselActive', 'homeTexte'));
    }
}
