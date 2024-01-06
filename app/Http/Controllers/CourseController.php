<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;
use App\Models\Provider;
use App\Models\Skill;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $categories = Category::take(5)->get();
        $skills = Skill::take(4)->get();
        $providers = Provider::all();
        $topFooterContent =
            [
                'Browse Courses' => [
                    'Learn Digital Marketing',
                    'Learn Advanced Photography',
                    'Learn Spanish',
                    'Learn Time Management',
                    'Learn 3D Graphics',
                    'Learn Android Development',
                    'Learn Advanced Data Science',
                    'Learn Machine Learning Fundamentals'
                ],
                'Start a New Career' => [
                    'Learn Digital Marketing',
                    'Learn Advanced Photography',
                    'Learn Spanish',
                    'Learn Time Management',
                    'Learn 3D Graphics',
                    'Learn Android Development',
                    'Learn Advanced Data Science',
                    'Learn Machine Learning Fundamentals'
                ],
                'Step-by-Step Guides' => [
                    'Learn Digital Marketing',
                    'Learn Advanced Photography',
                    'Learn Spanish',
                    'Learn Time Management',
                    'Learn 3D Graphics',
                    'Learn Android Development',
                    'Learn Advanced Data Science',
                    'Learn Machine Learning Fundamentals'
                ],
                'Complete Your Bachelor\'s Online' => [
                    'Learn Digital Marketing',
                    'Learn Advanced Photography',
                    'Learn Spanish',
                    'Learn Time Management',
                    'Learn 3D Graphics',
                    'Learn Android Development',
                    'Learn Advanced Data Science',
                    'Learn Machine Learning Fundamentals'
                ],
                'Earn Your Online Graduate Degree' => [
                    'Learn Digital Marketing',
                    'Learn Advanced Photography',
                    'Learn Spanish',
                    'Learn Time Management',
                    'Learn 3D Graphics',
                    'Learn Android Development',
                    'Learn Advanced Data Science',
                    'Learn Machine Learning Fundamentals'
                ]
            ];
        $bottomFooterContent =
            [
                'Boolearn' => [

                    'Boot Camps',
                    'About',
                    'Boolearn for Business',
                    'Affiliates',
                    'Open Boolearn',
                    'Careers',
                    'News',
                ],
                'Connect' => [
                    'Idea Hub',
                    'Contact Us',
                    'Help Center',
                    'Security',
                    'Media Kit',
                ],
                'Legal' => [
                    'Terms of Service',
                    'Privacy Policy',
                    'Cookie Policy',
                    'Accessibility Policy',
                    'Trademark Policy',
                ]
            ];
        return view('courses.index', compact('courses', 'topFooterContent', 'bottomFooterContent', 'categories', 'skills', 'providers'));
    }

    public function show($id)
    {
        $course = Course::findOrFail($id);
        $topFooterContent =
            [
                'Browse Courses' => [
                    'Learn Digital Marketing',
                    'Learn Advanced Photography',
                    'Learn Spanish',
                    'Learn Time Management',
                    'Learn 3D Graphics',
                    'Learn Android Development',
                    'Learn Advanced Data Science',
                    'Learn Machine Learning Fundamentals'
                ],
                'Start a New Career' => [
                    'Learn Digital Marketing',
                    'Learn Advanced Photography',
                    'Learn Spanish',
                    'Learn Time Management',
                    'Learn 3D Graphics',
                    'Learn Android Development',
                    'Learn Advanced Data Science',
                    'Learn Machine Learning Fundamentals'
                ],
                'Step-by-Step Guides' => [
                    'Learn Digital Marketing',
                    'Learn Advanced Photography',
                    'Learn Spanish',
                    'Learn Time Management',
                    'Learn 3D Graphics',
                    'Learn Android Development',
                    'Learn Advanced Data Science',
                    'Learn Machine Learning Fundamentals'
                ],
                'Complete Your Bachelor\'s Online' => [
                    'Learn Digital Marketing',
                    'Learn Advanced Photography',
                    'Learn Spanish',
                    'Learn Time Management',
                    'Learn 3D Graphics',
                    'Learn Android Development',
                    'Learn Advanced Data Science',
                    'Learn Machine Learning Fundamentals'
                ],
                'Earn Your Online Graduate Degree' => [
                    'Learn Digital Marketing',
                    'Learn Advanced Photography',
                    'Learn Spanish',
                    'Learn Time Management',
                    'Learn 3D Graphics',
                    'Learn Android Development',
                    'Learn Advanced Data Science',
                    'Learn Machine Learning Fundamentals'
                ]
            ];
        $bottomFooterContent =
            [
                'Boolearn' => [
                    'Boot Camps',
                    'About',
                    'Boolearn for Business',
                    'Affiliates',
                    'Open Boolearn',
                    'Careers',
                    'News',
                ],
                'Connect' => [
                    'Idea Hub',
                    'Contact Us',
                    'Help Center',
                    'Security',
                    'Media Kit',
                ],
                'Legal' => [
                    'Terms of Service',
                    'Privacy Policy',
                    'Cookie Policy',
                    'Accessibility Policy',
                    'Trademark Policy',
                ]
            ];
        return view('courses.show', compact('course', 'topFooterContent', 'bottomFooterContent'));
    }
}
