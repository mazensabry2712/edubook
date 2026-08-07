<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    // return view('welcome');
})->middleware('PoliceMan');










include __DIR__ . '/dashboard.php';
include __DIR__ . '/website.php';

Route::fallback(function () {
    // return response()->view('404-error', [], 4040);
    return view('404-error');
});
