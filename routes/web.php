<?php

use App\Http\Controllers\CashierController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function (){
    Route::controller(ProductController::class)->prefix('product')->name('product.')->group(function (){
        Route::get('', 'show')->name('show');
        Route::get('create', 'create')->name('create');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::get('delete/{id}', 'delete')->name('delete');
        Route::get('list', 'list')->name('list');

        Route::post('', 'store')->name('store');
        Route::patch('', 'update')->name('update');
    });

    Route::controller(CustomerController::class)->prefix('customer')->name('customer.')->group(function (){
        Route::get('', 'show')->name('show');
        Route::get('create', 'create')->name('create');

        Route::get('edit/{id}', 'edit')->name('edit');
        Route::get('delete/{id}', 'delete')->name('delete');

        Route::post('', 'store')->name('store');
        Route::patch('', 'update')->name('update');
    });

    Route::controller(CashierController::class)->name('cashier.')->group(function (){
        Route::get('', 'index')->name('index');
    });
});

Route::controller(UserController::class)->prefix('user')->name('user.')->group(function (){
    Route::get('login', 'show_login')->name('login.show');
    Route::post('login', 'store_login')->name('login.store');
    Route::get('register', 'show_register')->name('register.show');
    Route::post('register', 'store_register')->name('register.store');
    Route::get('login', 'logout')->name('login');
    Route::get('logout', 'logout')->name('logout');
});
