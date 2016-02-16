@extends('layout')
@section('title', 'WEB dizaino ir programavimo paslaugos Londone')
@section('header')
    @include('header')
@stop
@section('body_class', 'main')
@section('content')
    @include('menu')
    <div class="main-main">
        <div class="logo-and-text">
            {!! HTML::image('img/logo.svgz', 'logo', array('class' => 'main-logo')) !!}
            <p class="text-below-logo light">Breathing life into pixels</p>
        </div>
        {!! HTML::image('img/line.png', 'line', array('class' => 'seperator wide-seperator mob-visible mt5')) !!}
        <span class="logo-text light">WEB dizaino, programavimo<br> ir SEO paslaugos Londone</span>
        {!! HTML::image('img/line.png', 'line', array('class' => 'seperator wide-seperator mob-visible mt5')) !!}
        {!! HTML::image('img/color-lines-mob.svg', 'line', array('class' => 'color-lines-mob')) !!}
        {!! HTML::image('img/color-lines-web.svg', 'line', array('class' => 'color-lines-web left-line')) !!}
        {!! HTML::image('img/color-lines-web.svg', 'line', array('class' => 'color-lines-web right-line')) !!}
        <div class="main-languages">
            <p class="lang-text"><span class="green">Pasirinkite</span> norimą <span class="green">kalbą</span></p>
        </div>
        {!! HTML::image('img/line.png', 'line', array('class' => 'seperator wide-seperator mob-visible mt5')) !!}
        <div class="lang-choice mt5">
            <a href="{{ url('http://'.env('LT_WEB')).'/'.trans('routes.services', [], [], 'lt') }}"><div class="lang-square chosen"><span class="inline-block">LT</span></div></a>
            <a href="{{ url('http://'.env('PL_WEB')).'/'.trans('routes.services', [], [], 'pl') }}"><div class="lang-square"><span class="inline-block">PL</span></div></a>
            <a href="{{ url('http://'.env('RU_WEB')).'/'.trans('routes.services', [], [], 'ru') }}"><div class="lang-square"><span class="inline-block">RU</span></div></a>
        </div>
        {!! HTML::image('img/line.png', 'line', array('class' => 'seperator wide-seperator mob-visible mb20 mt5')) !!}
    </div>
@stop
