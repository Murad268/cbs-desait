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
                <div class="section__desc"><span>XİDMƏTLƏRİMİZ</span> <i class="fa fa-angle-right" aria-hidden="true"></i> <span>SEO</span></div>
                <div class="main__title">Build better digital experiences</div>
            </div>
        </div>
    </section>
</main>

<section class="service">
    <div class="container">
        <div class="service__title">SEO NƏDİR?</div>
        <div class="main__title">We Are Able to Provide Your Digital Needs</div>
        <div class="services__contentMain">
            <div class="service__content1 section__desc">
                <p>Search Engine Optimization vebsayt trafikinin keyfiyyət və göstəricilərini axtarış sistemlərində
                    artırmağa fokuslanmış Rəqəmsal Marketinq alətidir. vebsayta cəlb edilən izləyicilərin Bu nəticəni
                    vebsayt kontentini hər sahəyə müvafiq olaraq seçilmiş açar sözlərə əsasən formalaşdırmaqla, texniki
                    göstəriciləri axtarış sistemlərinin tələblərinə uyğunlaşdırmaqla və vebsaytın istər texniki, istərsə
                    də dizayn olaraq istifadəçi yönümlü qurulması ilə əldə etmək mümkündür.</p>
                <p>Bəs niyə SEO satışları qaldırmaqda şirkətlər üçün əvəzsiz vasitə hesab olunur? Bunu izah etmək üçün
                    bir neçə səbəb göstərə bilərik. İlk öncə qeyd edək ki, son araşdırmaların nəticələrinə əsasən
                    müştərilərin 53%-i alış haqqında qərar vermədən öncə məhsul və ya xidmət haqqında daha ətraflı məlumat
                    əldə etmək üçün axtarış sistemlərinə üz tuturlar. Bunun səbəbi isə düzgün brend seçimi etmək, fərqli
                    qiymətləri müqayisə etmək və ya digər alternativ məhsul və ya xidmətlərlə tanış olmaq istəyidir.
                    Müxtəlif universitetlərin fərqli alıcı kütlələrini araşdırdığı məqalələr isə göstərir ki, axtarış
                    edənlərin yalnız 25%-i Google-da 2-ci səhifəyə keçid edir. Bu isə o deməkdir ki, sizin vebsaytınızın
                    ilk səhifədə olmaması potensial müştərilərinizin 75%-inin artıq sizi tanımamasına səbəb olur.</p>
            </div>
            <div class="service__img">
                <img src="{{asset('assets/front/images/digital-agency-website-designs-tangent 1.png')}}" alt="">
            </div>
            <div class="service__content2 section__desc">
                <p>Digər tərəfdən, bu üsulla sizin vebsaytın axtarış sistemlərində önə çıxarılması ödənişli reklamlara
                    nisbətən daha üstün və etibarlı üsul hesab olunur. Çünki, ödənişli reklamlarda siz, yalnız reklam
                    kampaniyalarınız aktiv olduğu müddətdə vebsaytınızı ilk sıralarda göstərmək imkanına sahib olursunuz
                    və hər əldə etdiyiniz klikə əsasən, ödəniş edirsiniz. Lakin, düzgün SEO işləri aparılmış vebsaytda siz
                    uzunmüddət ərzində axtarış sistemlərində ön sıralarda qərarlaşırsınız və sizdən bunun üçün aylıq
                    xüsusi bir reklam büdcəsi tələb olunmur.
                </p>
                <p>Vebsaytda düzgün SEO işləri aparılması üçün nələrə ehtiyac var? Axtarış sistemləri öz tələblərini
                    mütəmadi olaraq yenilədiyi üçün dəyişiklikləri vaxtında izləmək və tətbiq etmək vebsaytınızın ön
                    sıralara çıxmasında mühüm rol oynaya bilər. Lakin, SEO işlərinə başlayarkən saytdaxili, saytxarici və
                    texniki göstəricilərə riayət edilməsinə ümumi qayda hesab edilir. Həmçinin, bu işlərdə həm keyfiyyətli
                    kontent, həm də dəqiqliklə açar sözlərin sahəyə uyğunluğuna eyni dərəcədə önəm verilməlidir.</p>
            </div>
        </div>

        <div class="service__bottom">
            <div class="service__bottom__accerdeon">
                <div class="service__bottom__accerdeon__main">
                    <span><i class="fa-solid fa-angle-down"></i></span> <span>Lokal SEO</span>
                </div>
                <div class="service__bottom__accerdeon__content section__desc">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five centuries
                </div>
                <div class="service__bottom__accerdeon__main">
                    <span><i class="fa-solid fa-angle-down"></i></span> <span>E-Commerce SEO</span>
                </div>
                <div class="service__bottom__accerdeon__content section__desc">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five centuries
                </div>
                <div class="service__bottom__accerdeon__main">
                    <span><i class="fa-solid fa-angle-down"></i></span> <span>App Store Optimization</span>
                </div>
                <div class="service__bottom__accerdeon__content section__desc">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five centuries
                </div>
                <div class="service__bottom__accerdeon__main">
                    <span><i class="fa-solid fa-angle-down"></i></span> <span>SEO Audit</span>
                </div>
                <div class="service__bottom__accerdeon__content section__desc">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five centuries
                </div>
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
