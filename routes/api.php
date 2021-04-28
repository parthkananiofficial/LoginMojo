<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\SessionTokenController;
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

Route::group(['middleware' => ['auth:sanctum']],function(){
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::prefix("v1")->group(function(){
        // Route::apiResource("token",SessionTokenController::class)->only(["store","show"]);
        Route::post('/token/create', [SessionTokenController::class,"store"]);
        Route::get('/token/{token}', [SessionTokenController::class,"show"]);
        //Route::post('/token', [SessionTokenController::class,"update"]);
    });

});
