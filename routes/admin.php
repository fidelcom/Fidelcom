<?php

//Admin Routes
use App\Http\Controllers\Admin\AdminAboutController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\FaqsController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProcessController;
use App\Http\Controllers\Admin\ProjectCategoryController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ProjectMultiImageController;
use App\Http\Controllers\Admin\ServiceMultiImageController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SuccessController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\WhyUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LetsTalkController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:admin'])->prefix('/admin')->group(function () {
    Route::resource('/dashboard', AdminController::class);
    Route::resource('/slider', SliderController::class);
    Route::resource('/services', ServicesController::class);
    Route::resource('/about', AdminAboutController::class);
    Route::resource('/why-us', WhyUsController::class);
    Route::resource('/team', TeamController::class);
    Route::resource('/faqs', FaqsController::class);
    Route::resource('/testimonial', TestimonialController::class);
    Route::resource('/partners', PartnerController::class);
    Route::resource('/success-story', SuccessController::class);
    Route::resource('/project-category', ProjectCategoryController::class);
    Route::resource('/projects', ProjectController::class);
    Route::resource('/blog-category', BlogCategoryController::class);
    Route::resource('/blog/posts', PostController::class);
    Route::resource('/project/multi-image', ProjectMultiImageController::class);
    Route::resource('/Services/multiple-image', ServiceMultiImageController::class);
    Route::resource('/contact', AdminContactController::class);
    Route::get('/contact-us', [ContactController::class, 'show'])->name('contact.us.show');
    Route::get('/contact-us/{id}', [ContactController::class, 'edit'])->name('contact.us.edit');
    Route::delete('/contact-us/{id}', [ContactController::class, 'destroy'])->name('contact.us.destroy');
    Route::get('/lets-talk', [LetsTalkController::class, 'show'])->name('lets.talk.show');
    Route::get('/lets-talk/{id}', [LetsTalkController::class, 'edit'])->name('lets.talk.edit');
    Route::delete('/lets-talk/{id}', [LetsTalkController::class, 'destroy'])->name('lets.talk.destroy');
    Route::resource('/gallery', GalleryController::class);
    Route::resource('/process', ProcessController::class);
});
