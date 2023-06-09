<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('v1')->namespace('Api')->group(function () {
    Route::prefix('/clubes')->name('clube.')->group(realpath(__DIR__ . '/api/v1/clube.php'));
    Route::prefix('/recursos')->name('clube.')->group(realpath(__DIR__ . '/api/v1/recurso.php'));
});
