<?php

use App\Http\Controllers\Dashboard\CoursesController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\CategoriesController;
use Illuminate\Support\Facades\Route;









Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::resource('/courses', CoursesController::class);

Route::resource('/categories', CategoriesController::class);
