{{-- Banner Section Start --}}
<section class="Banner-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 banner-bg">

                <div class="swiper banner">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide banner-image">
                            <img src="{{ asset('assets/images/banner.jpg') }}" alt="Banner Image One">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/banner2.jpg') }}" alt="Banner Image Two">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/banner3.jpg') }}" alt="Banner Image Three">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 sidebar">
                        <div class="avatar">
                            <img src="{{ asset('assets/images/profile-picture.png') }}" alt="Avatar Image">
                        </div>
                        <h4> MD ASHRAFUL KARIM</h4>
                        <div class="nerdy-pen">
                            <h5 class="nerdy-pen__text">I'M
                                <span class="txt-rotate" data-period="2000"
                                    data-rotate='[ "WEB DEVELOPER.", "WEB UI DESIGNER.", "PROGRAMMER."]'></span>
                            </h5>
                        </div>
                        <div class="profile-divider"></div>
                        <div class="social-media">
                            <a href="https://www.linkedin.com/in/md-ashraful-karim/">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                            <a href="https://www.facebook.com/AshrafulKarimMunna">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="https://wa.me/+8801648901932">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                            <a href="https://twitter.com/munna2999?t=LfxE6wC1uj3sfjgKH8XCGg&s=09">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </div>
                        <div class="profile-divider"></div>
                        <div class="info">
                            <ul>
                                <li>
                                    <div>residence:</div>
                                    <div>bangladesh</div>
                                </li>
                                <li>
                                    <div>city:</div>
                                    <div>dhaka</div>
                                </li>
                                <li>
                                    <div>age:</div>
                                    <div>24</div>
                                </li>
                            </ul>
                        </div>
                        <div class="profile-divider"></div>
                        <a class="contact-btn" href="contact.html">
                            CONTACT ME<i class="fa-solid fa-envelope"></i>
                        </a>
                    </div>
                    @yield("banner_text")
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Banner Section End --}}