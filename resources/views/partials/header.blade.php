<header id="my_header">
    {{-- navbar --}}
    <nav class="d-flex justify-content-between align-items-center">
        {{-- left nav --}}
        <ul class="d-flex justify-content-center align-items-center">
            <li>
                <a href="{{route('home')}}">
                    <img src="{{Vite::asset('resources/img/logo.png')}}" alt="logo">
                </a>
            </li>

            {{-- dropdown --}}
            <li class="dropdown d-md-none">
                <button class="hamburger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Learn</a></li>
                    <li><a class="dropdown-item" href="{{route('courses.index')}}">Courses</a></li>
                    <li><a class="dropdown-item" href="#">edX For Business</a></li>
                    <li><a class="dropdown-item" href="#">About</a></li>
                </ul>
            </li>

            <li role="button" class="learn_btn px-3 py-2 d-none d-md-block">
                Learn
                <i class="fa-solid fa-angle-down ps-3"></i>
            </li>

            <li class="my_input px-3 py-2 ms-2 d-none d-md-block">
                <input type="text" class="" placeholder="What do you want to learn?">
                <span>
                    <i class="fa-solid fa-magnifying-glass px-1"></i>
                </span>
            </li>
        </ul>

        {{-- right nav --}}
        <ul class="d-flex justify-content-center align-items-center pe-2">
            <li class="px-4 d-none d-lg-block py-2 edX">
                <a href="#" class="text-dark">edX For Business</a>
            </li>
            <li class="py-2 px-4 sign_in">
                <a href="{{route('login.index')}}">
                    Sign in
                </a>
            </li>
            <li class="register ms-2">
                <a href="{{route('login.show')}}">
                    Register for free
                </a>
            </li>
        </ul>
    </nav>

    {{-- jumosection --}}
    <section id="jumbotron">
        <div class="container py-5">
            <h1 class="display-1 fw-bold pt-5 mt-4">
                Fuel your ambition
            </h1>

            <div class="py-5">
                <input type="text" placeholder="Search our 4000+ courses">
                <a role="button" href="#" class="search">
                    Search
                </a>
            </div>

            <div>
                <a href="{{route('courses.index')}}" class="explore">
                    Explore all courses
                </a>
            </div>
        </div>
        {{-- subjumbo --}}
        <section id="subjumbo">
            <div class="container d-flex justify-content-end align-items-center">
                <div class="img_container">
                    <img src="{{Vite::asset('resources/img/book.webp')}}" alt="book">
                </div>
                <h2>
                    Recognized for innovation in career-relevant learning
                </h2>
            </div>
        </section>
    </section>

</header>
