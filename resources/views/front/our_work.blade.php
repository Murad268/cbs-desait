@extends('front.front')
@section('title', $work->portfolio_item_title)
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
                <div class="section__desc"><span>PORTFOLIO</span> <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span>{{$work->portfolio_item_title}}</span>
                </div>
                <div class="main__title">Our works</div>
            </div>
        </div>
    </section>

    <section class="ourworks">
        <div class="container">
            <div class="ourworks__title">LAYİHƏ ADI</div>
            <div class="section__title">{{$work->portfolio_item_title}}
            </div>
            <div style="height: 400px;" class="ourworks__header">
                <img style="width: 100%; height: 100%; object-fit: cover" src="{{asset('assets/front/images/'.$work->banner_img)}}" alt="">
            </div>
    </section>



    <section class="about__ourworks">
        <div class="container">
            <div class="about__ourworks__wrapper">
                <div class="about__ourworks__left">
                    <div class="ourworks__title">HAQQINDA</div>
                    <div class="section__desc">
                        {!!$work->about_portfolio_item !!}
                    </div>
                </div>
                <div class="about__ourworks__right">
                    <div class="ourworks__title">ROLLARIMIZ</div>
                    <div class="section__desc">
                        <ul>
                            @foreach($work->services as $item)
                            <li>{{$item->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="ourworks ourworks__second">
        <div  class="ourworks__header">
            <img style="width: 100%; height: 100%; object-fit: cover" src="{{asset('assets/front/images/'.$work->banner_img)}}" alt="">
        </div>

    </section>
    <section class="our__team ourteam-main">
        <div class="container">

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
