<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Provider;


class HomeController extends Controller
{
    public function index() {
        $courses = Course::all()
        ->where('id','>', 9)
        ->where('id', '<', 14);

        $topCourses = Course::where('id', '=', 6)
        ->orWhere('id', '=', 8)
        ->orWhere('id', '=', 20)
        ->orWhere('id', '=', 18)->get();

        $providers = Provider::all();


        return view('home', compact('courses','topCourses','providers'));

    }
}



