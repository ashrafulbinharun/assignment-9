@extends("layout.master")

@section("title")
    <title>Md Ashraful Karim | Contact</title>
@endsection

@section("banner_text")
<div class="col-lg-8 banner-content contact-banner">
    <h5>CONTACT</h5>
    <h1>Have a question?
        <span>Let's Get in Touch</span>
    </h1>
    <a href="#contact">HOME / CONTACT</a>
</div>
@endsection

@section("content")

{{-- Contact Section Start --}}
<section class="contact">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 offset-lg-4 contact-box">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="info-box">
                            <div class="icon">
                                <img class="black-icon" src="{{ asset('assets/images/phone.svg') }}" alt="icon">
                                <img class="white-icon" src="{{ asset('assets/images/phone-bg.svg') }}" alt="icon">
                            </div>
                            <h6> Call </h6>
                            <div class="p-one">
                                <span>WORK :</span>
                                <span><a href="callto:+8801648901932">+8801648901932</a></span>
                            </div>
                            <div class="p-two">
                                <span>PERSONAL :</span>
                                <span><a href="callto:+8801954708216">+8801954708216</a></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="info-box">
                            <div class="icon">
                                <img class="black-icon" src="{{ asset('assets/images/msg.svg') }}" alt="icon">
                                <img class="white-icon" src="{{ asset('assets/images/msg-bg.svg') }}" alt="icon">
                            </div>
                            <h6> Write </h6>
                            <div class="p-one">
                                <span>EMAIL :</span>
                                <span><a href="mailto:ashrafulkarim.dev@gmail.com">ashrafulkarim.dev@gmail.com</a></span>
                            </div>
                            <div class="p-two">
                                <span>TWITTER :</span>
                                <span><a href="https://twitter.com/munna2999?t=LfxE6wC1uj3sfjgKH8XCGg&s=09">@munna2999</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Contact Section End --}}

{{-- Form Section Start --}}
<section class="form-section" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-4 form-box">
                <h4>Get in touch
                    <span class="title-divider" data-number="02"></span>
                </h4>
                <div class="form-content">
                    <form action="{{ route('contact') }}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" type="text" placeholder="Name" required>
                            <div class="invalid-feedback mt-2">
                                Please provide your name.
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" type="email" placeholder="Email" required>
                            <div class="invalid-feedback mt-2">
                                Please provide a valid email
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea name="message" class="form-control message-box" placeholder="Message..." required></textarea>
                            <div class="invalid-feedback">
                                Please provide your message.
                            </div>
                        </div>
                        <div class="form-bottom">
                            <button type="submit" class="btn-send"> Send <i
                                    class="fa-solid fa-arrow-right"></i></button>
                            <div class="caution"> I promise the confidentiality of your personal information</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>
{{-- Form Section End --}}

@push("scripts")
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
            }, false)
        })
    })()
</script>
@endpush

@endsection