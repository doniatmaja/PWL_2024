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
