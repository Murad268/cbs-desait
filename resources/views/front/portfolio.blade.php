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
                  Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. Far
                  far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
                  blind texts.
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
@endsection
