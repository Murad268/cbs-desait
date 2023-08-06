@extends('front.front')
@section('title', $service->name)
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
    <div class="services__contentMain">
            <div class="service__content1 section__desc">
                <!-- {{$service->about_service}} -->
                {!! explode('ZRJBuchHuimage@F!e$N3', $service->about_service)[0] !!}
            </div>
            <div class="service__img">
               <img src="{{asset('assets/front/images/'.$service->banner_image)}}" alt="">
            </div>
            <div class="service__content2 section__desc">
            <?php
                $aboutService = $service->about_service;
                $parts = explode('ZRJBuchHuimage@F!e$N3', $aboutService);
                $result = count($parts) > 1 ? $parts[1] : '';
                echo $result;
            ?>
            </div>
         </div>
        <div class="service__bottom">
            <div class="service__bottom__accerdeon">
                @if($service->service_id == 0)
                    @foreach($service->services as $item)
                        <div class="service__bottom__accerdeon__main">
                            <span><i class="fa-solid fa-angle-down"></i></span> <span>{{$item->name}}</span>
                        </div>
                        <div class="service__bottom__accerdeon__content section__desc">
                            {!! $item->about_service !!}
                        </div>
                    @endforeach
                @else
                    @foreach($lastService->services as $item)
                        <div class="service__bottom__accerdeon__main">
                            <span><i class="fa-solid fa-angle-down"></i></span> <span>{{$item->name}}</span>
                        </div>
                        <div class="service__bottom__accerdeon__content section__desc">
                            {!! $item->about_service !!}
                        </div>
                    @endforeach
                @endif

            </div>
            @if($service->slug!='diger-xidmetler' and $service->service_id == 0 )
            <div class="service__bottom__contact">
                <div class="main__title">{{$service->name}} üçün başlıq</div>
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
            @endif
        </div>
    </div>
</section>
@endsection
