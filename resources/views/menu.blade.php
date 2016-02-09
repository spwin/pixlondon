<div class="mob-menu">
    <ul class="mob-menu-lang light">
        <li>LT</li>
        <li>EN</li>
        <li>PL</li>
        <li>RU</li>
    </ul>
    {!! HTML::image('img/menu-line.png', 'menu line', array('class' => 'seperator wide-seperator mob-visible')) !!}
    <ul class="mob-menu-list light">
        <a href="{{ url(trans('routes.seo')) }}"><li><span>{!! trans('menu.mobile-seo') !!}</span></li></a>
        {!! HTML::image('img/menu-line.png', 'menu line', array('class' => 'seperator wide-seperator mob-visible')) !!}
        <a href="{{ url(trans('routes.programming')) }}"><li><span>{!! trans('menu.mobile-programming') !!}</span></li></a>
        {!! HTML::image('img/menu-line.png', 'menu line', array('class' => 'seperator wide-seperator mob-visible')) !!}
        <a href="{{ url(trans('routes.design')) }}"><li><span>{!! trans('menu.mobile-design') !!}</span></li></a>
        {!! HTML::image('img/menu-line.png', 'menu line', array('class' => 'seperator wide-seperator mob-visible')) !!}
        <a href="{{ url(trans('routes.services')) }}"><li><span>{!! trans('menu.mobile-services') !!}}</span></li></a>
        {!! HTML::image('img/menu-line.png', 'menu line', array('class' => 'seperator wide-seperator mob-visible')) !!}
        <a href="{{ url(trans('routes.contacts')) }}"><li><span>{!! trans('menu.mobile.contacts') !!}</span></li></a>
    </ul>
    {!! HTML::image('img/menu-line.png', 'menu line', array('class' => 'seperator wide-seperator mob-visible')) !!}
    <div class="mob-menu-social">
        <div class="mob-social-cont">
            {!! HTML::image('img/social-icons/f-icon-hover.svgz') !!}
        </div>
        <div class="mob-social-cont">
            {!! HTML::image('img/social-icons/gplus-icon-hover.svgz') !!}
        </div>
        <div class="mob-social-cont">
            {!! HTML::image('img/social-icons/twitter-icon-hover.svgz') !!}
        </div>
        <div class="mob-social-cont">
            {!! HTML::image('img/social-icons/in-icon-hover.svgz') !!}
        </div>
    </div>
</div>