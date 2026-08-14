<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/weby-it', 'web-it')->name('web-it');
Route::view('/iot', 'iot')->name('iot');
Route::view('/3d', '3d')->name('3d');
Route::view('/pocitace', 'repairs')->name('repairs');
Route::view('/kontakt', 'contact')->name('contact');
