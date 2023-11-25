@extends("layout.master")

@section("title")
    <title>Md Ashraful Karim</title>
@endsection

@section("banner_text")
<div class="col-lg-8 banner-content home-banner">
    <h5>HOME</h5>
    <h1>Discover my
        <span>creative space</span>
    </h1>
    <a href="#video">VIDEO RESUME <i class="fa-solid fa-play"></i></a>
</div>
@endsection

@section("content")

{{-- Counter Section Start --}}
<section class="counter">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-4 counter-content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="counter-box">
                            <h3>50 <span>+</span></h3>
                            <div class="divider"></div>
                            <h4>COMPLETED
                                <span>PROJECTS</span>
                            </h4>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="counter-box">
                            <h3>30 <span>+</span></h3>
                            <div class="divider"></div>
                            <h4>HAPPY
                                <span>CUSTOMERS</span>
                            </h4>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="counter-box">
                            <h3>10 <span>+</span></h3>
                            <div class="divider"></div>
                            <h4>HONORS AND
                                <span> REWARDS</span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Counter Section End --}}

{{-- Story Section Start --}}
<section class="story">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-4 story-box">
                <h4>My Story
                    <span class="title-divider" data-number="01"></span>
                </h4>
                <div class="story-content">
                    <i class="fa-solid fa-quote-left"></i>
                    <p> Passionate web developer dedicated to creating dynamic and visually captivating digital experiences. Proficient in a diverse tech stack, including HTML, CSS, JavaScript, PHP, Laravel, and adept at database design and optimization. Well-versed in utilizing Bootstrap and WordPress for efficient development. Skilled in version control with Git and collaborative workflows on GitHub. Committed to delivering high-quality solutions through a blend of creativity and adherence to industry standards. Eager to contribute expertise to innovative projects, driven by a perpetual pursuit of learning and improvement. </p>
                    <i class="fa-solid fa-quote-right"></i>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Story Section End --}}

{{-- Video Section Start --}}
<section class="video" id="video">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-4 video-box">
                <h4>Video Resume
                    <span class="title-divider" data-number="02"></span>
                </h4>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="mb-3"> Will Be Posted Very Soon.</h1>
                        <img class="img-fluid" src="https://placehold.co/850x400" alt="thumbnail">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Video Section End --}}

{{-- Service Section Start --}}
<section class="service">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-4 service-box">
                <h4>My Services
                    <span class="title-divider" data-number="03"></span>
                </h4>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="service-content">
                            <i class="fa-brands fa-bootstrap"></i>
                            <h5>Landing Page</h5>
                            <p>Crafting eye-catching landing pages is my expertise. Using HTML, CSS, and Bootstrap, I design pages that not only showcase your brand beautifully but also ensure a seamless user experience. From clean HTML structure to stylish CSS, and leveraging Bootstrap for responsiveness, your landing page will engage your audience effectively.</p>
                            <a class="hire" href="{{ route('contact') }}">
                                Hire Now <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="service-content">
                            <i class="fa-brands fa-wordpress-simple"></i>
                            <h5>Wordpress Design</h5>
                            <p>Elevate your online presence with my expertise in WordPress design and customization. I specialize in creating visually stunning websites using Elementor, offering seamless customization and flexibility. Your WordPress site will be thoughtfully crafted to uniquely reflect your brand, creating a compelling online identity that engages and captivates your audience effectively.</p>
                            <a class="hire" href="{{ route('contact') }}">
                                Hire Now <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="service-content">
                            <i class="fa-brands fa-laravel"></i>
                            <h5>Laravel Development</h5>
                            <p>As a Laravel developer, I focus on creating powerful web applications using the Laravel framework. From custom feature development to ensuring security and scalability, I leverage Laravel's capabilities to deliver efficient and high-performing solutions. Proficient in database design, API integration, and best practices, I bring expertise to every Laravel project. Elevate your digital presence with tailored Laravel solutions designed to meet your unique requirements.</p>
                            <a class="hire" href="{{ route('contact') }}">
                                Hire Now <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="service-content">
                            <i class="fa-solid fa-envelopes-bulk"></i>
                            <h5>Email Template Design</h5>
                            <p>Enhance your digital communication with custom HTML designs. For email campaigns, I specialize in creating visually appealing and responsive HTML templates, ensuring a lasting impression and engagement. Simultaneously, I craft personalized and professional HTML email signatures that reflect your brand identity. From campaign effectiveness to everyday correspondence, ensure a consistent and visually striking presence across your digital communications.</p>
                            <a class="hire" href="{{ route('contact') }}">
                                Hire Now <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Service Section End --}}

{{-- Testimonial Section Start --}}
<section class="testimonial">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 offset-lg-4 testimonial-box">
                <div class="testimonial-box">
                    <h4>Testimonials
                        <span class="title-divider" data-number="04"></span>
                    </h4>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonial-content">
                            <div class="swiper testimonials">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="content-box">
                                            <img src="{{ asset('assets/images/avtar1.jpg') }}" alt="Client Avatar">
                                            <h6>Oscar Oldman</h6>
                                            <p>Photographer</p>
                                            <div class="des-cription">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam
                                                    laudantium qui odit veniam optio architecto aperiam. Obcaecati
                                                    magnam similique eveniet nam error aperiam labore dolorem
                                                    cupiditate perspiciatis, necessitatibus autem culpa.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="content-box">
                                            <img src="{{ asset('assets/images/avatar2.jpg') }}" alt="Client Avatar">
                                            <h6>Oscar Oldman</h6>
                                            <p>Photographer</p>
                                            <div class="des-cription">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam
                                                    laudantium qui odit veniam optio architecto aperiam. Obcaecati
                                                    magnam similique eveniet nam error aperiam labore dolorem
                                                    cupiditate perspiciatis, necessitatibus autem culpa.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="content-box">
                                            <img src="{{ asset('assets/images/avatar3.jpg') }}" alt="Client Avatar">
                                            <h6>Oscar Oldman</h6>
                                            <p>Photographer</p>
                                            <div class="des-cription">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam
                                                    laudantium qui odit veniam optio architecto aperiam. Obcaecati
                                                    magnam similique eveniet nam error aperiam labore dolorem
                                                    cupiditate perspiciatis, necessitatibus autem culpa.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="navigation">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="divider"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Testimonial Section End --}}

@endsection