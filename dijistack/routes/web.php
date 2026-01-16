<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/projelerimiz', [ProjectController::class, 'view'])->name('project.view');
Route::get('/projelerimiz/{slug}', [ProjectController::class, 'edit'])->name('project.edit');
