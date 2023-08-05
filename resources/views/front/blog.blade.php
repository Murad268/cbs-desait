@extends('front.front')
@section('title', $blog->blog_title)
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
               <div class="section__desc"><span>BLOQ</span>
                 </div>
               <div class="main__title">Thoughts. Ideas. Opinion. News.</div>
            </div>
         </div>
      </section>


      <section class="blog">
         <div class="container">
            <div class="blog__img">
               <img src="{{asset('assets/front/images/'.$blog->card_img)}}" alt="">
            </div>
            <div class="blog__img__bottom">
               <div class="blog__img__bottom__left">
                  <div class="blog__img__bottom__category">
                    {{$blog->category->categoy_name}}
                  </div>
                  <div class="blog__img__bottom__circle"></div>
                  <div class="blog__img__bottom__date">
                    {{$blog->convertDate($blog->created_at)}}
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
         </div>
      </section>

      <section class="blog__main">
         <div class="container">
            <div class="section__title">
                {{$blog->blog_title}}
            </div>

            <div class="blog__main__content section__desc">
                {!! $blog->blog_content !!}
            </div>
         </div>
      </section>

    <div class="container">
    <div class="services__top mt-5">
        <div class="section__title">Recent Posts</div>
    </div>
    <div class="blogs__wrapper recent_blogs mb-5">
            @foreach($blogs as $blog)
                <a href="{{route('front.blog', $blog->slug)}}" class="blogs__blog">
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



   </main>



@endsection
