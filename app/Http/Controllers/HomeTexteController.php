<?php

namespace App\Http\Controllers;

use App\Models\HomeTexte;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeControler;
use Illuminate\Support\Facades\Log;

class HomeTexteController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeTexte  $homeTexte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeTexte $homeTexte)
    {
        $request->validate([
            'home_titre' => 'required',
            'home_texte' => 'required',
        ]);

        $data = [
            'home_titre'  => $request->home_titre,
            'home_texte' => $request->home_texte
        ];
        $homeTexte = HomeTexte::find(1);
        $homeTexte->fill($data);
        $homeTexte->save();
        return redirect('/');
    }
}
