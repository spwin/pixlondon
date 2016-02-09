@extends('layout')
@section('title', 'WEB dizaino ir programavimo paslaugos Londone')
@section('body_class', 'main')
@section('content')
    <div class="main-main">
        {!! HTML::image('img/logo.svgz', 'logo', array('class' => 'main-logo')) !!}
        {!! HTML::image('img/line.png', 'line', array('class' => 'seperator wide-seperator mob-visible mt5')) !!}
        <span class="logo-text light">breathing life into pixels</span>
        {!! HTML::image('img/line.png', 'line', array('class' => 'seperator wide-seperator mob-visible mt5')) !!}
        <div class="main-languages mt20">
            <a href="{{ url('http://'.env('LT_WEB')).'/'.trans('routes.services', [], [], 'lt') }}">{!! HTML::image('img/flag-lt.png', 'lithuanian language select', array('class' => 'first-flag lang-flag')) !!}</a>
            <a href="{{ url('http://'.env('PL_WEB')).'/'.trans('routes.services', [], [], 'pl') }}">{!! HTML::image('img/flag-pl.png', 'polish language select', array('class' => 'second-flag lang-flag')) !!}</a>
            <a href="{{ url('http://'.env('RU_WEB')).'/'.trans('routes.services', [], [], 'ru') }}">{!! HTML::image('img/flag-ru.png', 'russian language select', array('class' => 'third-flag lang-flag')) !!}</a>
            <a href="{{ url('http://'.env('WEB')) }}">{!! HTML::image('img/flag-uk.png', 'english language select', array('class' => 'fourth-flag lang-flag')) !!}</a>
            <p class="lang-text"><span class="green">Choose</span> Your <span class="green">Language</span></p>
        </div>
        {!! HTML::image('img/line.png', 'line', array('class' => 'seperator wide-seperator mob-visible mt20')) !!}
        <p class="main-text"><span class="green">WEB</span> dizaino, programavimo ir SEO <span class="green">paslaugos Londone</span></p>
        {!! HTML::image('img/line.png', 'line', array('class' => 'seperator wide-seperator mob-visible mb20')) !!}
    </div>
@stop
