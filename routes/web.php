<?php

use App\Http\Controllers\ConfigController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MojoSessionController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\UserWebhookController;
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

// Route::get('/', function () {
//     return view('landing.index');
// })->name('home');

Route::get('/', [DashboardController::class, 'login'])->name('home');

Route::get('/privacy', function () {
    return view('landing.privacypolicy');
})->name('privacy');
Route::get('/terms', function () {
    return view('landing.terms');
})->name('terms');

Route::get('contact-us', [ContactController::class, 'index'])->name('contact');
Route::post('contact-us', [ContactController::class, 'saveContact'])->name('contact.store');

Route::get('login/mojo', [MojoSessionController::class, 'store'])->name('mojo.store');
Route::get('login/mojo/check', [MojoSessionController::class, 'show'])->name('mojo.show');
Route::post(
    '/login/mojo/privatewebhook',
    [MojoSessionController::class, 'webhook']
);

Route::post('wahtsappverification', [VerifyWhatsAppController::class, 'index'])->name('wahtsapp.verify');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/dashboard', [DashboardController::class, "index"])->name('dashboard');
    Route::get('/configuration/edit', [ConfigController::class, "edit"])->name('config.edit');
    Route::post('/configuration', [ConfigController::class, "update"])->name('config.update');

    Route::get('/webhook/logs', [UserWebhookController::class, "logs"])->name('userwebhook.logs');
    Route::get('/webhook', [UserWebhookController::class, "index"])->name('userwebhook.index');
    Route::get('/webhook/edit', [UserWebhookController::class, "edit"])->name('userwebhook.edit');
    Route::post('/webhook', [UserWebhookController::class, "update"])->name('userwebhook.update');
    Route::post('/webhook/store', [UserWebhookController::class, "store"])->name('userwebhook.store');
    Route::delete('/webhook/{id}', [UserWebhookController::class, "destroy"])->name('userwebhook.destroy');

    Route::get('/plans', [PlanController::class, "index"])->name('plan');
    Route::get('/plan/{plan}', [PlanController::class, "show"])->name('plan.show');
});

Route::post(
    '/stripe/webhook',
    [WebhookController::class, 'handleWebhook']
);
Route::post(
    '/watiwhatsapp/webhook',
    [WhatsAppWebHookController::class, 'handleReceiveMessage']
);
