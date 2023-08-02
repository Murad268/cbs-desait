<nav class="header__navbar">
    <div class="container">
        <div class="header__navbar__wrapper">
            <a href="" class="header__navbar__logo active">
                <img src="{{asset('assets/front/icons/'.$settings->logo)}}" alt="">
            </a>
            <ul class="header__navbar__list">
                <li><a href="{{route('front.index')}}">Əsas Səhifə</a></li>
                <li><a href="{{route('front.about')}}">Haqqımızda</a></li>
                <li class="our__services"><span>Xidmətlərimiz</span><i class="fa fa-angle-down nav__down" aria-hidden="true"></i></li>
                <li><a href="{{route('front.portfolio')}}">Portfolio</a></li>
                <li><a href="{{route('front.blogs')}}">Bloq</a></li>
            </ul>
            <a href="" class="btn__withoutBg">BİZDƏN GÖRÜŞ AL</a>
            <div class="header__hamburger">
                <span></span><span></span><span></span>
            </div>
        </div>
    </div>
</nav>
<x-header-services-component/>
