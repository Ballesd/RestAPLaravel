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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('company',App\Http\Controllers\CompanyController::class);
Route::apiResource('/proveedors',App\Http\Controllers\ProveedorController::class);
Route::apiResource('/servicios',App\Http\Controllers\ServicioController::class);
Route::get('estudiante', 'App\Http\Controllers\RelacionACController@API'::class);