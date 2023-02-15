<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, ('home')])
    ->name('home');

// ROTTA PER IL FORM:
Route:: get('/product/create', [MainController::class, 'create'])
    ->name('product.create');