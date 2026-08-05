<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function index()
    {
        // Logic to retrieve and display images
        Image::create([
            'path' => 'path/to/image.jpg',
            'alt_text' => 'An example image',
            'course_id' => 1, // Assuming the course ID is 1 for this example
        ]);}
}
