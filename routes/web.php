<?php

use App\Http\Controllers\AuthController;
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
Route::get('/thanks', function () {
    return view('thanks');
})->name('thanks');

Route::get('/home',[HomeController::class, 'index'])->name('home');
Route::post('/home', [HomeController::class, 'store'])->name('question.store');

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

Route::get('/faq',[FaqController::class, 'index'])->name('faq');
Route::post('/faq', [FaqController::class, 'store'])->name('faq.store')->middleware(['auth:sanctum', 'role:admin']);
Route::delete('/faq/{item}', [FaqController::class , 'destroy'])->name('faq.delete')->middleware(['auth:sanctum', 'role:admin']);
Route::put('/faq/{item}', [FaqController::class, 'update'])->name('faq.update')->middleware(['auth:sanctum', 'role:admin']);
Route::get('/faq/{item}/edit', [FaqController::class, 'edit'])->name('faq.edit')->middleware(['auth:sanctum', 'role:admin']);

Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation')->middleware('auth:sanctum');
Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store')->middleware('auth:sanctum');

Route::get('/reviews', [ReviewsController::class, 'index'])->name('reviews');
Route::post('/reviews', [ReviewsController::class, 'store'])->name('reviews.store')->middleware('auth:sanctum');

Route::get('/auth', [AuthController::class, 'showLoginForm'])->name('auth');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

