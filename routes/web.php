<?php

use Illuminate\Support\Facades\Route;


Route::resource('book', 'App\Http\Controllers\BookController');

Route::resource('sports', 'App\Http\Controllers\SportsController');
