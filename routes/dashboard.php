<?php

use App\Http\Controllers\Dashboard\CoursesController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\CategoriesController;
use App\Http\Controllers\Dashboard\BookingsController;
use App\Http\Controllers\Dashboard\StudentsController;
use Illuminate\Support\Facades\Route;









Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::resource('/courses', CoursesController::class);

Route::resource('/categories', CategoriesController::class);

Route::resource('/bookings', BookingsController::class);

Route::resource('/students', StudentsController::class);
