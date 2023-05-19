<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubeController;

// Route::post('/', [ClubeController::class, 'store'])->name('store');
// Route::match(['put', 'patch'], '/{id}', [ClubeController::class, 'update'])->name('update');
Route::delete('/{id}', [ClubeController::class, 'destroy'])->name('destroy');
Route::get('/', [ClubeController::class, 'index'])->name('index');
Route::get('/{id}', [ClubeController::class, 'show'])->name('show');
