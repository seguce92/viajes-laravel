<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViajesController;

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
    return redirect()->route('viajes');
});

Route::group(['prefix' => 'viajes'], function () {
    Route::get('/', [ViajesController::class, 'index'])->name('viajes');
    Route::get('/create', [ViajesController::class, 'create'])->name('viajes.create');
    Route::post('/store', [ViajesController::class, 'store'])->name('viajes.store');
    Route::get('/{viaje}', [ViajesController::class, 'show'])->name('viajes.show');
    Route::get('/{viaje}/edit', [ViajesController::class, 'edit'])->name('viajes.edit');
    Route::put('/{viaje}/update', [ViajesController::class, 'update'])->name('viajes.update');
    Route::delete('/{viaje}/destroy', [ViajesController::class, 'destroy'])->name('viajes.destroy');
});

/*Route::group(['prefix' => 'administrador'], function () {
    Route::group(['prefix' => 'usuarios'], function () {
        Route::get('/', [ViajesController::class, 'index'])->name('viajes');
        Route::get('/create', [ViajesController::class, 'create'])->name('viajes.create');
        Route::post('/store', [ViajesController::class, 'store'])->name('viajes.store');
        Route::get('/{viaje}', [ViajesController::class, 'show'])->name('viajes.show');
        Route::get('/{viaje}/edit', [ViajesController::class, 'edit'])->name('viajes.edit');
        Route::put('/{viaje}/update', [ViajesController::class, 'update'])->name('viajes.update');
        Route::delete('/{viaje}/destroy', [ViajesController::class, 'destroy'])->name('viajes.destroy');
    });
    Route::group(['prefix' => 'buses'], function () {
        Route::get('/', [ViajesController::class, 'index'])->name('viajes');
        Route::get('/create', [ViajesController::class, 'create'])->name('viajes.create');
        Route::post('/store', [ViajesController::class, 'store'])->name('viajes.store');
        Route::get('/{viaje}', [ViajesController::class, 'show'])->name('viajes.show');
        Route::get('/{viaje}/edit', [ViajesController::class, 'edit'])->name('viajes.edit');
        Route::put('/{viaje}/update', [ViajesController::class, 'update'])->name('viajes.update');
        Route::delete('/{viaje}/destroy', [ViajesController::class, 'destroy'])->name('viajes.destroy');
    }); 
});*/