<?php

use App\Http\Controllers\ApiAgenda;
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

Route::get('/agenda', [ApiAgenda::class, 'index']);
Route::post('/agenda/create', [ApiAgenda::class, 'create']);
Route::get('/agenda/read/{id}', [ApiAgenda::class, 'read']);
Route::put('/agenda/update/{id}', [ApiAgenda::class, 'update']);
Route::delete('/proyek/delete/{id}', [ApiAgenda::class, 'delete']);
