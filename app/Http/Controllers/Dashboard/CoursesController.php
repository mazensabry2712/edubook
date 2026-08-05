<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {
        $courses=Courses::with('category')->get();
        return view('dashboard.courses.index', compact('courses'));
    }


       public function show()
    {
        return view('dashboard.layouts.master');
    }

    public function create()

    {
        $categories = Categories::all();
        return view('dashboard.courses.create', compact('categories'));
    }
}
