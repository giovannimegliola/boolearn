@extends('layouts.app')

@section('title', 'Home')

@section('content')

<main id="my_main">

    <div class="container d-flex justify-content-between " >
        @foreach ($providers as $provider)
        <div>
            <img src="{{$provider->logo}}" alt="{{$provider->name}}" class="provider_logo">
        </div>
        @endforeach
   </div>

   <div class="text-center mt-5">
    <a href="#" class="mylink">Learn from 250+ leading institutions</a>
   </div>

   <section id="intro" class="container">
        <h1 class="mt-5 fw-bold">
        <span class="my-title">New</span> on Boolearn
        </h1>

       <nav class="navbar navbar-expand-lg bg-white">
        <div class="collapse navbar-collapse border-bottom">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="#">Executive Education</a>
              <a class="nav-link" href="#">Master's Degrees</a>
              <a class="nav-link" href="#">Bachelor's Degrees</a>
            </div>
        </div>
       </nav>

      <span class="badge text-bg-light me-3">Artificial Intelligence</span>
      <span class="badge text-bg-light me-3">Business Management & Strategy</span>
      <span class="badge text-bg-light me-3">Data Science</span>
      <span class="badge text-bg-light me-3">Education</span>
      <span class="badge text-bg-light me-3">Finance</span>
      <span class="badge text-bg-light me-3">Interpersonal Skills</span>
      <span class="badge text-bg-light me-3">Languages</span>
      <span class="badge text-bg-light me-3">Leadership</span>
      <span class="badge text-bg-light me-3">Web Development</span>
      <span class="badge text-bg-light">UI/UX Design</span>

      <div class="row py-4 gy-4">

        @foreach ($courses as $course)
        @php
        $rand = rand(0,count($providers) - 1)
        @endphp

        <div class="col-12 col-md-4 col-lg-3">

        <div class="card overflow-x-hidden">
            <a href="{{route('courses.show', $course->id)}}" class="img_container">
                <img src="{{$course->image}}" class="card-img-top" alt="{{$course->name}}">
            </a>

            <img src="{{$providers[$rand]->logo}}" alt="{{$providers[$rand]->name}}" class="provider_img">

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

      <div class="d-flex justify-content-center align-items-center py-4">
        <a href="{{route('courses.index')}}" class="text-bg-light btn mybtn">Explore more Executive Education</a>
      </div>
   </section>

   <section id="top-courses" class="container">
    <h2 class="fs-1 fw-bold py-2">Explore top courses</h2>

  <span class="badge text-bg-light me-3">Artificial Intelligence</span>
  <span class="badge text-bg-light me-3">Business</span>
  <span class="badge text-white bgbadge me-3">Computer Science</span>
  <span class="badge text-bg-light me-3">Data Science</span>


  <div class="row py-4 gy-4">

    @foreach ($topCourses as $course)
    @php
        $rand = rand(0,count($providers) - 1)
    @endphp
    <div class="col-12 col-md-4 col-lg-3">
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

  <div class="d-flex justify-content-center align-items-center py-4">
    <a href="#" class="text-bg-light btn mybtn">Explore more Computer Science courses</a>
  </div>

    </section>

    <section id="target" class="overflow-hidden">
        <div class="container mt-5 ">
            <div class="row">

                <div class="col-md-6 py-4">
                    <div class="skew-container">
                        <img src="{{Vite::asset('resources/img/learning.jpeg')}}" alt="learning image" class="img-fluid targetimg">
                    </div>
                </div>


                <div class="col-md-5 text-white py-5">
                    <h6>FOR LEARNERS</h6>
                    <p class="line">__</p>
                    <p class="fs-4">Propel your carrer, get a degree, or expand your knowledge at any level.</p>

                    <h6 class="mt-4">FOR BUSINESSES</h6>
                    <p class="line">__</p>
                    <p class="fs-4">Upskill employees and build a culture of learning.</p>

                    <h6 class="mt-4">FOR EDUCATORS</h6>
                    <p class="line">__</p>
                    <p class="fs-4">Expand your curriculum through blended learning.</p>
                </div>

                <div class="col-md-1 fs-1 text-white mtop">
                    <div class="myarrow my-5">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                    <div class="myarrow my-5">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                    <div class="myarrow my-5">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="learning">
        <div class="container mt-5">
            <div class="row">

              <div class="col-md-6">
                <h2 class="fs-1 py-3 fw-bold">Learn and Grow</h2>
                <p>
                  Your Boolearn experience is grounded in cutting edge cognitive science.
                  With more than two dozen distinct learning features to help you to achieve your goals,
                  our approach follows 3 key principles:
                </p>
                <h5>Experience</h5>
                <p>
                    Learn new knowledge and skills in a variety of ways, from engaging video lectures and dynamic graphics
                    to data visualization and interactive elements.
                </p>
                <h5>Practice</h5>
                <p>
                    Demonstrating your knowldege is a critical part of learning. Boolearn courses and programs provide
                    a space to practice with quizzies, open response assessments, virtual environments, and more.
                </p>
                <h5>Apply</h5>
                <p>
                    Learning on Boolearn tranforms how you think and what you can do, and translates directly into the
                    real world - immediately apply your new capabilities in the context of your job.
                </p>
              </div>

              <div class="col-md-6 d-flex align-items-center">
                <div>
                    <img src="{{Vite::asset('resources/img/brain.webp')}}" alt="brain image" class="img-fluid">
                </div>

              </div>
            </div>
        </div>
    </section>

    <section id="vision">
        <div class="container mt-5 py-5 text-white globecont">
            <div class="row">

              <div class="col-md-6">
                <h5>Our vision</h5>
                <p class="fs-1 fw-semibold ">
                  As a mission driven organization, we're relentlessly pursuing our vision of a world where every learner
                  can access education to unlock their potential, without the barriers of cost or location.
                </p>
                <a href="#" class="text-bg-light btn mybtn">Learn more</a>
              </div>

              <div class="col-md-6 d-flex align-items-end">
                <div class="myglobe">
                    <img src="{{Vite::asset('resources/img/globe-dark-lg.webp')}}" alt="earth image" class="img-fluid">
                </div>
              </div>

            </div>
        </div>

    </section>

</main>

@endsection
