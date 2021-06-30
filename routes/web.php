<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('pages/welcome');
});

Route::get('about-me', function(){
    return view('pages/about');
});
