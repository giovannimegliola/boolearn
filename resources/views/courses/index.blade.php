@extends('layouts.app')

@section('title', 'Courses')

@section('content')
<main id="courses" class="container">

    <section id="side_bar" class="d-none d-lg-block">
        <h2>Refine your search</h2>

        <div class="table_container">
            <h3>Categories</h3>
            <ul class="pb-1">
                @foreach ($categories as $category) 
                <li class="checkbox-wrapper">
                    <input type="checkbox" id="category_{{$category->id}}" name="category_{{$category->id}}">
                    <label for="category_{{$category->id}}">
                        {{$category->name}}
                    </label>
                </li>
                @endforeach
            </ul>
            <a href="#">Show More</a>
        </div>

        <div class="table_container">
            <h3>Skills</h3>
            <ul class="pb-1">
                @foreach ($skills as $skill) 
                <li class="checkbox-wrapper">
                    <input type="checkbox" id="category_{{$skill->id}}" name="{{$skill->name}}">
                    <label for="category_{{$skill->id}}">
                        {{$skill->name}}
                    </label>
                </li>
                @endforeach
            </ul>
            <a href="#">Show More</a>
        </div>

        <div class="table_container">
            <h3>Providers</h3>
            <ul class="pb-1">
                @foreach ($providers as $provider) 
                <li class="checkbox-wrapper">
                    <input type="checkbox" id="category_{{$provider->id}}" name="{{$provider->name}}">
                    <label for="category_{{$provider->id}}">
                        @switch($provider->name)
                            @case('Massachusetts Institute of Technology (MIT)')
                                MIT
                                @break
                            @case('California Institute of Technology (Caltech)')
                                Caltech
                                @break
                            @case('University of California, Berkeley')
                                Berkeley
                                @break
                            @default
                            {{$provider->name}}
                        @endswitch
                    </label>
                </li>
                @endforeach
            </ul>
            <a href="#">Show More</a>
        </div>

    </section>

    <section id="main_content">
        <h1>Courses</h1>
        <h5>{{count($courses)}} results in Boolearn</h5>

        <div class="container-fluid">
            <div class="row gy-4 justify-content-center align-items-center">
                @foreach ($courses as $course)
                @php
                    $rand = rand(0,count($providers) - 1)
                @endphp
                <div class="col-11 col-md-6 col-xl-4">
                    <div class="card overflow-x-hidden">
                        <a href="{{route('courses.show', $course->id)}}" class="img_container">
                            <img src="{{$course->image}}" 
                            class="card-img-top" 
                            alt="{{$course->name}}">
                        </a>

                        <img src="{{$providers[$rand]->logo}}" 
                        alt="{{$providers[$rand]->name}}" class="provider_img">

                        <div class="card-body">
                            <div class="pt-3">
                                <h5 class="card-title">{{$course->name}}</h5>
                                <p class="card-text">
                                    {{$providers[$rand]->name}}
                                </p>
                            </div>
                            <span class="badge rounded-2 text-dark">Course</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</main>

@endsection
