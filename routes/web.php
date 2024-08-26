<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('products');
});


Route::get('/newProduct', function () {
    return view('new_product');
});

Route::get('/editProduct', function () {
    return view('edit_product');
});

Route::get('/categories', function () {
    return view('categories');
});
