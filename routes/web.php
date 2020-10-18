<?php

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::get('/portfolio', 'App\\Http\\Controllers\\PortfolioController@index' )->name('portfolio');
Route::post('/contact', 'App\\Http\\Controllers\\MessagesController@store')->name('contact');
// Route::resource('portfolio', 'App\\Http\\Controllers\\PortfolioController');