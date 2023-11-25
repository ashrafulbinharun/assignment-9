<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Md. Ashraful Karim">
    <meta name="description" content="Personal portfolio using Laravel">
    {{-- title --}}
    @yield("title")
    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    {{-- Swiper Css --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    {{-- Theme CSS File --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    @stack("styles")
</head>

<body>

    @include("components.header")

    @include("components.banner")

    @yield("content")

    @include("components.footer")


    {{-- JQuery Js --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    {{-- Swiper JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    {{-- Theme JS File --}}
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack("scripts")

</body>

</html>