<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/contato', [ContactController::class, 'contact'])->name('contact');