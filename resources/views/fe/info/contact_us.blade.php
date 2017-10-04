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
                            drop a line <i class="fa text-danger pull-right">{{Session::get('msg_suc')}} {{Session::Put('msg_suc', '')}}</i>
                            <div class="b-title-description__comment f-title-description__comment f-primary-l">What's on your mind & knock to us feel free by send your query</div>
                        </h3>
                        <div class="row">
                            {!! Form::open(array('url'=>'form-info-contact', 'role'=>'form', 'method'=>'POST')) !!}
                                <div class="col-md-6">
                                    <div class="b-form-row">
                                        <label class="b-form-vertical__label" for="name">Your name</label>
                                        <div class="b-form-vertical__input">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Write name..." required="" />
                                        </div>
                                    </div>
                                    <div class="b-form-row">
                                        <label class="b-form-vertical__label" for="email">You email</label>
                                        <div class="b-form-vertical__input">
                                            <input type="email" name="email" id="email" class="form-control" placeholder="example@ralitsoft.com" required="" />
                                        </div>
                                    </div>
                                    <div class="b-form-row">
                                        <label class="b-form-vertical__label" for="title">Your title</label>
                                        <div class="b-form-vertical__input">
                                            <input type="text" name="title" id="title" class="form-control" placeholder="Write your title..." required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="b-form-row b-form--contact-size">
                                        <label class="b-form-vertical__label">Your message</label>
                                        <textarea class="form-control" name="message" rows="5" placeholder="Write your query..." required></textarea>
                                    </div>
                                    <div class="b-form-row">
                                        <input type="submit" class="btn btn-success col-sm-12 b-btn__w100" value="Send Message">
                                    </div>
                                </div>
                            {!! Form::close() !!}
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
    </div>
@endsection