<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Website Route
Route::get('/', [WebsiteController::class, 'index']);
Route::get('/about', [WebsiteController::class, 'about']);
Route::get('/pieces', [WebsiteController::class, 'pieces']);
Route::get('/garage', [WebsiteController::class, 'garage']);
Route::get('/contact', [WebsiteController::class, 'contact']);
Route::post('/contact', [WebsiteController::class, 'send_mail'])->name('mail');

Route::get('/pieces_engin', [WebsiteController::class, 'search']  )->name('recherche');
