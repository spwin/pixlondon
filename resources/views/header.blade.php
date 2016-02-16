<header>
    <a href="{{ url('/') }}">{!! HTML::image('img/lampeczka.svgz', 'Logo', array('class' => 'head-logo fleft mob-lamp')) !!}</a>
    <a href="{{ url('/') }}">{!! HTML::image('img/logo.svgz', 'Logo', array('class' => 'head-logo fleft web-lamp')) !!}</a>
    <ul class="main-nav">
        <li><a href="{{ url(trans('routes.seo')) }}">{!! trans('menu.seo') !!}</a></li>
        <li><a href="{{ url(trans('routes.programming')) }}">{!! trans('menu.programming') !!}</a></li>
        <li><a href="{{ url(trans('routes.design')) }}">{!! trans('menu.design') !!}</a></li>
        <li><a href="{{ url(trans('routes.services')) }}">{!! trans('menu.services') !!}</a></li>
        <li><a href="{{ url(trans('routes.contacts')) }}">{!! trans('menu.contacts') !!}</a></li>
    </ul>
    {!! HTML::image('img/burger.svgz', 'menu line', array('class' => 'mob-hamb fright')) !!}
</header>