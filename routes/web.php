<?php

use App\Http\Controllers\ProjectController;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::get('/projects', [ProjectController::class, 'index'] )->name('projects.index');
Route::get('/projects/{id}', [ProjectController::class, 'show'] )->name('projects.show');
Route::post('/contact', 'App\\Http\\Controllers\\MessagesController@store')->name('contact');
// Route::resource('portfolio', 'App\\Http\\Controllers\\PortfolioController');