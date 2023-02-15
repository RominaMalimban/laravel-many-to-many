<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'home'])
    ->name('home');

// ROTTA PER LISTA PRODOTTI:
Route::get('/product', [MainController::class, 'products'])
    ->name('product.home');

// ROTTA PER IL FORM:
Route:: get('/product/create', [MainController::class, 'create'])
    ->name('product.create');

// ROTTA PER RICEZIONE DATI FORM:
Route:: post('/product/create', [MainController:: class, 'productStore'])
    ->name('product.store');