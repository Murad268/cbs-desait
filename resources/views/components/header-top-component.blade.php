<div class="header__top">
    <div class="container">
        <div class="header__top__wrapper">
            <div class="header__top__dark_mode">
                <span>Dark Mode</span>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                </div>
            </div>
            <div class="header__top__right">
                <div class="header__top__right__contacts">
                    <div class="header__top__right__contacts__number">
                        <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                        <span>{{$settings->phone_number}}</span>
                    </div>
                    <a class="header__top__right__contacts__email">
                        <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <span>{{$settings->email}}</span>
                    </a>
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
    </div>
</div>
