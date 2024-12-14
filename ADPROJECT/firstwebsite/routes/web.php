<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\HomeController;

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');

// Home Route - Displays the list of venues (secured by auth middleware)
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

// Show the user's bookings (secured by auth middleware)
Route::get('/my-bookings', [VenueController::class, 'showBookings'])->name('my.bookings')->middleware('auth');

// Book a venue (secured by auth middleware)
Route::post('/book-venue/{venueId}', [VenueController::class, 'bookVenue'])->name('book.venue')->middleware('auth');

