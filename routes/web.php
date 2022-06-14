<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        "nama" => "Princess Iqlima Kafilla",
        "email" => "harimurtisatriotomo@Gmail.com",
        "gambar" => "fotoaku.jpg"
    ]);
});

Route::get('/gallery', function () {
    return view('gallery');
});