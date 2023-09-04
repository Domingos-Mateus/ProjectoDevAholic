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


//Cadastrar
Route::get('/cadastro/cadastrar', 'App\Http\Controllers\cadastroController@create');
Route::post('/salvar_cadastro', 'App\Http\Controllers\cadastroController@store');
//Route::get('/admin/editar_cadastro/{id}', 'App\Http\Controllers\cadastroController@edit');


Route::get('/cadastro/editar_cadastro/{id}', 'App\Http\Controllers\cadastroController@edit');
Route::put('/editar_cadastro/update/{id}', 'App\Http\Controllers\cadastroController@update');

//Admin
Route::get('/admin/registar', 'App\Http\Controllers\cadastroController@create');


//Encarregados
Route::get('/encarregado/registar_encarregado', 'App\Http\Controllers\encarregadoController@create');
Route::post('/salvar_encarregado', 'App\Http\Controllers\encarregadoController@store');

//Route::get('/encarregado/listar_encarregado', 'App\Http\Controllers\encarregadoController@index');
Route::get('/admin/listar_encarregado', 'App\Http\Controllers\encarregadoController@index');
Route::get('/encarregado/visualizar_encarregado/{id}', 'App\Http\Controllers\encarregadoController@show');

Route::get('/encarregado/editar_encarregado/{id}', 'App\Http\Controllers\encarregadoController@edit');
Route::put('/editar_encarregado/update/{id}', 'App\Http\Controllers\encarregadoController@update');

Route::get('/eliminar_encarregado/{id}', 'App\Http\Controllers\encarregadoController@destroy');


//Crianças
Route::get('/crianca/registar_crianca', 'App\Http\Controllers\criancaController@create');
Route::post('/salvar_crianca', 'App\Http\Controllers\criancaController@store');

Route::get('/admin/listar_crianca', 'App\Http\Controllers\criancaController@index');
Route::get('/crianca/visualizar_crianca/{id}', 'App\Http\Controllers\criancaController@show');

Route::get('/crianca/editar_crianca/{id}', 'App\Http\Controllers\criancaController@edit');
Route::put('/editar_crianca/update/{id}', 'App\Http\Controllers\criancaController@update');

Route::get('/eliminar_crianca/{id}', 'App\Http\Controllers\criancaController@destroy');

//Administrador
Route::get('/admin/dashboard', 'App\Http\Controllers\dashboardController@index')->middleware(['auth']);
Route::get('/logout', 'App\Http\Controllers\appController@logout');



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



require __DIR__.'/auth.php';
