@extends('front.front')
@section('title', 'blogs')
@section('inlines')
<style>
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
                <div class="section__desc">BLOQ</div>
                <div class="main__title">Thoughts. Ideas. Opinion. News.</div>
            </div>
        </div>
    </section>
</main>

<section class="blogs">
    <div class="container">
        <div class="blogs__wrapper">
            @foreach($blogs as $blog)
                <a href="{{route('front.blog', $blog->id)}}" class="blogs__blog">
                    <div class="blogs__blog__img">
                        <img src="{{asset('assets/front/images/'.$blog->card_img)}}" alt="">
                    </div>
                    <div class="blogs__blog__top">
                        <span class="blogs__blog__category">{{$blog->category->categoy_name}}</span>
                        <div class="circle"></div>
                        <span>{{$blog->convertDate($blog->created_at)}}</span>
                    </div>
                    <div class="blogs__blog__name">
                        {{$blog->blog_title}}
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
@endsection
