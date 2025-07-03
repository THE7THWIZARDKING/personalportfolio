<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

// Page Routes
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/projects', [FrontendController::class, 'projects'])->name('project');
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
// Route::get('/blog/{slug}', [FrontendController::class, 'blogShow'])->name('blog.show');

// Contact & Skills
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('/contact', [FrontendController::class, 'sendMessage'])->name('contact.send');

// Extra (if these are needed for forms)
Route::get('/skills', [FrontendController::class, 'skills'])->name('skill');
// Route::post('/blog-post', [FrontendController::class, 'blog'])->name('blog.submit'); // renamed route
