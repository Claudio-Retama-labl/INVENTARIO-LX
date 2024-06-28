<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticulosController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\DependenciasController;
use App\Http\Controllers\FinanciamientoController;
use Illuminate\Support\Facades\Auth;


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
    return view('auth.login');
});

Auth::routes();
//
Route::get('categorias', [CategoriasController::class, 'index']);
Route::post('categorias-store', [CategoriasController::class, 'store'])->name('categorias-store');
//
Route::get('financiamientos', [FinanciamientoController::class, 'index']);
Route::post('financiamientos-store', [FinanciamientoController::class, 'store'])->name('financiamientos-store');
///
Route::get('dependencias', [DependenciasController::class, 'index']);
Route::post('dependencias-store', [DependenciasController::class, 'store'])->name('dependencias-store');;

Route::get('articulos', [ArticulosController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
