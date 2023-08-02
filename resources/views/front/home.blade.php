@extends('front.front')
@section('title', 'home page')
@section('content')
<main class="main__main">
    <section class="banner">
        <div class="banner__sliders">
            @foreach($headerBanner as $item)
            <div class="banner__slider">
                <img src="{{asset('assets/front/images/'.$item->banner_img)}}" alt="">
                <div class="banner__slider__body">
                    <div class="main__title">{{$item->banner__title}}</div>
                    <div class="section__desc">{{$item->banner_subtitle}}
                    </div>
                    <div class="banner__slider__body__btns">
                        <a href="#services" class="btn_withBg">
                            XİDMƏTLƏRİMİZ
                        </a>
                        <a href="{{route('front.portfolio')}}" class="btn__withoutBg">Portfolio</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </section>
    <section id="services" class="services">
        <div class="container">
            <div class="services__top">
                <div class="section__title">Xidmətlərimiz</div>
                <div>
                    <div class="section__desc">
                        {{$descriptions[0]->section__desc}}
                    </div>
                    <a class="btn__withoutBg">Bİzİmlə əlaqə</a>
                </div>
            </div>
            <div class="services__wrapper">
                <div class="services__service">
                    <div class="services__service__icon">
                        <img src="{{asset('assets/front/icons/smm.svg')}}" alt="">
                    </div>
                    <div class="card__title">
                        SEO
                    </div>
                    <div class="services__service__desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod massa neque duis sit in.
                    </div>
                </div>
                <div class="services__service">
                    <div class="services__service__icon">
                        <img src="{{asset('assets/front/icons/smm.svg')}}" alt="">
                    </div>
                    <div class="card__title">
                        SEO
                    </div>
                    <div class="services__service__desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod massa neque duis sit in.
                    </div>
                </div>
                <div class="services__service">
                    <div class="services__service__icon">
                        <img src="{{asset('assets/front/icons/smm.svg')}}" alt="">
                    </div>
                    <div class="card__title">
                        SEO
                    </div>
                    <div class="services__service__desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod massa neque duis sit in.
                    </div>
                </div>
                <div class="services__service">
                    <div class="services__service__icon">
                        <img src="{{asset('assets/front/icons/smm.svg')}}" alt="">
                    </div>
                    <div class="card__title">
                        SEO
                    </div>
                    <div class="services__service__desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod massa neque duis sit in.
                    </div>
                </div>
                <div class="services__service">
                    <div class="services__service__icon">
                        <img src="{{asset('assets/front/icons/smm.svg')}}" alt="">
                    </div>
                    <div class="card__title">
                        SEO
                    </div>
                    <div class="services__service__desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod massa neque duis sit in.
                    </div>
                </div>
                <div class="services__service">
                    <div class="services__service__icon">
                        <img src="{{asset('assets/front/icons/smm.svg')}}" alt="">
                    </div>
                    <div class="card__title">
                        SEO
                    </div>
                    <div class="services__service__desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod massa neque duis sit in.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="portfolio">
        <div class="container">
            <div class="services__top">
                <div class="section__title">Portfoliomuz</div>
                <div>
                    <div class="section__desc">
                    {{$descriptions[1]->section__desc}}
                    </div>

                </div>
            </div>
            <div class="portfolio__filter">
                <a href="">HAMISI</a>
                <a href="">bİznes həllərİ</a>
                <a href="">rəqəmsal marketİnq</a>
                <a href="">veb layİhələr</a>
                <a href="">qablaşdırma</a>
                <a href="">VİDEO</a>
                <a href="">DİZAYN</a>
            </div>
            <div class="portfolio__wrapper">
                <div class="portfolio__item">
                    <div class="portfolio__item__img">
                        <img src="{{asset('assets/front/images/imagecard.png')}}" alt="">
                    </div>
                    <div class="portfolio__item__category">Dizayn</div>
                    <div class="portfolio__item__name">Mercury ERP Brendbook</div>
                </div>
                <div class="portfolio__item">
                    <div class="portfolio__item__img">
                        <img src="{{asset('assets/front/images/imagecard.png')}}" alt="">
                    </div>
                    <div class="portfolio__item__category">Dizayn</div>
                    <div class="portfolio__item__name">Mercury ERP Brendbook</div>
                </div>
                <div class="portfolio__item">
                    <div class="portfolio__item__img">
                        <img src="{{asset('assets/front/images/imagecard.png')}}" alt="">
                    </div>
                    <div class="portfolio__item__category">Dizayn</div>
                    <div class="portfolio__item__name">Mercury ERP Brendbook</div>
                </div>
                <div class="portfolio__item">
                    <div class="portfolio__item__img">
                        <img src="{{asset('assets/front/images/imagecard.png')}}" alt="">
                    </div>
                    <div class="portfolio__item__category">Dizayn</div>
                    <div class="portfolio__item__name">Mercury ERP Brendbook</div>
                </div>
                <div class="portfolio__item">
                    <div class="portfolio__item__img">
                        <img src="{{asset('assets/front/images/imagecard.png')}}" alt="">
                    </div>
                    <div class="portfolio__item__category">Dizayn</div>
                    <div class="portfolio__item__name">Mercury ERP Brendbook</div>
                </div>
                <div class="portfolio__item">
                    <div class="portfolio__item__img">
                        <img src="{{asset('assets/front/images/imagecard.png')}}" alt="">
                    </div>
                    <div class="portfolio__item__category">Dizayn</div>
                    <div class="portfolio__item__name">Mercury ERP Brendbook</div>
                </div>
                <div class="portfolio__item">
                    <div class="portfolio__item__img">
                        <img src="{{asset('assets/front/images/imagecard.png')}}" alt="">
                    </div>
                    <div class="portfolio__item__category">Dizayn</div>
                    <div class="portfolio__item__name">Mercury ERP Brendbook</div>
                </div>
                <div class="portfolio__item">
                    <div class="portfolio__item__img">
                        <img src="{{asset('assets/front/images/imagecard.png')}}" alt="">
                    </div>
                    <div class="portfolio__item__category">Dizayn</div>
                    <div class="portfolio__item__name">Mercury ERP Brendbook</div>
                </div>
            </div>
            <a href="" class="btn__withoutBg">
                HAMISINA BAX
            </a>
        </div>
    </section>



    <section class="us_chosen">
        <div class="container">
            <div class="services__top">
                <div class="section__title">Bizi Seçənlər</div>
                <div>
                    <div class="section__desc">
                    {{$descriptions[2]->section__desc}}
                    </div>
                </div>
            </div>
            <div class="us_chosen__wrapper">
                <div class="us_chosen__slider">
                    <div class="us_chosen__slider__top">
                        <div class="us_chosen__slider__top__slide">
                            <div class="us_chosen__slider__top__slide__quote1">
                                <img src="{{asset('assets/front/icons/format_quote1.svg')}}" alt="">
                            </div>
                            <div class="us_chosen__slider__top__slide__quote2">
                                <img src="{{asset('assets/front/icons/format_quote.svg')}}" alt="">
                            </div>
                            <span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's1</span>
                        </div>
                        <div class="us_chosen__slider__top__slide">
                            <div class="us_chosen__slider__top__slide__quote1">
                                <img src="{{asset('assets/front/icons/format_quote1.svg')}}" alt="">
                            </div>
                            <div class="us_chosen__slider__top__slide__quote2">
                                <img src="{{asset('assets/front/icons/format_quote.svg')}}" alt="">
                            </div>
                            <span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's2</span>
                        </div>
                        <div class="us_chosen__slider__top__slide">
                            <div class="us_chosen__slider__top__slide__quote1">
                                <img src="{{asset('assets/front/icons/format_quote1.svg')}}" alt="">
                            </div>
                            <div class="us_chosen__slider__top__slide__quote2">
                                <img src="{{asset('assets/front/icons/format_quote.svg')}}" alt="">
                            </div>
                            <span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's3</span>
                        </div>
                        <div class="us_chosen__slider__top__slide">
                            <div class="us_chosen__slider__top__slide__quote1">
                                <img src="{{asset('assets/front/icons/format_quote1.svg')}}" alt="">
                            </div>
                            <div class="us_chosen__slider__top__slide__quote2">
                                <img src="{{asset('assets/front/icons/format_quote.svg')}}" alt="">
                            </div>
                            <span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's4</span>
                        </div>
                        <div class="us_chosen__slider__top__slide">
                            <div class="us_chosen__slider__top__slide__quote1">
                                <img src="{{asset('assets/front/icons/format_quote1.svg')}}" alt="">
                            </div>
                            <div class="us_chosen__slider__top__slide__quote2">
                                <img src="{{asset('assets/front/icons/format_quote.svg')}}" alt="">
                            </div>
                            <span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's5</span>
                        </div>
                        <div class="us_chosen__slider__top__slide">
                            <div class="us_chosen__slider__top__slide__quote1">
                                <img src="{{asset('assets/front/icons/format_quote1.svg')}}" alt="">
                            </div>
                            <div class="us_chosen__slider__top__slide__quote2">
                                <img src="{{asset('assets/front/icons/format_quote.svg')}}" alt="">
                            </div>
                            <span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's6</span>
                        </div>
                    </div>
                    <div class="us_chosen__slider__bottom">
                        <div class="us_chosen__slider__bottom__slide">
                            <div class="us_chosen__slider__bottom__slide__img">
                                <img src="{{asset('assets/front/images/man.png')}}" alt="">
                            </div>
                            <div class="us_chosen__slider__bottom__slide__name">
                                Ayxan Rəcəbov1
                            </div>
                            <div class="us_chosen__slider__bottom__slide__position">
                                CEO of Zenbil
                            </div>
                        </div>
                        <div class="us_chosen__slider__bottom__slide">
                            <div class="us_chosen__slider__bottom__slide__img">
                                <img src="{{asset('assets/front/images/man.png')}}" alt="">
                            </div>
                            <div class="us_chosen__slider__bottom__slide__name">
                                Ayxan Rəcəbov2
                            </div>
                            <div class="us_chosen__slider__bottom__slide__position">
                                CEO of Zenbil
                            </div>
                        </div>
                        <div class="us_chosen__slider__bottom__slide">
                            <div class="us_chosen__slider__bottom__slide__img">
                                <img src="{{asset('assets/front/images/man.png')}}" alt="">
                            </div>
                            <div class="us_chosen__slider__bottom__slide__name">
                                Ayxan Rəcəbov3
                            </div>
                            <div class="us_chosen__slider__bottom__slide__position">
                                CEO of Zenbil
                            </div>
                        </div>
                        <div class="us_chosen__slider__bottom__slide">
                            <div class="us_chosen__slider__bottom__slide__img">
                                <img src="{{asset('assets/front/images/man.png')}}" alt="">
                            </div>
                            <div class="us_chosen__slider__bottom__slide__name">
                                Ayxan Rəcəbov4
                            </div>
                            <div class="us_chosen__slider__bottom__slide__position">
                                CEO of Zenbil
                            </div>
                        </div>
                        <div class="us_chosen__slider__bottom__slide">
                            <div class="us_chosen__slider__bottom__slide__img">
                                <img src="{{asset('assets/front/images/man.png')}}" alt="">
                            </div>
                            <div class="us_chosen__slider__bottom__slide__name">
                                Ayxan Rəcəbov5
                            </div>
                            <div class="us_chosen__slider__bottom__slide__position">
                                CEO of Zenbil
                            </div>
                        </div>
                        <div class="us_chosen__slider__bottom__slide">
                            <div class="us_chosen__slider__bottom__slide__img">
                                <img src="{{asset('assets/front/images/man.png')}}" alt="">
                            </div>
                            <div class="us_chosen__slider__bottom__slide__name">
                                Ayxan Rəcəbov6
                            </div>
                            <div class="us_chosen__slider__bottom__slide__position">
                                CEO of Zenbil
                            </div>
                        </div>
                    </div>
                </div>
                <div class="us_chosen__icons">
                    <div class="us_chosen__icons__wrapper">
                        <div class="us_chosen__icon">
                            <img src="{{asset('assets/front/icons/logo 1.svg')}}" alt="">
                        </div>
                        <div class="us_chosen__icon">
                            <img src="{{asset('assets/front/icons/logo 1.svg')}}" alt="">
                        </div>
                        <div class="us_chosen__icon">
                            <img src="{{asset('assets/front/icons/logo 1.svg')}}" alt="">
                        </div>
                        <div class="us_chosen__icon">
                            <img src="{{asset('assets/front/icons/logo 1.svg')}}" alt="">
                        </div>
                        <div class="us_chosen__icon">
                            <img src="{{asset('assets/front/icons/logo 1.svg')}}" alt="">
                        </div>
                        <div class="us_chosen__icon">
                            <img src="{{asset('assets/front/icons/logo 1.svg')}}" alt="">
                        </div>
                        <div class="us_chosen__icon">
                            <img src="{{asset('assets/front/icons/logo 1.svg')}}" alt="">
                        </div>
                        <div class="us_chosen__icon">
                            <img src="{{asset('assets/front/icons/logo 1.svg')}}" alt="">
                        </div>
                        <div class="us_chosen__icon">
                            <img src="{{asset('assets/front/icons/logo 1.svg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="process">
        <div class="container">
            <div class="section__title">
                İş prosessimiz
            </div>
            <div class="process__wrapper">
                <div class="process__card">
                    <div class="process__card__img">
                        <img src="{{asset('assets/front/icons/smm.svg')}}" alt="">
                    </div>
                    <div class="card__title">
                        1. Müzakirə
                    </div>
                    <div class="section__desc">
                        Layihə barədə müzakirə və müştəri istəklərinin müəyyən edilməsi
                    </div>
                </div>
                <div class="process__card">
                    <div class="process__card__img">
                        <img src="{{asset('assets/front/icons/smm.svg')}}" alt="">
                    </div>
                    <div class="card__title">
                        1. Müzakirə
                    </div>
                    <div class="section__desc">
                        Layihə barədə müzakirə və müştəri istəklərinin müəyyən edilməsi
                    </div>
                </div>
                <div class="process__card">
                    <div class="process__card__img">
                        <img src="{{asset('assets/front/icons/smm.svg')}}" alt="">
                    </div>
                    <div class="card__title">
                        1. Müzakirə
                    </div>
                    <div class="section__desc">
                        Layihə barədə müzakirə və müştəri istəklərinin müəyyən edilməsi
                    </div>
                </div>
                <div class="process__card">
                    <div class="process__card__img">
                        <img src="{{asset('assets/front/icons/smm.svg')}}" alt="">
                    </div>
                    <div class="card__title">
                        1. Müzakirə
                    </div>
                    <div class="section__desc">
                        Layihə barədə müzakirə və müştəri istəklərinin müəyyən edilməsi
                    </div>
                </div>
                <div class="process__card">
                    <div class="process__card__img">
                        <img src="{{asset('assets/front/icons/smm.svg')}}" alt="">
                    </div>
                    <div class="card__title">
                        1. Müzakirə
                    </div>
                    <div class="section__desc">
                        Layihə barədə müzakirə və müştəri istəklərinin müəyyən edilməsi
                    </div>
                </div>
                <div class="process__card">
                    <div class="process__card__img">
                        <img src="{{asset('assets/front/icons/smm.svg')}}" alt="">
                    </div>
                    <div class="card__title">
                        1. Müzakirə
                    </div>
                    <div class="section__desc">
                        Layihə barədə müzakirə və müştəri istəklərinin müəyyən edilməsi
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="still">
        <div class="container">
            <div class="still__body">
                <div class="main__title">Hələ də axtarışdasınız?</div>
                <div class="section__desc">We’ve helped some of the UK’s most successful businesses with their digital
                    products. Knowing the right approach and then executing isn’t easy. Whatever your need, we’ll be happy to
                    give you the right advice and explore how we can best help.</div>
                <div class="btn_withBg">
                    Let’s Talk
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
                        {{$descriptions[3]->section__desc}}
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


    <section class="contact">
        <div class="container">
            <div class="contact__wrapper">
                <div class="contact__info">
                    <div class="section__title">Bizə yazmaqdan çəkinməyin</div>
                    <div class="contact__body">
                        Speak to our Business Director, Steve. With no salespeople, you always get to talk straight to one of
                        our discipline leaders.
                        Help us understand what you need by filling out the form and we’ll be in touch.
                    </div>
                    <div class="contact__footer">
                        <div class="contact__footer__adress">
                            <strong>ADDRESS:</strong>
                            <div>
                                Əhməd Rəcəbli küç, 56.
                            </div>
                        </div>
                        <div class="contact__footer__phone">
                            <strong>ƏLAQƏ:</strong>
                            <div>
                                info@crazyinnovations@gmail.com
                            </div>
                            <div>
                                +994-70-777-77-77
                            </div>
                        </div>
                    </div>
                    <div class="header__top__right__links">
                        <ul>
                            <li><a href=""><i class="fa-brands fa-whatsapp"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <form class="contact__form">
                    <div>
                        <label for="">Ad / Şirkət</label>
                        <input type="text">
                    </div>
                    <div>
                        <label for="">Telefon nömrəsi </label>
                        <input type="text">
                    </div>
                    <div>
                        <label for="">E-mail</label>
                        <input type="text">
                    </div>
                    <div>
                        <label for="">Mesajınız</label>
                        <textarea>

                     </textarea>
                    </div>
                    <button class="btn_withBg">göndər</button>
                </form>
            </div>
        </div>
    </section>
</main>
@endsection
