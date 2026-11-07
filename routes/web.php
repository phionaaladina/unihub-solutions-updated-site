<?php

use Illuminate\Support\Facades\Route;

// One-page site: everything lives on the home page.
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// Old page URLs now jump to their section on the one-pager, so existing links keep working.
Route::redirect('/about', '/#about', 301);
Route::redirect('/services', '/#services', 301);
Route::redirect('/solutions', '/#solutions', 301);
Route::redirect('/products', '/#products', 301);
Route::redirect('/projects', '/#services', 301);
Route::redirect('/contact', '/#contact', 301)->name('contact');
