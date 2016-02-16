<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="robots" content="noindex" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="@yield('description', trans('layout.description'))">
    <meta name="keywords" content="@yield('keywords', trans('layout.keywords'))">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    {!! HTML::style('css/app.css', array(), false) !!}
</head>
<body class="@yield('body_class')">
    @yield('header')
    @yield('content')
    @include('footer')
    {!! HTML::script('js/all.js', array(), false) !!}
    @stack('scripts')
</body>
</html>