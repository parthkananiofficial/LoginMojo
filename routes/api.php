<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionTokenController;
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
    Route::get('/session', [SessionTokenController::class,"index"]);
    Route::post('/session/create', [SessionTokenController::class,"store"]);
    Route::get('/session/{session}', [SessionTokenController::class,"show"]);
    Route::post('/session', [SessionTokenController::class,"update"]);
});


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
