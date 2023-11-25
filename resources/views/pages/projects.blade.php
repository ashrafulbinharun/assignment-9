@extends("layout.master")

@section("title")
    <title>Md Ashraful Karim | Projects</title>
@endsection

@section("banner_text")
<div class="col-lg-8 banner-content portfolio-banner">
    <h5>PROJECTS</h5>
    <h1>Recent work
        <span>performed</span>
    </h1>
    <a href="#projects">HOME / PROJECTS</a>
</div>
@endsection

@section("content")

@push("styles")
    {{-- Fancy Box 3 CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
@endpush

{{-- Projects Section Start --}}
<section class="portfolio" id="projects">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-4 portfolio-box">
                <div class="row">
                    <div class="col-lg-6">

                        <div class="main-box">
                            <img src="{{ asset('assets/images/yumy.jpg') }}" alt="Portfolio Image">
                            <div class="main-box-hover">
                                <div class="project-title">
                                    <h5>Project 01</h5>
                                </div>
                                <div class="icon">
                                    <div class="icon-box">
                                        <a data-fancybox="gallery" href="{{ asset('assets/images/yumy.jpg') }}">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="icon-box-two">
                                        <a target="_blank" href="https://ashrafulbinharun.com/yumy/">
                                            <i class="fa-solid fa-link"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="main-box">
                            <img src="{{ asset('assets/images/insur.jpg') }}" alt="Portfolio Image">
                            <div class="main-box-hover">
                                <div class="project-title">
                                    <h5>Project 02</h5>
                                </div>
                                <div class="icon">
                                    <div class="icon-box">
                                        <a data-fancybox="gallery" href="{{ asset('assets/images/insur.jpg') }}">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="icon-box-two">
                                        <a target="_blank" href="https://ashrafulbinharun.com/insur/">
                                            <i class="fa-solid fa-link"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="main-box">
                            <img src="{{ asset('assets/images/brandex.jpg') }}" alt="Portfolio Image">
                            <div class="main-box-hover">
                                <div class="project-title">
                                    <h5>Project 03</h5>
                                </div>
                                <div class="icon">
                                    <div class="icon-box">
                                        <a data-fancybox="gallery" href="{{ asset('assets/images/brandex.jpg') }}">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="icon-box-two">
                                        <a target="_blank" href="https://ashrafulbinharun.com/brandex/">
                                            <i class="fa-solid fa-link"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="main-box">
                            <img src="{{ asset('assets/images/furnio.jpg') }}" alt="Portfolio Image">
                            <div class="main-box-hover">
                                <div class="project-title">
                                    <h5>Project 04</h5>
                                </div>
                                <div class="icon">
                                    <a data-fancybox="gallery" href="{{ asset('assets/images/furnio.jpg') }}">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </a>
                                    <div class="icon-box-two">
                                        <a target="_blank" href="https://ashrafulbinharun.com/funiro/"><i class="fa-solid fa-link"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="main-box">
                            <img src="{{ asset('assets/images/lets-food.jpg') }}" alt="Portfolio Image">
                            <div class="main-box-hover">
                                <div class="project-title">
                                    <h5>Project 05</h5>
                                </div>
                                <div class="icon">
                                    <div class="icon-box">
                                        <a data-fancybox="gallery" href="{{ asset('assets/images/lets-food.jpg') }}">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="icon-box-two">
                                        <a target="_blank" href="https://ashrafulbinharun.com/Lets-Food/">
                                            <i class="fa-solid fa-link"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="main-box">
                            <img src="{{ asset('assets/images/evlio.jpg') }}" alt="Portfolio Image">
                            <div class="main-box-hover">
                                <div class="project-title">
                                    <h5>Project 06</h5>
                                </div>
                                <div class="icon">
                                    <div class="icon-box">
                                        <a data-fancybox="gallery" href="{{ asset('assets/images/evlio.jpg') }}">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="icon-box-two">
                                        <a target="_blank" href="https://ashrafulbinharun.com/evlio/">
                                            <i class="fa-solid fa-link"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Projects Section End --}}

@push("scripts")
    {{-- Fancy Box Js --}}
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
@endpush

@endsection