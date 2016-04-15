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
        <h2 class="websites">Websites starting at £350</h2>
        {!! HTML::image('img/line.png', 'line', array('class' => 'seperator wide-seperator mob-visible mt5')) !!}
        <div class="row mt20">
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
        <div class="row mt20">
            <span class="contacts-header">C<span class="green">on</span>tacts</span>
        </div>
        {!! HTML::image('img/line.png', 'line', array('class' => 'seperator wide-seperator mob-visible mt5')) !!}
        <div class="row mt20">
            <span class="contacts-subheader fs18vw">Our e<span class="green">mail</span></span>
        </div>
        <div class="row mt20 fs21vw">info@pixsens.co.uk</div>

        <div class="row mt20">
            <span class="fs14vw">and... <br><span class="fs18vw"><span class="green">contact</span> form <span class="green">for lazy</span> ones</span></span>
        </div>
        <div>
            @if(Session::has('success'))
                <div class="alert-box success">
                    <h2>{{ Session::get('success') }}</h2>
                </div>
            @endif
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p class="pink">{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            {!! Form::open([
                // 'action' => 'PagesController@sendMail',
                'class' => 'wpcf7-form',
                'role' => 'form',
                'method' => '',
                'novalidate' => 'novalidate'
                ]) !!}
                {!! Form::text('name', null, ['autocomplete' => 'off', 'placeholder' => 'Name']) !!}
                {!! Form::input('email', 'email', null, ['autocomplete' => 'off', 'placeholder' => 'Email']) !!}
                {!! Form::input('tel', 'phone', null, ['autocomplete' => 'off', 'placeholder' => 'Phone']) !!}
                {!! Form::text('subject', null, ['autocomplete' => 'off', 'placeholder' => 'Subject']) !!}
                {!! Form::textarea('content', null, ['autocomplete' => 'off', 'placeholder' => 'Message']) !!}
                {!! Form::input('submit', 'submit', 'Send', []) !!}
            {!! Form::close() !!}
        </div>

        <div class="row mt20">
            <span class="contacts-header fs21vw"><span class="faceblue">Give</span> us a <span class="faceblue">hug</span> on <span class="faceblue">Face</span>book!</span>
        </div>
        <div class="row mt-10px">
            <div class="fb-like" data-href="http://www.pixsens.co.uk" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
        </div>
    </div>
@stop