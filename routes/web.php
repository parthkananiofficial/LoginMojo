<?php

use App\Http\Controllers\ConfigController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentationController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::group(['middleware' => ['auth:sanctum', 'verified']],function(){
    Route::get('/dashboard', [DashboardController::class,"index"])->name('dashboard');
    Route::get('/configuration/edit', [ConfigController::class,"edit"])->name('config.edit');
    Route::post('/configuration', [ConfigController::class,"update"])->name('config.update');
    Route::get('/documentation', [DocumentationController::class,"index"])->name('documentation');
});
