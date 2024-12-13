<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

// Route for Login page (Home)
Route::get('/login', function () {
    return view('home'); // Home is the Login page
});

// Route for Signup page
Route::get('/signup', function () {
    return view('signup');
})->name('signup');




