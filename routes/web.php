<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/books', function () {
    return view('books');
})->name('books');

Route::get('/books/{slug}', [BookController::class, 'show'])->name('books.show');

Route::get('/apps', function () {
    return view('apps');
})->name('apps');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/articles', function () {
    return view('articles');
})->name('articles');
