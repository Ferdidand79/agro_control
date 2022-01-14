<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\MuestraController;

use App\Http\Controllers\ElementoController;

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

Route::get('/', HomeController::class)->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('muestras', [MuestraController::class, 'index'])->name('muestras.index');

/*Route::get('elementos/{muestra}', function ($muestra) {
    return "Aqui se va mostrar la informacion de loa elementos";
})->name('elementos.show');*/

Route::get('elementos', [ElementoController::class, 'index'])->name('elementos.index');

Route::get('muestras/mostrar/{id}', [MuestraController::class, 'mostrar']);


Route::post('muestras/save', [MuestraController::class, 'store'])->name('muestras.save');
