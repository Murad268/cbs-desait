<footer class="footer">
    <div class="container">
        <div class="footer__wrapper">
            <ul>
                <li class="footer__logo">
                    <a href="">
                        <img src="{{asset('assets/front/icons/'.$settings->logo)}}" alt="">
                    </a>
                </li>

                <li>
                    <ul class="header__top__right__links">
                        <li><a href="{{$settings->wp_link}}"><i class="fa-brands fa-whatsapp"></i></a></li>
                        <li><a href="{{$settings->insta_link}}"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="{{$settings->fb_link}}"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="{{$settings->linkedin_link}}"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    </ul>
                </li>
                <li class="footer__div">
                    © 2021 - Corporative Business Solutions.
                </li>
            </ul>

            <ul class="footer__categories">
                <li class="footer__categories__title">SƏHİFƏLƏR</li>
                <li><a href="{{route('front.index')}}">Əsas Səhifə</a></li>
                <li><a href="{{route('front.about')}}">Haqqımızda</a></li>
                <li><a href="{{route('front.portfolio')}}">İşlərimiz</a></li>
                <li><a href="{{route('front.blogs')}}">Bloq</a></li>
                <li><a href="{{route('front.contact')}}">Əlaqə</a></li>
            </ul>
            <ul class="footer__categories">
                <li class="footer__categories__title">RƏQƏMSAL</li>
                @foreach($services as $service)
                <li><a href="{{$service->slug}}">{{$service->name}}</a></li>
                @endforeach
            </ul>
            <ul class="footer__categories">
                <li class="footer__categories__title">{{$lastService->name}}</li>
                @foreach($lastService->services as $item)
                    <li><a href="{{route('front.service', $item->slug)}}">{{$item->name}}</a></li>
                @endforeach

            </ul>
            <ul class="footer__contacts">
                <li class="footer__categories__title">ƏLAQƏ</li>
                <li>
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span>{{$settings->location}}</span>
                </li>
                <li>
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span>{{$settings->phone_number}}</span>
                </li>
                <li>
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span>{{$settings->email}}</span>
                </li>
            </ul>
        </div>
    </div>
</footer>
