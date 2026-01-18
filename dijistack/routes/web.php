<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\BlogController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/projelerimiz', [ProjectController::class, 'view'])->name('project.view');

Route::get('/projelerimiz/{slug}', [ProjectController::class, 'edit'])->name('project.edit');

Route::get('/hizmetlerimiz', [ServiceController::class, 'view'])->name('service.view');
Route::get('/hizmetlerimiz/{slug}', [ServiceController::class, 'edit'])->name('service.edit');

Route::get('/ekibimiz', [TeamController::class, 'view'])->name('teams.view');

Route::get('/is-ortaklarimiz', [PartnersController::class, 'view'])->name('partners.view');


Route::get('/bloglarimiz', [BlogController::class, 'view'])->name('blogs.view');
Route::get('/bloglarimiz/{slug}', [BlogController::class, 'edit'])->name('blogs.edit');
