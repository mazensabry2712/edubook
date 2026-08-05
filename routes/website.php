<?php

use Illuminate\Support\Facades\Route;







Route::get('/', function () {
    return view('website.layouts.master');
})->name('website');

Route::get('/website/courses', function () {
    return view('website.courses.master');
})->name('website.courses');


Route::get('/website/contact', function () {
    return view('website.contact.master');
})->name('website.contact');

Route::get('/website/about', function () {
    return view('website.about.master');
})->name('website.about');


Route::get('/website/blog', function () {
    return view('website.blog.master');
})->name('website.blog');
