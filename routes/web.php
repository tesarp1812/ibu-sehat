<?php

use Illuminate\Support\Facades\Route;



//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);

Route::get('/', function () {
    return view('home');
});

Route::get('home', function () {
    return view('home');
});

Route::resource('/subjektif', \App\Http\Controllers\SubjektifController::class);
