<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::controller(ProductController::class)->prefix('product')->name('product.')->group(function (){
    Route::get('', 'show')->name('show');
    Route::get('create', 'create')->name('create');
    Route::get('edit/{id}', 'edit')->name('edit');
    Route::get('delete/{id}', 'delete')->name('delete');

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
