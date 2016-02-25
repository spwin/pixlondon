@extends('layout')
@section('title', trans('meta.homepage.title'))
@section('description', trans('meta.homepage.description'))
@section('header')
    @include('header')
@stop
@section('body_class', 'main homepage')
@section('content')
    @include('menu')
    <div class="main-main">
        <div class="logo-and-text">
            <a href="{{ url('http://'.env('WEB')) }}">
                {!! HTML::image('img/logo.svgz', 'logo', array('class' => 'main-logo')) !!}
            </a>
            <p class="text-below-logo light">Breathing life into pixels</p>
        </div>
        {!! HTML::image('img/line.png', 'line', array('class' => 'seperator wide-seperator mob-visible mt5')) !!}
        <span class="logo-text light">{!! trans('homepage.home-title') !!}</span>
        {!! HTML::image('img/line.png', 'line', array('class' => 'seperator wide-seperator mob-visible mt5')) !!}
        {!! HTML::image('img/color-lines-mob.svg', 'line', array('class' => 'color-lines-mob')) !!}
        {!! HTML::image('', 'line', array('class' => 'color-lines-web left-line', 'lsrc' => 'img/color-lines-web.svg')) !!}
        {!! HTML::image('', 'line', array('class' => 'color-lines-web right-line', 'lsrc' => 'img/color-lines-web.svg')) !!}
        <div class="main-languages">
            <p class="lang-text">{!! trans('homepage.choose-language') !!}</p>
        </div>
        {!! HTML::image('img/line.png', 'line', array('class' => 'seperator wide-seperator mob-visible mt5')) !!}
        <div class="lang-choice mt5">
            <a href="{{ url('http://'.env('LT_WEB')).'/'.trans('routes.services', [], [], 'lt') }}"><div class="lang-square {{ App::getLocale() == 'lt' ? 'chosen' : '' }}"><span class="inline-block">LT</span></div></a>
            <a href="{{ url('http://'.env('PL_WEB')).'/'.trans('routes.services', [], [], 'pl') }}"><div class="lang-square {{ App::getLocale() == 'pl' ? 'chosen' : '' }}"><span class="inline-block">PL</span></div></a>
            <a href="{{ url('http://'.env('RU_WEB')).'/'.trans('routes.services', [], [], 'ru') }}"><div class="lang-square {{ App::getLocale() == 'ru' ? 'chosen' : '' }}"><span class="inline-block">RU</span></div></a>
        </div>
        {!! HTML::image('img/line.png', 'line', array('class' => 'seperator wide-seperator mob-visible mt5')) !!}
        <div class="homepage-button mt20">
            <a href="{{ url(trans('routes.services')) }}">
                <p>{!! trans('homepage.our-services') !!}</p>
                {!! HTML::image('img/arrow-green.svgz', 'arrow', array('class' => 'homepage-button-img')) !!}
            </a>
        </div>
    </div>
    @include('footer')
@stop
@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        footerPosition();
    });
    $(window).load(function(){
        footerPosition();
    });
</script>
@stop