<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AboutController;

Route::get('/', [LandingController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about.home');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact.home');
Route::get('/services', [ServiceController::class, 'index'])->name('service.home');
Route::get('/portfplio', [PortfolioController::class, 'index'])->name('portfolio.home');