<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\SidebarController;
use App\Http\Controllers\ProductsController;



    Route::get('home', [ProductsController::class, 'index'])->name('home');

    Route::get('/', [ProductsController::class, 'index']);
    Route::get('cart', [ProductsController::class, 'cart'])->name('cart');
    Route::get('add-to-cart/{sub_id}', [ProductsController::class, 'addToCart'])->name('add.to.cart');
    Route::patch('update-cart', [ProductsController::class, 'update'])->name('update.cart');
    Route::delete('remove-from-cart', [ProductsController::class, 'remove'])->name('remove.from.cart');

    Route::post('checkout', [ProductsController::class, 'checkout'])->name('checkout');

    Route::prefix('products/')->group(function () {

        Route::get('{name}/{id}' , [ProductsController::class, 'products'])->name('products');
        Route::get('detail/{name}/{id}' , [ProductsController::class, 'productDetail'])->name('products.detail');

    });

    Route::get('contact-us', [ProductsController::class, 'Contact'])->name('contact-us');
    Route::post('contact-us-submit', [ProductsController::class, 'contactFormSubmit'])->name('contact-us-submit');


    Route::get('form', [ProductsController::class, 'form'])->name('form');
    Route::post('form-submit', [ProductsController::class, 'formSubmit'])->name('form-submit');


    Route::get('thank-you', [ProductsController::class, 'thnakYou'])->name('thank-you');







// Auth::routes();


