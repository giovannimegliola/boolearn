<header id="my_header">
    <nav class="d-flex justify-content-between align-items-center">
        {{-- left nav --}}
        <ul class="d-flex justify-content-center align-items-center">
            <li>
                <img src="/img/logo.png" alt="logo">
            </li>

            {{-- dropdown --}}
            <li class="dropdown d-md-none">
                <button class="hamburger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Learn</a></li>
                    <li><a class="dropdown-item" href="#">Courses</a></li>
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
                    <i class="fa-solid fa-magnifying-glass px-2"></i>
                </span>
            </li>
        </ul>

        {{-- right nav --}}
        <ul class="d-flex justify-content-center align-items-center pe-2">
            <li class="px-4 d-none d-lg-block py-2 edX">
                <a href="#" class="text-dark">edX For Business</a>
            </li>
            <li class="py-2 px-4 sign_in">
                <a href="#">
                    Sign in
                </a>
            </li>
            <li class="register ms-2">
                <a href="#">
                    Register for free
                </a>
            </li>
        </ul>
    </nav>
</header>
