<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{ config('app.name', 'SaltPepper') }}</title>
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}"></script>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="robots" content="all,follow">
      <!-- Custom stylesheet -->
      <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
      <!-- Price Slider Stylesheets -->
      <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/directory/1-0/vendor/nouislider/nouislider.css">
      <!-- Google fonts - Playfair Display-->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700">
      <!-- Google fonts - Poppins-->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,700">
      <!-- swiper-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">
      <!-- Magnigic Popup-->
      <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/directory/1-0/vendor/magnific-popup/magnific-popup.css">
      <!-- theme stylesheet-->
      <link rel="stylesheet" href="https://demo.bootstrapious.com/directory/1-0/css/style.default.css" id="theme-stylesheet">
      <!-- Favicon-->
      <link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset('storage/img/logo/apple-icon-57x57.png')}}">
      <link rel="apple-touch-icon" sizes="60x60" href="{{ URL::asset('storage/img/logo/apple-icon-60x60.png')}}">
      <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('storage/img/logo/apple-icon-72x72.png')}}">
      <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('storage/img/logo/apple-icon-76x76.png')}}">
      <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('storage/img/logo/apple-icon-114x114.png')}}">
      <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('storage/img/logo/apple-icon-120x120.png')}}">
      <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset('storage/img/logo/apple-icon-144x144.png')}}">
      <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('storage/img/logo/apple-icon-152x152.png')}}">
      <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('storage/img/logo/apple-icon-180x180.png')}}">
      <link rel="icon" type="image/png" sizes="192x192"  href="{{ URL::asset('storage/img/logo/android-icon-192x192.png')}}">
      <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('storage/img/logo/favicon-32x32.png')}}">
      <link rel="icon" type="image/png" sizes="96x96" href="{{ URL::asset('storage/img/logo/favicon-96x96.png')}}">
      <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('storage/img/logo/favicon-16x16.png')}}">
      <link rel="manifest" href="{{ URL::asset('storage/img/logo/manifest.json')}}">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="{{ URL::asset('storage/img/logo/ms-icon-144x144.png')}}">
      <meta name="theme-color" content="#ffffff">
      <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <!-- Font Awesome CSS-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/solid.css" integrity="sha384-TbilV5Lbhlwdyc4RuIV/JhD8NR+BfMrvz4BL5QFa2we1hQu6wvREr3v6XSRfCTRp" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/regular.css" integrity="sha384-avJt9MoJH2rB4PKRsJRHZv7yiFZn8LrnXuzvmZoD3fh1aL6aM6s0BBcnCvBe6XSD" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/brands.css" integrity="sha384-7xAnn7Zm3QC1jFjVc1A6v/toepoG3JXboQYzbM0jrPzou9OFXm/fY6Z/XiIebl/k" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/fontawesome.css" integrity="sha384-ozJwkrqb90Oa3ZNb+yKFW2lToAWYdTiF1vt8JiH5ptTGHTGcN7qdoR1F95e0kYyG" crossorigin="anonymous">
      <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/EAC6C0AD-B191-9D4C-8A8E-929FC5EF90C5/main.js" charset="UTF-8"></script>
      {{-- Script for bootstrap --}}
     <!-- jQuery-->
     <script src="https://d19m59y37dris4.cloudfront.net/directory/1-0/vendor/jquery/jquery.min.js"></script>
     <!-- Bootstrap JS bundle - Bootstrap + PopperJS-->
     <script src="https://d19m59y37dris4.cloudfront.net/directory/1-0/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
     <!-- Magnific Popup - Lightbox for the gallery-->
    </head>
    <body style="padding-top: 72px;">
        @include('inc.navbar')
        @include('inc.messages')
        @yield('content')
        @include('inc.footer')
      {{-- Script for bootstrap --}}
     <!-- jQuery-->
     <script src="https://d19m59y37dris4.cloudfront.net/directory/1-0/vendor/jquery/jquery.min.js"></script>
     <!-- Bootstrap JS bundle - Bootstrap + PopperJS-->
     <script src="https://d19m59y37dris4.cloudfront.net/directory/1-0/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
     <!-- Magnific Popup - Lightbox for the gallery-->
     <script src="https://d19m59y37dris4.cloudfront.net/directory/1-0/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
     <!-- Smooth scroll-->
     <script src="https://d19m59y37dris4.cloudfront.net/directory/1-0/vendor/smooth-scroll/smooth-scroll.polyfills.min.js"></script>
     <!-- Bootstrap Select-->
     <script src="https://d19m59y37dris4.cloudfront.net/directory/1-0/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
     <!-- Object Fit Images - Fallback for browsers that don't support object-fit-->
     <script src="https://d19m59y37dris4.cloudfront.net/directory/1-0/vendor/object-fit-images/ofi.min.js"></script>
     <!-- Swiper Carousel                       -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
     <script>var basePath = ''</script>
     <!-- Main Theme JS file    -->
     <script src="/js/theme.js"></script>
   </body>
</html>
