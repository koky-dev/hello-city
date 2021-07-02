<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('pages/welcome');
})->name('home');

Route::get('about-me', function(){
    return view('pages/about');
})->name('about');
