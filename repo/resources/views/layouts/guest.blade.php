<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Multipurpose, super flexible, powerful, clean modern responsive bootstrap 5 admin template"
              name="description">
        <meta content="admin template, ki-admin admin template, dashboard template, flat admin template, responsive admin template, web app"
              name="keywords">
        <meta content="la-themes" name="author">

        <link rel="icon" href="{{('../assets/images/logo/favicon.png')}}" type="image/x-icon">
        <link rel="shortcut icon" href="{{('../assets/images/logo/favicon.png')}}" type="image/x-icon">

        <title>@yield('title') | ki-admin - Premium Admin Template</title>
        <!-- Animation css -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/animation/animate.min.css') }}" >

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
              rel="stylesheet">

        <!--Flag Icon css-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/flag-icons-master/flag-icon.css') }}">

        <!-- Tabler icons-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/tabler-icons/tabler-icons.css') }}">

        <!-- Prism css-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/prism/prism.min.css') }}">

        <!-- Bootstrap css-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap/bootstrap.min.css') }}">

        <!-- Simplebar css-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/simplebar/simplebar.css') }}">

        @yield('css')
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slyle.css') }}">

    </head>
    <body class="font-sans text-gray-900 antialiased">
       @yield('content')

       <!-- latest jquery-->
       <script src="{{asset('assets/js/jquery-3.6.3.min.js')}}"></script>

       <!-- Bootstrap js-->
       <script src="{{asset('assets/vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>

       <!-- Simple bar js-->
       <script src="{{asset('assets/vendor/simplebar/simplebar.js')}}"></script>

       <!-- phosphor js -->
       <script src="{{asset('assets/vendor/phosphor/phosphor.js')}}"></script>

       <!-- Customizer js-->
       <script src="{{asset('assets/js/customizer.js')}}"></script>

       <!-- prism js-->
       <script src="{{asset('assets/vendor/prism/prism.min.js')}}"></script>

       <!-- App js-->
       <script src="{{asset('assets/js/script.js')}}"></script>

       @yield('script')
    </body>
</html>
