@php
$randskill = $skills[rand(1, count($skills) - 1)];
$randprov = $providers[rand(1, count($providers)-1)];
$syllabus = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil doloremque voluptates molestias maxime enim recusandae expedita ea. Nostrum sed pariatur dolorum amet eaque labore, illum, tenetur qui sunt voluptatem distinctio porro vitae, laborum accusantium error commodi voluptatum eum dolorem. Tempora libero molestias porro impedit similique saepe explicabo inventore quidem itaque eveniet incidunt qui dolorem exercitationem ad asperiores ut culpa, consectetur sed. Molestiae odit aliquam cumque perspiciatis tenetur, nesciunt labore numquam quasi nulla dolorum expedita quam impedit fugit exercitationem nostrum ullam praesentium, consequatur nemo facere. Rem omnis vitae exercitationem inventore optio, est eius! Provident accusantium iure deleniti eius molestias neque odit.";
@endphp

@extends('layouts.app')

@section('title', $course->name . ' Details')

@section('content')
<main>
    <div id='course-show'>
        <div class="container">
            <h2 class="display-5">About this course</h2>
        <p>{{$course->description}}</p>
        <h4 class="fw-bold py-3">At a glance</h4>
        <div id="specifics" class="d-flex">
            <ul class="me-5">
                <li>
                    <h6>Institution:</h6>
                    <div>{{$randprov->name}}</div>
                </li>
                <li>
                    <h6>Subject:</h6>
                    <div>{{$course->name}}</div>
                </li>
                <li>
                    <h6>Level:</h6>
                    <div>{{$course->level}}</div>
                </li>
                <li>
                    <h6>Prerequisities:</h6>
                    <div>None</div>
                </li>
            </ul>
            <ul>
                <li>
                    <h6>Language:</h6>
                    <div>{{$course->language}}</div>
                </li>
                <li>
                    <h6>Level:</h6>
                    <div>{{$course->language}}</div>
                </li>
                <li>
                    <h6>Associated Skills:</h6>
                    <div>{{$randskill->name}}</div>
                </li>
                <li>
                    <h6>Availability:</h6>
                    @if ($course->availability)
                    <div class="badge text-bg-success">Available</div>
                    @else
                    <div class="badge text-bg-danger">Not Available</div>
                    @endif
                    
                </li>
            </ul>
        </div>
        <h2 class="display-5">What you'll learn</h2>
        <ul>
            @foreach ($arraySkills as $skill)
            <li>
                <p>
                    {{$skill}}
                </p>
            </li>
            @endforeach
            
        </ul>
        <h2 class="display-5">Syllabus</h2>
        <p>{{$syllabus}}</p>
        </div>
        <h2 class="text-center">About the instructors</h2>
        <div class="row d-flex justify-content-center">
            @foreach ($arrayTeachers as $teacher)
            <div class="col-4 text-center">
                <i class="fa-solid fa-user mb-3"></i>
                <h4>{{$teacher->name}}  {{$teacher->surname}}</h4>
                <h6 class="my-2">Email: <a href="#">{{$teacher->email}}</a></h6>
                <div class="image-container">
                    <img src="{{$teacher->image}}" alt="teacher">
                </div>
            </div>
            @endforeach
            
        </div>
        <div class="text-center share">
            <h3 class="fw-bold mb-3">Share this course</h3>
            <ul class="d-flex justify-content-center ">
                <li><a href="#"><i class="fa-brands fa-facebook"></a></i></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-envelope"></i></a></li>
            </ul>
        </div>
        <hr>
    </div>
</main>

@endsection
