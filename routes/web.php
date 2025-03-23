<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return App\Models\Faq::all();
});

Route::get('/home',[HomeController::class, 'index'])->name('home');

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/reviews', [ReviewsController::class, 'index'])->name('reviews');
Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

Route::get('/faq',[FaqController::class, 'index'])->name('faq');
Route::post('/faq', [FaqController::class, 'store'])->name('faq.store');
Route::delete('/faq/{item}', [FaqController::class , 'destroy'])->name('faq.delete');
Route::put('/faq/{item}', [FaqController::class, 'update'])->name('faq.update');
Route::get('/faq/{item}/edit', [FaqController::class, 'edit'])->name('faq.edit');
