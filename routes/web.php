<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/adaorangbaik', function () {
    return view('adaorangbaik');
});
