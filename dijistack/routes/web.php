<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\KvkkController;
use App\Http\Controllers\CookiePolicyController;
use App\Http\Controllers\TermsOfUseController;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/projelerimiz', [ProjectController::class, 'view'])->name('project.view');

Route::get('/projelerimiz/{slug}', [ProjectController::class, 'edit'])->name('project.edit');

Route::get('/hizmetlerimiz', [ServiceController::class, 'view'])->name('service.view');
Route::get('/hizmetlerimiz/{slug}', [ServiceController::class, 'edit'])->name('service.edit');

Route::get('/ekibimiz', [TeamController::class, 'view'])->name('teams.view');

Route::get('/is-ortaklarimiz', [PartnersController::class, 'view'])->name('partners.view');


Route::get('/bloglarimiz', [BlogController::class, 'view'])->name('blogs.view');
Route::get('/bloglarimiz/{slug}', [BlogController::class, 'edit'])->name('blogs.edit');

Route::get('/iletisim', [ContactController::class, 'view'])->name('contact.view');
Route::post('/iletisim-form', [ContactController::class, 'store'])->name('contact.store');

Route::get('/hakkimizda', [AboutController::class, 'view'])->name('about.view');

Route::get('/kariyer', [CareerController::class, 'view'])->name('career.view');
Route::post('/kariyer-form', [CareerController::class, 'store'])->name('career.store');

Route::get('/gizlilik-politikasi', [PrivacyPolicyController::class, 'view'])->name('privacy-policy.view');
Route::get('/kullanim-kosullari', [TermsOfUseController::class, 'view'])->name('terms-of-use.view');
Route::get('/kvkk-aydinlatma-metni', [KvkkController::class, 'view'])->name('kvkk.view');
Route::get('/cerez-politikasi', [CookiePolicyController::class, 'view'])->name('cookie-policy.view');
