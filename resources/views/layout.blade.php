<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="@yield('description')">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    {!! HTML::style('css/app.css', array(), false) !!}
</head>
<body class="@yield('body_class')">
    <div id="fb-root"></div>
    <script type="application/ld+json">
    {
      "@context" : "http://schema.org",
      "@type" : "Organization",
      "name" : "Pixsens",
      "url" : "http://www.pixsens.co.uk",
      "sameAs" : [
        "https://www.facebook.com/pixsensLTD",
        "https://plus.google.com/+PIXSENSlT2014",
        "https://twitter.com/PixsensLTD",
        "https://www.linkedin.com/company/pixsens"
     ]
    }
    </script>
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
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/'+'{{ trans('layout.tawk') }}'+'/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    @yield('scripts')
</body>
</html>