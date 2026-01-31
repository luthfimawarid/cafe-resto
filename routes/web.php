<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing-page');
});
Route::get('/menu', function () {
    return view('menu');
});

