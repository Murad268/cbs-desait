@extends('front.front')
@section('title', 'home page')
@section('inlines')
<style>
    input,
    textarea {
        padding-left: 10px;
    }

    textarea {
        padding-top: 10px;
    }
</style>
@endsection
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
                @foreach($services as $service)
                <a href="" class="services__service">
                    <div class="services__service__icon">
                        <img src="{{asset('assets/front/icons/'.$service->services_item_icons)}}" alt="">
                    </div>
                    <div class="card__title">
                        {{$service->name}}
                    </div>
                    <div class="services__service__desc">
                        {!!mb_strlen($service->about_service) > 93 ? mb_substr($service->about_service, 0, 93).'...' : $service->about_service!!}
                    </div>
                </a>
                @endforeach
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
                <a style="cursor: pointer" data-id="0">HAMISI</a>
                @foreach($pFilter as $filter)
                <a style="cursor: pointer" data-id="{{$filter->id}}">{{$filter->filter_name}}</a>
                @endforeach
            </div>
            <div class="portfolio__wrapper">
                @foreach($portfolio as $item)
                <a href="{{route('front.our__work', $item->id)}}" class="portfolio__item">
                    <div class="portfolio__item__img">
                        <img src="{{asset('assets/front/images/'.$item->portfolio_item_img)}}" alt="">
                    </div>
                    <div class="portfolio__item__category">{{$item->filter->filter_name}}</div>
                    <div class="portfolio__item__name">{{$item->portfolio_item_title}}</div>
                </a>
                @endforeach
            </div>
            <a href="{{route('front.portfolio')}}" class="btn__withoutBg">
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
                        @foreach($comments as $comment)
                        <div class="us_chosen__slider__top__slide">
                            <div class="us_chosen__slider__top__slide__quote1">
                                <img src="{{asset('assets/front/icons/format_quote1.svg')}}" alt="">
                            </div>
                            <div class="us_chosen__slider__top__slide__quote2">
                                <img src="{{asset('assets/front/icons/format_quote.svg')}}" alt="">
                            </div>
                            <span>{{$comment->chose_us_comment}}</span>
                        </div>
                        @endforeach
                    </div>
                    <div class="us_chosen__slider__bottom">
                        @foreach($comments as $comment)
                        <div class="us_chosen__slider__bottom__slide">
                            <div class="us_chosen__slider__bottom__slide__img">
                                <img src="{{asset('assets/front/images/'.$comment->chose_us_img)}}" alt="">
                            </div>
                            <div class="us_chosen__slider__bottom__slide__name">
                                {{$comment->chose_us_name}}
                            </div>
                            <div class="us_chosen__slider__bottom__slide__position">
                                {{$comment->chose_us_position}}
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>
                <div class="us_chosen__icons">
                    <div class="us_chosen__icons__wrapper">
                        @foreach($companies as $company)
                        <div class="us_chosen__icon">
                            <img src="{{asset('assets/front/icons/'.$company->company_img)}}" alt="">
                        </div>
                        @endforeach
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
                @php
                $num = 1
                @endphp
                @foreach($proccessess as $proccess)
                <div class="process__card">
                    <div class="process__card__img">
                        <img src="{{asset('assets/front/icons/'.$proccess->proccess_icon)}}" alt="">
                    </div>
                    <div class="card__title">
                        {{$num}}. {{$proccess->proccess_title}}
                    </div>
                    <div class="section__desc">
                        Layihə barədə müzakirə və müştəri istəklərinin müəyyən edilməsi
                    </div>
                </div>
                @php
                $num++
                @endphp
                @endforeach
            </div>
        </div>
    </section>

    <section class="still">
        <div class="container">
            <div class="still__body">
                <div class="main__title">{{$still->still_title}}</div>
                <div class="section__desc">{!! $still->still_description !!}</div>
                <a href="{{route('front.contact')}}" class="btn_withBg">
                    Let’s Talk
                </a>
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
                    @foreach($team as $item)
                    <div class="our__team__column">
                        <div class="our__team__column__img">
                            <img src="{{asset('assets/front/images/'.$item->employer_avatar)}}" alt="">
                        </div>
                        <div class="our__team__column__name">
                            {{$item->employer_name}}
                        </div>
                        <div class="our__team__column__position">
                            {{$item->position->position_name}}
                        </div>
                    </div>
                    @endforeach
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
                    <div class="section__title">{{$formTexts->form_title}}</div>
                    <div class="contact__body">
                        {!! $formTexts->form_subtitle !!}
                    </div>
                    <div class="contact__footer">
                        <div class="contact__footer__adress">
                            <strong>ADDRESS:</strong>
                            <div>
                                {{$settings->location}}
                            </div>
                        </div>
                        <div class="contact__footer__phone">
                            <strong>ƏLAQƏ:</strong>
                            <div>
                                {{$settings->eamil}}
                            </div>
                            <div>
                                {{$settings->phone_number}}
                            </div>
                        </div>
                    </div>
                    <div class="header__top__right__links">
                        <ul>
                            <li><a href="{{$settings->wp_link}}"><i class="fa-brands fa-whatsapp"></i></a></li>
                            <li><a href="{{$settings->insta_link}}"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="{{$settings->fb_link}}"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="{{$settings->linkedin_link}}"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <form method="post" action="{{route('mail')}}" class="contact__form">
                    @csrf
                    <div>
                        <label for="">Ad / Şirkət</label>
                        <input value="{{old('contact_name')}}" name="contact_name" type="text">
                        @error('contact_name')
                            <div class="alert alert-danger mt-2" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="">Telefon nömrəsi </label>
                        <input value="{{old('contact_phone')}}" name="contact_phone" type="text">
                        @error('contact_phone')
                            <div class="alert alert-danger mt-2" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="">E-mail</label>
                        <input value="{{old('contact_email')}}" name="contact_email" type="text">
                        @error('contact_email')
                            <div class="alert alert-danger mt-2" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="">Mesajınız</label>
                        <textarea name="contact_message">{{old('contact_message')}}</textarea>
                        @error('contact_message')
                            <div class="alert alert-danger mt-2" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <button class="btn_withBg">göndər</button>
                </form>
            </div>
        </div>
    </section>
</main>
@endsection
