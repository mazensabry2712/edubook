<?php

namespace App\Http\Controllers\Dashboaed;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.layouts.master');
    }

 
}
