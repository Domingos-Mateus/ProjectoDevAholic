<?php

use Illuminate\Support\Facades\Route;

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

//Encarregados
Route::get('/encarregado/registar_encarregado', 'App\Http\Controllers\encarregadoController@create');
Route::post('/salvar_encarregado', 'App\Http\Controllers\encarregadoController@store');

Route::get('/encarregado/listar_encarregado', 'App\Http\Controllers\encarregadoController@index');
Route::get('/encarregado/visualizar_encarregado/{id}', 'App\Http\Controllers\encarregadoController@show');

Route::get('/encarregado/editar_encarregado/{id}', 'App\Http\Controllers\encarregadoController@edit');
Route::put('/editar_encarregado/update/{id}', 'App\Http\Controllers\encarregadoController@update');

Route::get('/eliminar_encarregado/{id}', 'App\Http\Controllers\encarregadoController@destroy');


//Crianças
Route::get('/crianca/registar_crianca', 'App\Http\Controllers\criancaController@create');
Route::post('/salvar_crianca', 'App\Http\Controllers\criancaController@store');

Route::get('/crianca/listar_crianca', 'App\Http\Controllers\criancaController@index');
Route::get('/crianca/visualizar_crianca/{id}', 'App\Http\Controllers\criancaController@show');

Route::get('/crianca/editar_crianca/{id}', 'App\Http\Controllers\criancaController@edit');
Route::put('/editar_crianca/update/{id}', 'App\Http\Controllers\criancaController@update');

Route::get('/eliminar_crianca/{id}', 'App\Http\Controllers\criancaController@destroy');


Route::get('/', function () {
    return view('index');
});
Route::get('index', function () {
    return view('index');
});
/*

Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
