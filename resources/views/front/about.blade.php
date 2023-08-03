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
                <img src="{{asset('assets/front/images/'.$about->about_img)}}" alt="">
            </div>
            <div class="digital__desc">
                <div class="digital__desc__title">
                    BİZİ DAHA YAXINDAN TANIYIN
                </div>
                <div class="section__title">{{$about->about_top}}</div>
                <div class="section__desc">
                    {{$about->about_title}}
                    <br>
                    {!! $about->about_text !!}
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
                        {{$teamText->section__desc}}
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
</main>
@endsection
