<?php

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::get('/portfolio', 'App\\Http\\Controllers\\PortfolioController@index' )->name('portfolio');
// Route::resource('portfolio', 'App\\Http\\Controllers\\PortfolioController');