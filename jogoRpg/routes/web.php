<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pokemons_controller;
use App\Http\Controllers\tipos_controller;
use App\Http\Controllers\raridade_controller;

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

Route::get('/', function () {
    return view('login/admin/login');
});

// Tipos
Route::get('/tipos', function() {
    return view('tipos/index');
});
Route::get('/tipos/novo', function(){
    return view ('tipos/new');
});
Route::post('/tipos/salvar', [tipos_controller::class, 'criar']);

//Raridade
Route::get('/raridades', function() {
    return view('raridades/index');
});

Route::get('/raridades/novo', function(){
    return view ('raridades/new');
});

Route::post('/raridades/salvar', [raridade_controller::class, 'criar']);

// rota pokemons
Route::get('/pokemons', function() {
    return view('pokemons/index');
});
Route::get('/pokemons/novo', function() {
    return view('pokemons/new');
});

Route::post('/pokemon/salvar', [pokemons_controller::class, 'criar']);
