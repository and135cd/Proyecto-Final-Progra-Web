<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\TipoUsuarioController;
use App\Models\TipoUsuario;
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

Route::get('/', function () {
    return view('welcome');
});

route::resource('categorias',CategoriaController::class);
route::resource('tipos',TipoUsuarioController::class);
route::resource('clientes',ClienteController::class);
route::resource('marcas',MarcaController::class);
route::resource('departamentos',DepartamentoController::class);
