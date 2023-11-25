{{-- Header Section Start --}}
<header class="header-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">

                    <div class="col-lg-4">
                        {{-- Website Logo --}}
                        <a class="logo" href="{{ route('home') }}">Ashraful <span> Karim</span></a>
                    </div>

                    <div class="col-lg-8">
                        {{-- Navmenus Start --}}
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " aria-current="page" href="{{ route('projects') }}">Projects</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " aria-current="page" href="{{ route('about') }}">About Me</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " aria-current="page" href="{{ route('contact') }}">Contact</a>
                                </li class="nav-item">
                                <li>
                                    <a class="nav-link download-btn" aria-current="page" href="{{ asset('assets/test_cv.txt') }}" download> Download CV <i class="fa-solid fa-arrow-down"></i></a>
                                </li>
                        </div>
                        {{-- Navmenus End --}}

                        {{-- offcanvas Start --}}
                        <button class="toggle" data-bs-target="#offcanvas" data-bs-toggle="offcanvas" role="button">
                            <i class="fa-solid fa-bars"></i>
                        </button>

                        <div class="offcanvas offcanvas-end" id="offcanvas">

                            <div class="offcanvas-header">
                                <button class="cross" type="button" data-bs-dismiss="offcanvas">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>

                            <div class="offcanvas-body">
                                <ul>
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('projects') }}">Projects</a></li>
                                    <li><a href="{{ route('about') }}">About Me</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                    <li>
                                        <a class="download-btn" href="{{ asset('assets/test_cv.txt') }}" download>Download CV <i class="fa-solid fa-arrow-down"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- offcanvas End --}}

                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
{{-- Header Section End --}}
