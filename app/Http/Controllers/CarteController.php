<?php

namespace App\Http\Controllers;

use App\Models\CarteVin;
use App\Models\CarteMidi;
use App\Models\CarteApero;


class CarteContoller extends Controller
{
    public function index()
    {
        $cartemidi = CarteMidi::all();
        $cartevin = CarteVin::all();
        $carteapero = CarteApero::all();
        return view("carte", compact('cartemidi','cartevin','carteapero'));
    }
}