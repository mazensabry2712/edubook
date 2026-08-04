<?php

use Illuminate\Support\Facades\Route;







Route::get('/dashboard', function () {
    return view('dashboard.layouts.master');
})->name('dashboard');
