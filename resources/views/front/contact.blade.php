@extends('front.front')
@section('title', 'home page')
@section('content')
@section('inlines')
    <style>
        .main__main{
            margin-top: 150px;
        }
        .contact {
            margin-top: 60px;
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
    <section class="contact">
        <div class="container">
            <div class="contact__wrapper">
                <div class="contact__info">
                    <div class="section__title">{{$formTexts->form_title}}</div>
                    <div class="contact__body">
                        {!! $formTexts->form_subtitle !!}
                    </div>
                    <div class="contact__footer">
                        <div class="contact__footer__adress">
                            <strong>ADDRESS:</strong>
                            <div>
                                {{$settings->location}}
                            </div>
                        </div>
                        <div class="contact__footer__phone">
                            <strong>ƏLAQƏ:</strong>
                            <div>
                            {{$settings->eamil}}
                            </div>
                            <div>
                            {{$settings->phone_number}}
                            </div>
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
                <form class="contact__form">
                    <div>
                        <label for="">Ad / Şirkət</label>
                        <input type="text">
                    </div>
                    <div>
                        <label for="">Telefon nömrəsi </label>
                        <input type="text">
                    </div>
                    <div>
                        <label for="">E-mail</label>
                        <input type="text">
                    </div>
                    <div>
                        <label for="">Mesajınız</label>
                        <textarea>

                     </textarea>
                    </div>
                    <button class="btn_withBg">göndər</button>
                </form>
            </div>
        </div>
    </section>

@endsection
