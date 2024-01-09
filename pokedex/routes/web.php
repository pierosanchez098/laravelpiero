<?php

use App\Http\Controllers\PokemonController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('pokemons.choose_role');
});

Route::get('/pokemons/index', [PokemonController::class, 'index'])->name('pokemons.index');
Route::get('/pokemons/indexusuario', [PokemonController::class, 'indexusuario'])->name('pokemons.indexusuario');
Route::post('/pokemons', [PokemonController::class, 'store'])->name('pokemons.store');



Route::middleware(['role:admin'])->group(function () {
    Route::resource('pokemons', PokemonController::class);
});


