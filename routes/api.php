<?php

use App\Http\Controllers\AuthController;
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

Route::post('/register', [AuthController::class,'register']);
Route::post('/login', [AuthController::class,'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profiles',function(Request $request){
        return auth()->user();
    });
    
    Route::resource('/uloga',App\Http\Controllers\UlogaController::class)->only(['update','store','delete']);
});

Route::get('/glumac', [App\Http\Controllers\GlumacController::class,'index']);
Route::get('/glumac/{id}', [App\Http\Controllers\GlumacController::class,'show']);

Route::get('/film', [App\Http\Controllers\FilmController::class,'index']);
Route::get('/film/{id}', [App\Http\Controllers\FilmController::class,'show']);

Route::get('/uloga', [App\Http\Controllers\UlogaController::class,'index']);
Route::get('/uloga/{id}', [App\Http\Controllers\UlogaController::class,'show']);
