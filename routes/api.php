<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PedidosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::group([

    'middleware' => 'api',
    'prefix' => 'test-choho'

], function ($router) {

    Route::post('login', [AuthController::class,'login']);


    Route::post('logout', [AuthController::class,'logout']);
    Route::post('refresh', [AuthController::class,'refresh']);
    Route::post('me', [AuthController::class,'me']);

    route::group(['prefix' => 'pedidos'],function(){
        Route::post('/show/all' , [PedidosController::class , 'index']);
        Route::get('/show/id/{id}', [PedidosController::class, 'show']);
        Route::post('/show/dates',[PedidosController::class , 'showPerDates']);
    });
    

});
