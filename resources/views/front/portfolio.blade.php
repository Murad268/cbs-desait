@extends('front.front')
@section('title', 'portfolio')
@section('inlines')
<style>
    .portfolio {
        padding-top: 84px;
    }

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
                <div class="section__desc">PORTFOLIO</div>
                <div class="main__title">Our Works</div>
            </div>
        </div>
    </section>
</main>



<section class="portfolio">
    <div class="container">
        <div class="services__top">
            <div class="section__title">Portfoliomuz</div>
            <div>
                <div class="section__desc">
                    {{$description->section__desc}}
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
        <a href="" class="btn__withoutBg">
            HAMISINA BAX
        </a>
    </div>
</section>
@endsection
