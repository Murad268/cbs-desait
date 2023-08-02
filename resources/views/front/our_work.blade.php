@extends('front.front')
@section('title', 'our work')
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
                    <span>Layihə adı</span>
                </div>
                <div class="main__title">Our works</div>
            </div>
        </div>
    </section>

    <section class="ourworks">
        <div class="container">
            <div class="ourworks__title">LAYİHƏ ADI</div>
            <div class="section__title">Product design for
                a customer experience platform
            </div>
            <div style="background-image: url('https://images.ctfassets.net/pdf29us7flmy/4JU61ygq6O2SH7JFL4Kmwq/a414c63b49c1a13656cbde5f66597c55/shutterstock_1073291759_optimized__1_.jpeg?w=720&q=100&fm=jpg');" class="ourworks__header">
                <div class="ourworks__header__body">
                    <div class="section__desc">
                        Her yerden giris imkani
                    </div>
                    <div class="main__title">
                        Biznesinizin inkisafi ucun her sey
                    </div>
                    <div class="section__desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo beatae, quis quasi impedit repellat
                        ducimus fugit totam quos
                    </div>
                    <div class="ourworks__header__body__btns">
                        <a href="" class="ourworks__header__body__btn first">
                            Haqqimizda
                        </a>
                        <a href="" class="ourworks__header__body__btn second">
                            Demo
                        </a>
                    </div>
                </div>
            </div>
    </section>



    <section class="about__ourworks">
        <div class="container">
            <div class="about__ourworks__wrapper">
                <div class="about__ourworks__left">
                    <div class="ourworks__title">LAYİHƏ ADI</div>
                    <div class="section__desc">
                        The original vision of TextMagic was to help companies connect with clients by sending text messages. But as their vision came true, the company started to expand to support more sophisticated communication capabilities.
                    </div>
                </div>
                <div class="about__ourworks__right">
                    <div class="ourworks__title">LAYİHƏ ADI</div>
                    <div class="section__desc">
                        The original vision of TextMagic was to help companies connect with clients by sending text messages. But as their vision came true, the company started to expand to support more sophisticated communication capabilities.
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="ourworks ourworks__second">
        <div style="background-image: url('https://images.ctfassets.net/pdf29us7flmy/4JU61ygq6O2SH7JFL4Kmwq/a414c63b49c1a13656cbde5f66597c55/shutterstock_1073291759_optimized__1_.jpeg?w=720&q=100&fm=jpg');" class="ourworks__header">
            <div class="ourworks__header__body ourworks__header__body__second">
                <div class="section__desc">
                    Her yerden giris imkani
                </div>
                <div class="main__title">
                    Biznesinizin inkisafi ucun her sey
                </div>
                <div class="section__desc">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo beatae, quis quasi impedit repellat
                    ducimus fugit totam quos
                </div>
                <div class="ourworks__header__body__btns">
                    <a href="" class="ourworks__header__body__btn first">
                        Haqqimizda
                    </a>
                    <a href="" class="ourworks__header__body__btn second">
                        Demo
                    </a>
                </div>
            </div>

    </section>
    <section class="our__team ourteam-main">
        <div class="container">

            <div class="our__team__main">
                <div class="our__team__wrapper">
                    <div class="our__team__column">
                        <div class="our__team__column__img">
                            <img src="{{asset('assets/front/images/image_team.png')}}" alt="">
                        </div>
                        <div class="our__team__column__name">
                            Musa C.
                        </div>
                        <div class="our__team__column__position">
                            CEO, Partner
                        </div>
                    </div>
                    <div class="our__team__column">
                        <div class="our__team__column__img">
                            <img src="{{asset('assets/front/images/image_team.png')}}" alt="">
                        </div>
                        <div class="our__team__column__name">
                            Musa C.
                        </div>
                        <div class="our__team__column__position">
                            CEO, Partner
                        </div>
                    </div>
                    <div class="our__team__column">
                        <div class="our__team__column__img">
                            <img src="{{asset('assets/front/images/image_team.png')}}" alt="">
                        </div>
                        <div class="our__team__column__name">
                            Musa C.
                        </div>
                        <div class="our__team__column__position">
                            CEO, Partner
                        </div>
                    </div>
                    <div class="our__team__column">
                        <div class="our__team__column__img">
                            <img src="{{asset('assets/front/images/image_team.png')}}" alt="">
                        </div>
                        <div class="our__team__column__name">
                            Musa C.
                        </div>
                        <div class="our__team__column__position">
                            CEO, Partner
                        </div>
                    </div>
                    <div class="our__team__column">
                        <div class="our__team__column__img">
                            <img src="{{asset('assets/front/images/image_team.png')}}" alt="">
                        </div>
                        <div class="our__team__column__name">
                            Musa C.
                        </div>
                        <div class="our__team__column__position">
                            CEO, Partner
                        </div>
                    </div>
                    <div class="our__team__column">
                        <div class="our__team__column__img">
                            <img src="{{asset('assets/front/images/image_team.png')}}" alt="">
                        </div>
                        <div class="our__team__column__name">
                            Musa C.
                        </div>
                        <div class="our__team__column__position">
                            CEO, Partner
                        </div>
                    </div>
                </div>
                <div class="prev-button"><i class="fa-solid fa-angle-left"></i></div>
                <div class="next-button"><i class="fa-solid fa-angle-right"></i></div>
            </div>

        </div>
    </section>
</main>
@endsection
