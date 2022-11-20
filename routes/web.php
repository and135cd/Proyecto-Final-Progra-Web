<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CategoriaMarcaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\TipoUsuarioController;
use App\Http\Controllers\VentaController;
use App\Models\TipoUsuario;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Dotenv\Exception\ValidationException;
use Illuminate\Auth\Events\Login;
use Illuminate\Validation\ValidationException as ValidationValidationException;

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

Route::view('dashboard','dashboard')->middleware('auth');
route::resource('categorias',CategoriaController::class)->middleware('auth');
route::resource('tipos',TipoUsuarioController::class)->middleware('auth');
route::resource('clientes',ClienteController::class)->middleware('auth');
route::resource('marcas',MarcaController::class)->middleware('auth');
route::resource('departamentos',DepartamentoController::class)->middleware('auth');
route::resource('sucursals',SucursalController::class)->middleware('auth');
route::resource('empleados',EmpleadoController::class)->middleware('auth');
route::resource('productos',ProductoController::class)->middleware('auth');
route::resource('categoriamarcas',CategoriaMarcaController::class)->middleware('auth');
route::resource('ventas',VentaController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
