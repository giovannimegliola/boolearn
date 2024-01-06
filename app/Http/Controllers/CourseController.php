<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;
use App\Models\Provider;
use App\Models\Skill;
use App\Models\Teacher;

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


        $skillsDescriptions = [
            1 => "Proficiency in various programming languages such as Java, Python, C++, and JavaScript.",
            2 => "Experience in creating responsive and dynamic websites using HTML, CSS, and JavaScript frameworks.",
            3 => "Knowledge of designing, implementing, and managing databases using SQL and NoSQL technologies.",
            4 => "Ability to analyze and interpret complex data sets to provide valuable insights and support decision-making.",
            5 => "Creating mobile applications for iOS and Android platforms using languages like Swift, Kotlin, or React Native.",
            6 => "Understanding and configuring computer networks, including protocols, routers, and switches.",
            7 => "Implementing security measures to protect systems and networks from cyber threats and attacks.",
            8 => "Experience with cloud platforms like AWS, Azure, or Google Cloud for scalable and flexible solutions.",
            9 => "Ensuring the quality of software through systematic testing and debugging processes.",
            10 => "Using version control systems to track and manage changes in codebase collaboratively.",
            11 => "Knowledge of fundamental algorithms and data structures for efficient problem-solving.",
            12 => "Applying machine learning techniques to develop predictive models and data-driven solutions.",
            13 => "Understanding and implementing AI algorithms and systems for automation and intelligent decision-making.",
            14 => "Integrating development and operations processes to achieve faster and more reliable software delivery.",
            15 => "Creating user-friendly interfaces and experiences through effective design principles and usability testing.",
            16 => "Proficiency in working with Linux/Unix-based operating systems for server administration and development.",
            17 => "Using scripting languages for automation, task scheduling, and system administration.",
            18 => "Experience with agile development methodologies for iterative and collaborative project management.",
            19 => "Utilizing virtualization technologies like VMware or VirtualBox for efficient resource management.",
            20 => "Ability to analyze and solve complex problems through logical thinking and creative solutions.",
        ];

        $providers = Provider::all();
        $skills = Skill::all();
        $teachers = Teacher::all();
        $arrayTeachers = $this->teachersArr($teachers);
        $arraySkills = $this->skillsArr($skillsDescriptions);
        return view('courses.show', compact('course', 'providers', 'skills', 'topFooterContent', 'bottomFooterContent', 'teachers', 'arrayTeachers', 'arraySkills'));
    }

    public function teachersArr($teachers)
    {
        $teachersarr = [];
        while (count($teachersarr) < 3) {
            $randomTeacher = $teachers[rand(1, count($teachers) - 1)];
            if (!in_array($randomTeacher, $teachersarr)) {
                $teachersarr[] = $randomTeacher;
            }
        }
        return $teachersarr;
    }

    public function skillsArr($skills)
    {
        $skillsarr = [];
        while (count($skillsarr) < 10) {
            $randomSkill = $skills[rand(1, count($skills) - 1)];
            if (!in_array($randomSkill, $skillsarr)) {
                $skillsarr[] = $randomSkill;
            }
        }
        return $skillsarr;
    }
}
