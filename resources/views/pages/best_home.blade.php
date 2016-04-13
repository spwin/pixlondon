@extends('layout')
@section('title', trans('meta.homepage.best-title'))
@section('description', trans('meta.homepage.best-description'))
@section('body_class', 'main')
@section('content')
    <div class="best-main">
        <div class="logo-and-text">
            <a href="{{ url('http://'.env('WEB')) }}">
                {!! HTML::image('img/logo.svgz', 'logo', array('class' => 'main-logo')) !!}
            </a>
            <h1 class="text-below-logo light">WEB Developers</h1>
        </div>
        {!! HTML::image('img/line.png', 'line', array('class' => 'seperator wide-seperator mob-visible mt5')) !!}
        <h2 class="websites">Websites from £350</h2>
        <div class="row">
            <div class="developer-container">
                <div class="avatar left">
                    {!! HTML::image('img/funny-paul.png', 'line', array('class' => 'mob-visible')) !!}
                </div>
                <div class="developer-information left text-left ml-20px">
                    <div class="developer-name">Paul</div>
                    <div class="developer-title">Frontend developer</div>
                    <div class="developer-skills">HTML5, CSS, JavaScript, Bootstrap, jQuery, WP themes</div>
                    <div class="developer-tools"><strong>Using:</strong> PhpStorm, Git, PhotoShop, Illustrator, Filezilla/CoreFTP, Koala, Spotify</div>
                    <div class="developer-rates">£25/h</div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="row">
            <div class="developer-container">
                <div class="avatar right">
                    {!! HTML::image('img/funny-stan.png', 'line', array('class' => 'mob-visible')) !!}
                </div>
                <div class="developer-information right text-right mr-20px">
                    <div class="developer-name">Stan</div>
                    <div class="developer-title">Backend developer</div>
                    <div class="developer-skills">Php, MySQL, Apache, Linux, XML, SEO, Symfony, Laravel</div>
                    <div class="developer-tools"><strong>Using:</strong> PhpStorm, terminal, Git, Google tools, Geany, Filezilla, Skype, Shutter, Apache tools, keyboard and coffee</div>
                    <div class="developer-rates">£25/h</div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="row mt-60px">info@pixsens.co.uk</div>
        <div class="row mt-10px">
            <div class="fb-like" data-href="http://www.pixsens.co.uk" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
        </div>
    </div>
@stop