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
        $courses = Courses::with('category')->get();
        return view('dashboard.courses.index', compact('courses'));
    }

    public function show($id)
    {
        $course = Courses::with('category')->findOrFail($id);

        return view('dashboard.courses.show', compact('course'));
    }


    public function create()

    {
        $categories = Categories::all();
        return view('dashboard.courses.create', compact('categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'instructor' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);


        Courses::create($request->all());

        if ($request->hasFile('image')) {

            $image = $request->file('image')->store('courses', 'public');
            Courses::latest()->first()->images()->create([
                'path' => $image,
                'name' => $request->file('image')->getClientOriginalName(),
                'type' => $request->file('image')->getClientMimeType(),
            ]);
        }

        return redirect()->route('courses.index')->with('success', 'Course created successfully.');
    }

    public function edit($id)
    {
        $course = Courses::findOrFail($id);
        $categories = Categories::all();
        return view('dashboard.courses.edit', compact('course', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'instructor' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);

        $course = Courses::findOrFail($id);
        $course->update($request->all());

        return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
    }
    public function destroy($id)
    {
        $course = Courses::findOrFail($id);
        $course->delete();

        return redirect()->route('courses.index')->with('success', 'Course deleted successfully.');
    }
}
