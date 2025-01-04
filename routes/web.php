<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Catolog', function () {
    return view('Blog',);
});

Route::get('/Check ', function () {
    return view('About',);
});

Route::get('/contact', function () {
    return view('contact',);
});

Route::get('/singin', function () {
    return view('!',);
});

Route::get('/login', function () {
    return view('login',);
});

Route::get('/register', function () {
    return view('register',);
});

Route::get('/admin', function () {
    return view('admin',);
});

Route::get('/sale', function () {
    return view('sale',);
});


Route::get('/forgotpass', function () {
    return view('forgotpass',);
});

Route::get('/cekout', function () {
    return view('cekout',);
});

Route::get('/Profile', function () {
    return view('Profile',);
});
