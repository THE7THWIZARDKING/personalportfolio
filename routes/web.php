<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontendController;

Route::get('/', [FrontendController::class, 'index']);
Route::get('/about', [FrontendController::class, 'about']);
Route::get('/projects', [FrontendController::class, 'projects']);
Route::get('/blog', [FrontendController::class, 'blog']);
Route::get('/blog/{slug}', [FrontendController::class, 'blogShow']);
Route::get('/contact', [FrontendController::class, 'contact']);
Route::post('/contact', [FrontendController::class, 'sendMessage']);
