<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::view('/fleet', 'pages.fleet')->name('fleet');
Route::view('/clients', 'pages.clients')->name('clients');
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact/submit', [ContactController::class, 'store'])->name('contact.submit');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.legacy.submit');
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');
