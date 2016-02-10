<footer>
    <div class="footer-logo-cont">
        <a href="#">{!! HTML::image('img/logo-footer.svgz', 'logo footer', array('class' => 'footer-logo')) !!}</a>
    </div>
    {!! HTML::image('img/line.png', 'line', array('class' => 'seperator wide-seperator mob-visible mb13')) !!}

    <div class="social-likes">

    </div>
    <div class="footer-flex">
        {!! HTML::image('img/line.png', 'line', array('class' => 'seperator wide-seperator mob-visible mb13')) !!}
        <div class="footer-block footer-menu">
            <ul class="footer-list">
                <li>{!! trans('footer.about-us') !!}</li>
                <li><a href="{{ url(trans('routes.seo')) }}">{!! trans('footer.seo') !!}</a></li>
                <li><a href="{{ url(trans('routes.programming')) }}">{!! trans('footer.programming') !!}</a></li>
                <li><a href="{{ url(trans('routes.design')) }}">{!! trans('footer.design') !!}</a></li>
                <li><a href="{{ url(trans('routes.services')) }}">{!! trans('footer.services') !!}</a></li>
                <li><a href="{{ url(trans('routes.contacts')) }}">{!! trans('footer.contacts') !!}</a></li>
            </ul>
        </div>
        {!! HTML::image('img/line.png', 'line', array('class' => 'seperator wide-seperator mob-visible mb13 footer-menu-sep')) !!}
        <div class="footer-block">
            <ul class="footer-list">
                <li>{!! trans('footer.contacts-details') !!}</li>
                <li>{!! trans('contacts.email-address') !!}</li>
                <li>{!! trans('footer.city') !!}</li>
                <li>{!! trans('contacts.phone-number') !!}</li>
            </ul>
        </div>
        {!! HTML::image('img/line.png', 'line', array('class' => 'seperator wide-seperator mob-visible mb13 on500')) !!}
        <div class="footer-block">
            <ul class="footer-list with-icons">
                <li>{!! trans('footer.find-us') !!}</li>
                <li class="facebook"><a href="{!! env('FACEBOOK') !!}">Facebook</a></li>
                <li class="googleplus"><a href="{!! env('GOOGLEPLUS') !!}">Google+</a></li>
                <li class="twitter"><a href="{!! env('TWITTER') !!}">Twitter</a></li>
                <li class="linkedin"><a href="{!! env('LINKEDIN') !!}">LinkedIn</a></li>
            </ul>
        </div>
        {!! HTML::image('img/line.png', 'line', array('class' => 'seperator wide-seperator mob-visible mb13')) !!}
        <div class="footer-block">
            <ul class="footer-list footer-tags">
                {!! trans('footer.services-list') !!}
            </ul>
        </div>
        {!! HTML::image('img/line.png', 'line', array('class' => 'seperator wide-seperator mob-visible')) !!}
        <div class="footer-block">
            <ul class="footer-list footer-tags mb13">
                <li>©{{ date('Y') }} Pixsens LTD</li>
            </ul>
        </div>
    </div>
</footer>