<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;


Route::get('/sliders', function () {
    return view('sliders');
});


Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/newCategory', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/category', [CategoryController::class, 'store'])->name('categories.store');
Route::put('/newCategory/{id}/update', [CategoryController::class, 'update'])->name('categories.update');
Route::get('/editCategory/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::get('/newProduct', [ProductController::class, 'create'])->name('products.create');
Route::post('/product', [ProductController::class, 'store'])->name('products.store');
Route::put('/newProduct/{id}/update', [ProductController::class, 'update'])->name('products.update');
Route::get('/editProduct/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
