<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/freedanprojek', function () {
    return view('freedanprojek');
}); 