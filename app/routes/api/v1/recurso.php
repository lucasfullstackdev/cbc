<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecursoController;

Route::post('/', [RecursoController::class, 'store'])->name('store');
Route::match(['put', 'patch'], '/{id}', [RecursoController::class, 'update'])->name('update');
Route::delete('/{id}', [RecursoController::class, 'destroy'])->name('destroy');
Route::get('/', [RecursoController::class, 'index'])->name('index');
Route::get('/{id}', [RecursoController::class, 'show'])->name('show');

Route::post('/consume', [RecursoController::class, 'consume'])->name('consume');
