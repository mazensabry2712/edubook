<?php

use App\Http\Controllers\Dashboaed\CoursesController;
use App\Http\Controllers\Dashboaed\DashboardController;
use Illuminate\Support\Facades\Route;








Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::resource('/courses', CoursesController::class);

