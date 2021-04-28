<?php

use App\Http\Controllers\ConfigController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\WebhookController;
use App\Http\Controllers\WhatsAppWebHookController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('landing.index');
})->name('home');

Route::get('/privacy', function () {
    return view('landing.privacypolicy');
})->name('privacy');
Route::get('/terms', function () {
    return view('landing.terms');
})->name('terms');

Route::get('contact-us', [ContactController::class, 'index'])->name('contact');
Route::post('contact-us', [ContactController::class, 'saveContact'])->name('contact.store');

Route::get('login/whatsapp', [LoginController::class, 'whatStore'])->name('whatsender.store');
Route::get('login/whatsapp/check', [LoginController::class, 'whatshow'])->name('whatsender.show');

Route::post('wahtsappverification', [VerifyWhatsAppController::class, 'index'])->name('wahtsapp.verify');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/dashboard', [DashboardController::class, "index"])->name('dashboard');
    Route::get('/configuration/edit', [ConfigController::class, "edit"])->name('config.edit');
    Route::post('/configuration', [ConfigController::class, "update"])->name('config.update');
    Route::get('/plans', [PlanController::class, "index"])->name('plan');
    Route::get('/plan/{plan}', [PlanController::class, "show"])->name('plan.show');
    Route::get('/documentation', [DocumentationController::class, "index"])->name('documentation');
});

Route::post(
    '/stripe/webhook',
    [WebhookController::class, 'handleWebhook']
);
Route::post(
    '/watiwhatsapp/webhook',
    [WhatsAppWebHookController::class, 'handleReceiveMessage']
);
