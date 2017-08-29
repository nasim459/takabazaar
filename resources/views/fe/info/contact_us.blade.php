@section('fe_maincontent')
    <div class="j-menu-container"></div>

    {{--<div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">--}}
        {{--<div class="b-inner-page-header__content">--}}
            {{--<div class="container">--}}
                {{--<h1 class="f-primary-l c-default"><i class="fa fa-home"> Contact us</i></h1>--}}
                {{--<div class="f-primary-l f-inner-page-header_title-add c-senary"><i class="fa">What's on your mind & knock to us feel free</i></div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="l-main-container">
        <div class="b-breadcrumbs f-breadcrumbs">
            <div class="container">
                <ul>
                    <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                    <li><i class="fa fa-angle-right"></i><span> Contact us</span></li>
                </ul>
            </div>
        </div>
        <div class="b-desc-section-container">
            <section class="container">
                <div class="row">
                    <div class="col-sm-6 b-contact-form-box">
                        <h3 class="f-primary-b b-title-description f-title-description">
                            drop a line
                            <div class="b-title-description__comment f-title-description__comment f-primary-l">What's on your mind & knock to us feel free by send your query</div>
                        </h3>
                        <div class="row">
                            <form action="" method="post">
                                <div class="col-md-6">
                                    <div class="b-form-row">
                                        <label class="b-form-vertical__label" for="name">Your name</label>
                                        <div class="b-form-vertical__input">
                                            <input type="text" id="name" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="b-form-row">
                                        <label class="b-form-vertical__label" for="email">You email</label>
                                        <div class="b-form-vertical__input">
                                            <input type="text" id="email" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="b-form-row">
                                        <label class="b-form-vertical__label" for="website">Your website</label>
                                        <div class="b-form-vertical__input">
                                            <input type="text" id="website" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="b-form-row">
                                        <label class="b-form-vertical__label" for="title">Your title</label>
                                        <div class="b-form-vertical__input">
                                            <input type="text" id="title" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="b-form-row b-form--contact-size">
                                        <label class="b-form-vertical__label">Your message</label>
                                        <textarea class="form-control" rows="5"></textarea>
                                    </div>
                                    <div class="b-form-row">
                                        <a href="#" class="b-btn f-btn b-btn-md b-btn-default f-primary-b b-btn__w100">send message</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-6 b-contact-form-box">
                        <h3 class="f-primary-b b-title-description f-title-description">
                            contact info
                            <div class="b-title-description__comment f-title-description__comment f-primary-l">What's on your mind & knock to us feel free by contact this info</div>
                        </h3>
                        <div class="row b-google-map__info-window-address">
                            <ul class="list-unstyled">
                                <li class="col-xs-12">
                                    <div class="b-google-map__info-window-address-icon f-center pull-left">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div>
                                        <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
                                            frexy studio
                                        </div>
                                        <div class="desc">1234 Street Name, City Name, United States.</div>
                                    </div>
                                </li>
                                <li class="col-xs-12">
                                    <div class="b-google-map__info-window-address-icon f-center pull-left">
                                        <i class="fa fa-globe"></i>
                                    </div>
                                    <div>
                                        <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
                                            portfolio homepage
                                        </div>
                                        <div class="desc">http://yoursite.com</div>
                                    </div>
                                </li>
                                <li class="col-xs-12">
                                    <div class="b-google-map__info-window-address-icon f-center pull-left">
                                        <i class="fa fa-skype"></i>
                                    </div>
                                    <div>
                                        <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
                                            Skype
                                        </div>
                                        <div class="desc">ask.company</div>
                                    </div>
                                </li>
                                <li class="col-xs-12">
                                    <div class="b-google-map__info-window-address-icon f-center pull-left">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div>
                                        <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
                                            email
                                        </div>
                                        <div class="desc">mail@example.com</div>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </section>
        </div>
        {{--<section class="b-google-map map-theme b-bord-box" data-location-set="contact-us">--}}
            {{--<div class="b-google-map__map-view b-google-map__map-height">--}}
                {{--<!-- Google map load -->--}}
            {{--</div>--}}
            {{--<img data-retina src="img/google-map-marker-default.png" data-label="" class="marker-template hidden" />--}}
            {{--<div class="b-google-map__info-window-template hidden"--}}
                 {{--data-selected-marker="0"--}}
                 {{--data-width="250">--}}
                {{--<div class="b-google-map__info-window f-center b-google-map__info-office f-google-map__info-office">--}}
                    {{--<h4 class="f-primary-b">Frexy Studio</h4>--}}
                    {{--<small>Heading Office</small>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</section>--}}
        <section class="b-diagonal-line-bg-light b-bord-box">
            <section class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="f-primary-b b-title-description f-title-description">like us on facebook</h3>
                        <div class="b-wiget-fb">
                            <div class="b-wiget-fb-content" id="fb-root">
                                <div class="fb-like-box" data-width="285" data-href="https://www.facebook.com/FacebookDevelopers"
                                     data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false"
                                     data-show-border="false"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h3 class="f-primary-b b-title-description f-title-description">twitter feeds</h3>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="b-twitter-feeds__item">
                                    <div class="b-twitter-feeds__item_name f-twitter-feeds__item_name f-primary-b"><i
                                                class="fa fa-twitter"></i> frexy studio
                                    </div>
                                    <div class="b-twitter-feeds__item_twit f-twitter-feeds__item_twit">
                                        Lorem ipsum dolor sit amet, consectetur adip iscing elit. Curabitur ut blandit sapien. <a
                                                href="http://t.co/hd3sk" target="_blank">http://t.co/hd3sk</a>
                                    </div>
                                    <div class="b-twitter-feeds__item_date f-twitter-feeds__item_date f-primary-it c-senary">2 days
                                        ago
                                    </div>
                                </div>
                                <div class="b-twitter-feeds__item b-default-top-indent">
                                    <div class="b-twitter-feeds__item_name f-twitter-feeds__item_name f-primary-b"><i
                                                class="fa fa-twitter"></i> John Doe
                                    </div>
                                    <div class="b-twitter-feeds__item_twit f-twitter-feeds__item_twit">
                                        Lorem ipsum dolor sit amet, consectetur adip iscing elit. Curabitur ut blandit sapien. <a
                                                href="http://t.co/hd3sk" target="_blank">http://t.co/hd3sk</a>
                                    </div>
                                    <div class="b-twitter-feeds__item_date f-twitter-feeds__item_date f-primary-it c-senary">2 days
                                        ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </div>
@endsection