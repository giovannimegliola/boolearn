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


        
        $topFooterContent =
        [
            'Browse Courses' => [
                'Learn Digital Marketing', 'Learn Advanced Photography', 'Learn Spanish', 'Learn Time Management', 'Learn 3D Graphics', 'Learn Android Development','Learn Advanced Data Science', 'Learn Machine Learning Fundamentals'
            ],
            'Start a New Career' => [
                'Learn Digital Marketing', 'Learn Advanced Photography', 'Learn Spanish', 'Learn Time Management', 'Learn 3D Graphics', 'Learn Android Development','Learn Advanced Data Science', 'Learn Machine Learning Fundamentals'
            ],
            'Step-by-Step Guides' => [
                'Learn Digital Marketing', 'Learn Advanced Photography', 'Learn Spanish', 'Learn Time Management', 'Learn 3D Graphics', 'Learn Android Development','Learn Advanced Data Science', 'Learn Machine Learning Fundamentals'
            ],
            'Complete Your Bachelor\'s Online' => [
                'Learn Digital Marketing', 'Learn Advanced Photography', 'Learn Spanish', 'Learn Time Management', 'Learn 3D Graphics', 'Learn Android Development','Learn Advanced Data Science', 'Learn Machine Learning Fundamentals'
            ],
            'Earn Your Online Graduate Degree' => [
                'Learn Digital Marketing', 'Learn Advanced Photography', 'Learn Spanish', 'Learn Time Management', 'Learn 3D Graphics', 'Learn Android Development','Learn Advanced Data Science', 'Learn Machine Learning Fundamentals'
            ]
        ];
        $bottomFooterContent =
        [
            'Boolearn' => [
                'Boot Camps', 'About', 'Boolearn for Business', 'Affiliates', 'Open Boolearn', 'Careers','News',
            ],
            'Connect' => [
                'Idea Hub', 'Contact Us', 'Help Center', 'Security', 'Media Kit',
            ],
            'Legal' => [
                'Terms of Service', 'Privacy Policy', 'Cookie Policy', 'Accessibility Policy', 'Trademark Policy',
            ]
        ];
        return view('home', compact('courses', 'topFooterContent', 'bottomFooterContent','topCourses','providers'));

    }
}



