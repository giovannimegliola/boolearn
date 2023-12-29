<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
    public function index() {
        $courses = Course::where('id','<', 5);
        return view('home', compact('courses'));
    }
}
