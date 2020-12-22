<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MessagesController;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
// Route::resource('projects', ProjectController::class);
Route::resource('portafolio', ProjectController::class)->names('projects')->parameters(['portafolio' => 'project']);

// Route::get('/projects', [ProjectController::class, 'index'] )->name('projects.index');
// Route::post('/projects/store', [ProjectController::class, 'store'] )->name('projects.store');
// Route::get('/projects/create', [ProjectController::class, 'create'] )->name('projects.create');
// Route::get('/projects/{project}/editar', [ProjectController::class, 'edit'] )->name('projects.edit');
// Route::patch('/projects/{project}', [ProjectController::class, 'update'] )->name('projects.update');
// Route::get('/projects/{project}', [ProjectController::class, 'show'] )->name('projects.show');
// Route::delete('/projects/{project}', [ProjectController::class, 'destroy'] )->name('projects.destroy');

Route::post('/contact', [MessagesController::class, 'store'])->name('contact');
// Route::resource('portfolio', 'App\\Http\\Controllers\\PortfolioController');