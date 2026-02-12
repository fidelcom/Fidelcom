<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeFaqsController;
use App\Http\Controllers\HomeGalleryController;
use App\Http\Controllers\HomeProjectController;
use App\Http\Controllers\HomeServicesController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LetsTalkController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProcessessController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [LandingController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about.home');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact.home');
Route::resource('/all-services', HomeServicesController::class);
Route::resource('/portfolio', PortfolioController::class);



// User route
Route::get('/our-teams', [LandingController::class, 'team'])->name('our.team');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/show/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blog/categories/{id}', [BlogController::class, 'category'])->name('blog.categories');
Route::post('/comment', [CommentController::class, 'store'])->name('comment.store');
Route::resource('/all-projects', HomeProjectController::class)->only(['index', 'show', 'edit']);
Route::get('/faqs', HomeFaqsController::class)->name('home.faq');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact.us');
Route::post('/contact-us', [ContactController::class, 'store'])->name('contact.us.store');
Route::post('/lets-talk', [LetsTalkController::class, 'store'])->name('lets.talk.store');
Route::resource('galleries', HomeGalleryController::class)->only(['index']);
Route::get('/processes', ProcessessController::class)->name('processes.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';

