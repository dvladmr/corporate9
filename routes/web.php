<?php

use App\Http\Controllers\FrontController;
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

Route::prefix('{lang?}')->middleware('locale')->group(function () {
    // Main pages
    Route::get('/', [FrontController::class, 'index'])->name('home');
    Route::get('about', [FrontController::class, 'about'])->name('about');
    Route::get('news', [FrontController::class, 'news'])->name('news');
    Route::get('team', [FrontController::class, 'team'])->name('team');
    Route::get('services', [FrontController::class, 'services'])->name('services');
    Route::get('faq', [FrontController::class, 'faq'])->name('faq');
    Route::get('testimonial', [FrontController::class, 'testimonial'])->name('testimonial');
    Route::get('project', [FrontController::class, 'project'])->name('project');
    Route::get('contact', [FrontController::class, 'contact'])->name('contact');
});

Route::get('language/{locale}', [FrontController::class, 'updateLocale']);
