<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/opravy', 'repairs')->name('repairs');
Route::view('/weby-it', 'web-it')->name('web-it');
Route::view('/iot', 'iot')->name('iot');
Route::view('/kontakt', 'contact')->name('contact');
