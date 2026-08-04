<?php

use Illuminate\Support\Facades\Route;







Route::get('/website', function () {
    return view('website.layouts.master');
})->name('website');
