<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ShopController::class, 'accueil'])->name('home');

Route::get('/contact', [ShopController::class, 'contact'])->name('contact');

Route::get('/cgv', [ShopController::class, 'cgv'])->name('cgv');

Route::get('/categories/{slug}', [ProductController::class, 'showCategory'])
        ->name('categories.show');
            
Route::get('/product/{id}', [ProductController::class, 'showProduct'])
    ->name('product.show');