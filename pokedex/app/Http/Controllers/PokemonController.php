<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;

class PokemonController extends Controller
{

    public function create()
    {
        return view('pokemons.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
            'tipo' => 'required',
            'peso' => 'required|numeric',
            'tamaño' => 'required|in:grande,mediano,pequeño',
        ]);

        Pokemon::create($validatedData);

        return redirect()->route('pokemons.index')->with('success', 'Pokemon creado exitosamente.');
    }

    public function index()
    {
        $pokemons = Pokemon::all();
        return view('pokemons.index', compact('pokemons'));
    }

    public function indexusuario()
    {
        $pokemons = Pokemon::all();
        return view('pokemons.indexusuario', compact('pokemons'));
    }

    public function show($id)
    {
        $pokemon = Pokemon::findOrFail($id);
        return view('pokemons.show', compact('pokemon'));
    }


    public function destroy($id)
    {
        $pokemon = Pokemon::findOrFail($id);
        $pokemon->delete();

        return redirect()->route('pokemons.index')->with('success', 'Pokemon eliminado exitosamente.');
    }

    public function edit($id)
    {
        $pokemon = Pokemon::findOrFail($id);
        return view('pokemons.edit', compact('pokemon'));
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
            'tipo' => 'required',
            'peso' => 'required|numeric',
            'tamaño' => 'required|in:grande,mediano,pequeño',
        ]);

        $pokemon = Pokemon::findOrFail($id);
        $pokemon->update($validatedData);

        return redirect()->route('pokemons.index')->with('success', 'Pokemon actualizado exitosamente.');
    }
}

