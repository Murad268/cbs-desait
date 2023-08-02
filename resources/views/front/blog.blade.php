@extends('front.front')
@section('title', 'blog')
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
               <img src="https://images.ctfassets.net/pdf29us7flmy/4JU61ygq6O2SH7JFL4Kmwq/a414c63b49c1a13656cbde5f66597c55/shutterstock_1073291759_optimized__1_.jpeg?w=720&q=100&fm=jpg" alt="">
            </div>
            <div class="blog__img__bottom">
               <div class="blog__img__bottom__left">
                  <div class="blog__img__bottom__category">
                     Insight
                  </div>
                  <div class="blog__img__bottom__circle"></div>
                  <div class="blog__img__bottom__date">
                     9 December 2020
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
         </div>
      </section>

      <section class="blog__main">
         <div class="container">
            <div class="section__title">
               Lightspeed Broadband appoints Code as digital partner
            </div>

            <div class="blog__main__content section__desc">
               New ISP challenger brand Lightspeed Broadband has partnered with Code to develop a full digital identity and suite of digital products as the business embarks on an ambitious roll out of its full-fibre gigabit broadband services.
               <br>
               <br>
               Lightspeed aims to bring full-fibre optic connections directly to 100,000 homes and businesses across the East of England by 2022, and has already deployed over one hundred engineers to start building the network in ten towns across the region, with ambitions to expand and reach 1 million homes by 2025.
               <br>
               <br>
               Code’s remit is to create a digital infrastructure and strategy, develop the digital brand and marketing website, as well as create a customer portal design and interface.
               <br>
               We’ll also work with Lightspeed to devise a customer experience across SalesForce and other connected technologies, creating a unified customer experience and provide ongoing technical and future direction strategy for the internet service provider.
               <br>
               <br>
               Steve Haines, CEO of Lightspeed Broadband, said: “Our website and digital capabilities need to be as slick, fast and reliable as the broadband that we are delivering into people’s homes and businesses. We’re happy to be working with Code and are confident that they are the partner to make that happen.
               <br>
               <br>
               “Their expertise, insight and understanding of what is required to create an unrivalled digital experience will help support our plans to reach 100,000 homes and businesses across the East of England by 2022.
               <br>
               <br>
               “Collaborating with communities and local authorities, we started the roll out of our full fibre broadband to ten towns across South Lincolnshire and West Norfolk in April.”
               <br>
               <br>
               Rob Jones, Managing Director at Code said: “High speed, reliable broadband has become even more important to our lives over the past year or so as we appreciate the importance of connectivity – this is only set to grow further. Lightspeed is focused on making a difference in communities that are currently being underserved by the existing infrastructure and have investment and a hugely experienced senior team to help them reach their ambitious targets.
               <br>
               <br>
               “We are excited to play a role in this journey. As a new to the market challenger brand, there is huge potential to create a cut-through digital experience that will rival, and exceed, that of the existing big players.
               <br>
               <br>
               ”For Lightspeed, we will be implementing a full suite of services – from design and UX through to technical strategy. We will be creating a unified customer experience which will include a customer portal and interface design.”
            </div>
         </div>
      </section>


      <section class="portfolio recentPosts">
         <div class="container">
            <div class="services__top">
               <div class="section__title">Recent Posts</div>
            </div>
            <div class="portfolio__wrapper recentPosts__slider">
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

         </div>
      </section>


   </main>



@endsection
