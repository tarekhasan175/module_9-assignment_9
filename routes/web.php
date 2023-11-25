<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectsController;


Route::get('/', function () {
    return view('pages.home');
});

Route::group(['prefix' => 'portfolio'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
});

