<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CategoriaMarcaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\GerenteController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\TipoUsuarioController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VentaController;
use App\Models\TipoUsuario;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

//andrew
use App\Http\Controllers\CartController;

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

Route::resource('usuario',UserController::class);
Route::resource('gerente',GerenteController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//andrew
Route::get('/shop', [CartController::class, 'shop'])->name('shop');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');