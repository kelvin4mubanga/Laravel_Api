<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/products', function () {
    return view('products');
});

Route::get('/product/{id}', function () {
    return view('product');
});

