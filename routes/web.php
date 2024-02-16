<?php

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
