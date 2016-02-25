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
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    @yield('header')
    @yield('content')
    {!! HTML::script('js/all.js', array(), false) !!}
    <script src="https://apis.google.com/js/platform.js" async defer>
        {lang: 'en-GB'}
    </script>
    @yield('scripts')
</body>
</html>