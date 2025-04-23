<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/world', function () {
    return view('world');
});

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/', function () {
    return 'NIM: 23552021012 <br> Nama: Doni Kusuma Atmaja';
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . ' Komentar ke-' . $commentId;
});

Route::get('/user/{name?}', function ($name= 'Doni') {
    return 'Nama saya  ' . $name;
});

use App\Http\Controllers\WelcomeController;

// Route untuk halaman utama
Route::get('/index', [WelcomeController::class, 'index']);

// Route untuk halaman utama
Route::get('/about', [WelcomeController::class, 'about']);

// Route untuk halaman utama
Route::get('/articles/{id}', [WelcomeController::class, 'articles']);

use App\Http\Controllers\PhotoController;

// Route untuk halaman utama
Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);