@extends('front.front')
@section('title', 'service')
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
                <div class="section__desc"><span>XİDMƏTLƏRİMİZ</span> <i class="fa fa-angle-right" aria-hidden="true"></i> <span>{{$service->name}}</span></div>
                <div class="main__title">{{$service->name}}</div>
            </div>
        </div>
    </section>
</main>

<section class="service">
    <div class="container">
        {!! $service->about_service !!}
        <div class="service__bottom">
            <div class="service__bottom__accerdeon">
                @foreach($service->services as $item)
                <div class="service__bottom__accerdeon__main">
                    <span><i class="fa-solid fa-angle-down"></i></span> <span>{{$item->name}}</span>
                </div>
                <div class="service__bottom__accerdeon__content section__desc">
                    {!! $item->about_service !!}
                </div>
                @endforeach
            </div>
            <div class="service__bottom__contact">
                <div class="main__title">SEO üçün başlıq</div>
                <form class="contact__form">
                    <div>
                        <label for="">Ad / Şirkət</label>
                        <input type="text">
                    </div>
                    <div>
                        <label for="">Ad / Şirkət </label>
                        <input type="text">
                    </div>
                    <div>
                        <label for="">Vebsayt URL</label>
                        <input type="text">
                    </div>
                    <button class="btn_withBg">müracİət et</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
