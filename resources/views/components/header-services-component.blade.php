<div class="header__services">
    @foreach($services as $service)
    <div class="header__service">
        <div class="header__service__top">
            <span><a href="">{{$service->name}}</a></span>
            <span></span>
        </div>
        <ul>
            @foreach($service->services as $subservice)
                <li>{{$subservice->name}}</li>
            @endforeach

        </ul>
    </div>
    @endforeach
    <!-- <div class="header__service">
        <div class="header__service__top">
            <span><a href="">SEO</a></span>
            <span></span>
        </div>
        <ul>
            <li>Search Engine Optimization</li>
            <li>Lokal SEO</li>
            <li>E-commerce SEO</li>
            <li>App Store Optimization</li>
            <li>SEO Audit</li>
        </ul>
    </div>
    <div class="header__service">
        <div class="header__service__top">
            <span><a href="">SMM</a></span>
            <span></span>
        </div>
        <ul>
            <li>Facebook</li>
            <li>Instagram</li>
            <li>Youtube</li>
            <li>Linkedin</li>
            <li>Twittert</li>
        </ul>
    </div>
    <div class="header__service">
        <div class="header__service__top">
            <span><a href="">Google Reklamları</a></span>
            <span></span>
        </div>
        <ul>
            <li>Search Engine Marketing</li>
            <li>Display Advirtsiing</li>
            <li>Re-targeted Advirtising</li>
        </ul>
    </div>
    <div class="header__service">
        <div class="header__service__top">
            <span><a href="">WEB</a></span>
            <span></span>
        </div>
        <ul>
            <li>Saytların hazırlanması</li>
            <li>E-Commerce sistemin qurulması</li>
            <li>UX/UI Dizayn</li>
            <li>Hostinq Xidmətləri</li>
            <li>Texniki Dəstək</li>
        </ul>
    </div>
    <div class="header__service">
        <div class="header__service__top">
            <span><a href="">Digər Xidmətlər</a></span>
            <span></span>
        </div>
        <ul>
            <li>Brendinq</li>
            <li>Qrafik Dizayn</li>
            <li>Video Marketinq</li>
            <li>E-mail Marketinq/li>
            <li>Kontent Marketinq</li>
            <li>Marketinq Konsultasiyası</li>
        </ul>
    </div> -->
</div>
