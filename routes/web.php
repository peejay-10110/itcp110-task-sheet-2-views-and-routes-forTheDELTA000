<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('home'); });
Route::get('/about', function () { return view('about'); });
Route::get('/projects', function () { return view('projects'); });
Route::get('/skills', function () { return view('skills'); });
Route::get('/experience', function () { return view('experience'); });
Route::get('/education', function () { return view('education'); });
Route::get('/services', function () { return view('services'); });
Route::get('/testimonials', function () { return view('testimonials'); });
Route::get('/blog', function () { return view('blog'); });
Route::get('/contact', function () { return view('contact'); });