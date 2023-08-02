@extends('front.front')
@section('title', 'about')
@section('inlines')
<style>
    .footer {
        margin-top: 30px;

    }

    body {
        padding-top: 90px;
    }
</style>
@endsection
@section('content')
<main class="main__main">
    <section class="still">
        <div class="container">
            <div class="still__body">
                <div class="section__desc">HAQQIMIZDA</div>
                <div class="main__title">Bizi daha yaxından tanıyın</div>
            </div>
        </div>
    </section>

    <section class="digital">
        <div class="digital__wrapper">
            <div class="digital__image">
                <img src="{{asset('assets/front/images/about.png')}}" alt="">
            </div>
            <div class="digital__desc">
                <div class="digital__desc__title">
                    BİZİ DAHA YAXINDAN TANIYIN
                </div>
                <div class="section__title">Rəqəmsal həllər ilə hər zaman yanınızdayıq</div>
                <div class="section__desc">
                    Kreativ(bacarıqlı) komandamız və strateji həllərimiz 6 illik fəaliyyət müddətində onlarla tərəfdaşımızın inkişafına, satışlarının artımına və tanınmasına səbəbdir!
                    <br>
                    Tərəfdaşlarımızın inkişafını növbəti səviyyəyə qaldırmaq üçün uzunmüddətli təcrübəmizə əsaslanaraq dizayn, marketinq və biznes problemlərinin öhdəsindən gəlməyi sevirik!
                </div>
                <div class="btn__withoutBg">
                    BİZDƏN GÖRÜŞ AL
                </div>
            </div>
        </div>

    </section>


    <section class="our__team">
        <div class="container">
            <div class="services__top">
                <div class="section__title">Komandamız</div>
                <div>
                    <div class="section__desc">
                        Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. Far
                        far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
                        blind texts.
                    </div>

                </div>
            </div>
            <div class="our__team__main">
                <div class="our__team__wrapper">
                    <div class="our__team__column">
                        <div class="our__team__column__img">
                            <img src="{{asset('assets/front/images/image_team.png')}}" alt="">
                        </div>
                        <div class="our__team__column__name">
                            Musa C.
                        </div>
                        <div class="our__team__column__position">
                            CEO, Partner
                        </div>
                    </div>
                    <div class="our__team__column">
                        <div class="our__team__column__img">
                            <img src="{{asset('assets/front/images/image_team.png')}}" alt="">
                        </div>
                        <div class="our__team__column__name">
                            Musa C.
                        </div>
                        <div class="our__team__column__position">
                            CEO, Partner
                        </div>
                    </div>
                    <div class="our__team__column">
                        <div class="our__team__column__img">
                            <img src="{{asset('assets/front/images/image_team.png')}}" alt="">
                        </div>
                        <div class="our__team__column__name">
                            Musa C.
                        </div>
                        <div class="our__team__column__position">
                            CEO, Partner
                        </div>
                    </div>
                    <div class="our__team__column">
                        <div class="our__team__column__img">
                            <img src="{{asset('assets/front/images/image_team.png')}}" alt="">
                        </div>
                        <div class="our__team__column__name">
                            Musa C.
                        </div>
                        <div class="our__team__column__position">
                            CEO, Partner
                        </div>
                    </div>
                    <div class="our__team__column">
                        <div class="our__team__column__img">
                            <img src="{{asset('assets/front/images/image_team.png')}}" alt="">
                        </div>
                        <div class="our__team__column__name">
                            Musa C.
                        </div>
                        <div class="our__team__column__position">
                            CEO, Partner
                        </div>
                    </div>
                    <div class="our__team__column">
                        <div class="our__team__column__img">
                            <img src="{{asset('assets/front/images/image_team.png')}}" alt="">
                        </div>
                        <div class="our__team__column__name">
                            Musa C.
                        </div>
                        <div class="our__team__column__position">
                            CEO, Partner
                        </div>
                    </div>
                </div>
                <div class="prev-button"><i class="fa-solid fa-angle-left"></i></div>
                <div class="next-button"><i class="fa-solid fa-angle-right"></i></div>
            </div>

        </div>
    </section>
</main>
@endsection
