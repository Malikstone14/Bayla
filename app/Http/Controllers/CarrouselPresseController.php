<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarrouselPresse;
use Nette\Utils\Image;
use App\Models\Carrousel;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class CarrouselPresseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carrouselpresse = CarrouselPresse::orderBy('ordre', 'asc')->get();


        return view('carrouselpresse.index', compact('carrouselpresse'))
            ->with('i', (request()->input('page', 1) - 1) * 4);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carrouselpresse = CarrouselPresse::all();
        return view('carrouselpresse.create', compact('carrouselpresse'));
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
            'titre' => 'required',
            'ordre' => 'required',
        ]);

        $image = $request->file('image')->storeAs('public/image', $request->file('image')->getClientOriginalName());
        $filename = $request->file('image')->getClientOriginalName();
        $query = DB::table('Carrousel_presses')->insert([
            'image' => $filename,
            'titre' => $request->input("titre"),
            'ordre' => $request->input("ordre")

        ]);



        return redirect()->route('carrouselpresse.index')
            ->with('success', 'Onglet de carrousel créé avec succès.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarrouselPresse  $carrouselPresse
     * @return \Illuminate\Http\Response
     */
    public function edit(CarrouselPresse $carrouselpresse, Request $request)
    {

        return view('carrouselpresse.edit', compact('carrouselpresse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarrouselPresse  $carrouselPresse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarrouselPresse $carrouselpresse)
    {
        $carrousel_id = $carrouselpresse->id;
        $request->validate([
            'titre' => 'required',
            'ordre' => 'required',
            'URL' => 'required',
            'image' => 'required'
        ]);


        $image = $request->file('image')->storeAs('public/image', $request->file('image')->getClientOriginalName());
        $filename = $request->file('image')->getClientOriginalName();
        $query = DB::table('carrousel_presses')
            ->where('id', $carrousel_id)
            ->update([
                'image' => $filename,
                'titre' => $request->input("titre"),
                'URL' => $request->input("URL"),
                'ordre' => $request->input("ordre")

            ]);

        return redirect()->route('carrouselpresse.index')
            ->with('success', 'Votre carrousel a été mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarrouselPresse  $carrouselPresse
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarrouselPresse $carrouselpresse)
    {
        $carrouselpresse->delete();

        return redirect()->route('carrouselpresse.index')
            ->with('success', 'Votre onglet de carrousel a été supprimé avec succès');
    }
}
