<?php

namespace App\Http\Controllers;

use App\Models\CarteMidi;
use Illuminate\Http\Request;


class CarteMidiController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartemidi = CarteMidi::orderBy('ordre', 'asc')->get();
        $cartemidientree = CarteMidi::where('section', 'entree' )->orderby('ordre', 'asc')->orderBy('active', 'desc')->get();
        $cartemidiplat = CarteMidi::where('section', 'plat' )->orderby('ordre', 'asc')->orderBy('active', 'desc')->get();
        $cartemididessert = CarteMidi::where('section', 'dessert' )->orderby('ordre', 'asc')->orderBy('active', 'desc')->get();

        return view('cartemidi.index', compact('cartemidi', 'cartemidientree','cartemidiplat', 'cartemididessert'))
            ->with('i', (request()->input('page', 1) - 1) * 4);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cartemidi = Cartemidi::all();
        return view('cartemidi.create', compact('cartemidi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'section' => 'required',
            'ordre' => 'required',
        ]);

        Cartemidi::create($request->all());

        return redirect()->route('cartemidi.index')
            ->with('success', 'Onglet de carrousel créé avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cartemidi  $cartemidi
     * @return \Illuminate\Http\Response
     */
    public function show(Cartemidi $cartemidi)
    {
        return view('cartemidi.show', compact('cartemidi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cartemidi  $cartemidi
     * @return \Illuminate\Http\Response
     */
    public function edit(Cartemidi $cartemidi, Request $request)
    {
        
        return view('cartemidi.edit', compact('cartemidi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cartemidi  $cartemidi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cartemidi $cartemidi)
    {
        $request->validate([
            'nom' => 'required',
            'section' => 'required',
            'ordre' => 'required',
        ]);
        $cartemidi->update($request->all());
        return redirect()->route('cartemidi.index')
            ->with('success', 'Votre carrousel a été mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cartemidi  $cartemidi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cartemidi $cartemidi)
    {
        $cartemidi->delete();

        return redirect()->route('cartemidi.index')
            ->with('success', 'Votre onglet de carrousel a été supprimé avec succès');
    }
}
