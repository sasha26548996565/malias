<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title', __('index.title'))</title>
        <meta name="description" content="Shop">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

        <link href='https://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}">

		<link rel="stylesheet" href="{{ asset('css/nivo-slider.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

        @yield('custom_css')
    </head>
    <body>
		@include('includes.header')
		@include('includes.category_slider')

		@yield('content')

        @include('includes.brand_logo')
        @include('includes.subscribe_area')
        @include('includes.footer')

        <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('js/countdon.min.js') }}"></script>
        <script src="{{ asset('js/jquery-price-slider.js') }}"></script>
		<script src="{{ asset('js/jquery.nivo.slider.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/plugins.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        @include('includes.ajax.addCart')
        @include('includes.ajax.updateCart')
        @include('includes.ajax.removeCart')
        @include('includes.ajax.swopeLanguage')

        @yield('custom_javascript')
    </body>
</html>
