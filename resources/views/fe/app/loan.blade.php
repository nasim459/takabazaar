@section('fe_maincontent')
    <!--start section-->
    <section class="b-desc-section-container b-diagonal-line-bg-light">
        <div class="container">
            <h2 class="f-center f-primary-b" style="text-transform: capitalize">Choose Your Loan From here</h2>
            {{--<p class="b-desc-section f-desc-section f-center f-primary-l">Etiam consectetur pellentesque justo. Sed tristique bibendum elit non molestie. Donec et libero rutrum</p>--}}
            <div class="b-hr-stars f-hr-stars">
                <div class="b-hr-stars__group">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
            </div>
            <div class="row">

                <div class="col-md-10 col-md-offset-1">
                    {{--<div class="b-infoblock-with-icon">--}}
                    <a data-target="#person" data-toggle="modal" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate app">
                        <i class="fa fa-home z_1_5"><br><span class="f-s-12">Home Loan</span></i>
                    </a>
                    <a href="{{ url('loan-car') }}" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate app">
                        <i class="fa fa-car z_1_5"><br><span class="f-s-12">Car Loan</span></i>
                    </a>
                    <a href="{{ url('loan-personal') }}" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate app">
                        <i class="fa fa-life-ring z_1_5"><br><span class="f-s-12">Persoanal Loan</span></i>
                    </a>
                    <a href="{{ url('loan-sme') }}" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate app">
                        <i class="fa fa-car z_1_5"><br><span class="f-s-12">Sme Loan</span></i>
                    </a>
                    <a href="{{ url('loan-working-capital') }}" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate app">
                        <i class="fa fa-book z_1_5"><br><span class="f-s-12">Others Loan</span></i>
                    </a>
                </div>

                {{--Start Modal  Select_Person--}}
                <div id="person" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        {{--Start Modal--}}
                        <div class="modal-content modal-top">
                            <div class="modal-header t-a-c">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <i class="fa app-tab-in">Choose Profession Option</i>
                            </div>
                            <div class="modal-body" style="overflow: hidden;">
                                <div class="col-md-12 t-a-c m-t-10 m-b-10">
                                    <a href="{{ url('loan-home-salaried') }}" class="btn btn-default m-t-10 m-b-10 m-l-10" style="width: 160px;">
                                        <i class="fa fa-user z_1_5"><br><span class="f-s-12">Salaried Person</span></i>
                                    </a>
                                    <a href="{{ url('loan-home-business') }}" class="btn btn-default m-t-10 m-b-10 m-l-10" style="width: 160px;">
                                        <i class="fa fa-user z_1_5"><br><span class="f-s-12">Business Person</span></i>
                                    </a>
                                    <a href="{{ url('loan-home-others') }}" class="btn btn-default m-t-10 m-b-10 m-l-10" style="width: 160px;">
                                        <i class="fa fa-user z_1_5"><br><span class="f-s-12">Others Person</span></i>
                                    </a>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        {{--End Modal--}}
                    </div>
                </div>
                {{--End Modal Rating--}}

            </div>

        </div>
    </section>
    <!--end section-->

    <!--start section-->
    <section class="b-diagonal-line-bg-light b-section-info">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    {{--<div class="b-section-info__img img-appearance-1 wrap-img-appearance col-sm-6 col-xs-12">--}}
                        {{--<img data-retina data-animate="fadeInLeft" class="img-appearance-item-1" src="img/animation-data/imac.png" alt="imac"/>--}}
                        {{--<img data-retina data-animate="fadeInLeft" class="img-appearance-item-2" src="img/animation-data/mac-book.png" alt="mac-book"/>--}}
                        {{--<img data-retina data-animate="fadeInLeft" class="img-appearance-item-3" src="img/animation-data/ipad.png" alt="ipad"/>--}}
                        {{--<img data-retina data-animate="fadeInLeft" class="img-appearance-item-4" src="img/animation-data/ipad-mini.png" alt="ipad-mini"/>--}}
                        {{--<img data-retina data-animate="fadeInLeft" class="img-appearance-item-5" src="img/animation-data/iphone.png" alt="iphone"/>--}}
                    {{--</div>--}}
                    <div class="b-section-info__text f-section-info__text col-sm-6 col-xs-12">
                        <h2 class="f-primary-b" style="text-transform: capitalize">Popular Article Here</h2>
                        <p class="f-section-info__text_short f-primary-sb">These articles have been read a lot of time</p>
                        <div class="b-ol-list-text-container">
                            <div class="b-ol-list-text__item">
                                <div class="b-ol-list-text__item_number f-ol-list-text__item_number f-primary-b">1</div>
                                <div class="b-ol-list-text__item_info">
                                    <a href="#" class="b-ol-list-text__item_info-title f-ol-list-text__item_info-title f-primary-sb">Frexy template for Travel website</a>
                                    <p class="b-ol-list-text__item_info-desc f-ol-list-text__item_info-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut massa </p>
                                </div>
                            </div>
                            <div class="b-ol-list-text__item">
                                <div class="b-ol-list-text__item_number f-ol-list-text__item_number f-primary-b">2</div>
                                <div class="b-ol-list-text__item_info">
                                    <a href="#" class="f-ol-list-text__item_info-title f-primary-sb">Frexy template for Corporate website</a>
                                    <p class="b-ol-list-text__item_info-desc f-ol-list-text__item_info-desc">Lorem ipsum dolor sit amet, consectetur</p>
                                </div>
                            </div>
                            <div class="b-ol-list-text__item">
                                <div class="b-ol-list-text__item_number f-ol-list-text__item_number f-primary-b">3</div>
                                <div class="b-ol-list-text__item_info">
                                    <a href="#" class="f-ol-list-text__item_info-title f-primary-sb">Frexy template for Real Estate website</a>
                                    <p class="b-ol-list-text__item_info-desc f-ol-list-text__item_info-desc">Lorem ipsum dolor sit amet, consectetur adipiscing </p>
                                </div>
                            </div>
                            <div class="b-ol-list-text__item">
                                <div class="b-ol-list-text__item_number f-ol-list-text__item_number f-primary-b">4</div>
                                <div class="b-ol-list-text__item_info">
                                    <a href="#" class="f-ol-list-text__item_info-title f-primary-sb">Frexy template for Education</a>
                                    <p class="b-ol-list-text__item_info-desc f-ol-list-text__item_info-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut</p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix">
                            <a href="#" class="f-more f-primary-b">and much more...</a>
                        </div>
                    </div>
                    <div class="b-section-info__text f-section-info__text col-sm-6 col-xs-12">
                        <h2 class="f-primary-b" style="text-transform: capitalize">Popular Article Here</h2>
                        <p class="f-section-info__text_short f-primary-sb">These articles have been read a lot of time</p>
                        <div class="b-ol-list-text-container">
                            <div class="b-ol-list-text__item">
                                <div class="b-ol-list-text__item_number f-ol-list-text__item_number f-primary-b">1</div>
                                <div class="b-ol-list-text__item_info">
                                    <a href="#" class="b-ol-list-text__item_info-title f-ol-list-text__item_info-title f-primary-sb">Frexy template for Travel website</a>
                                    <p class="b-ol-list-text__item_info-desc f-ol-list-text__item_info-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut massa </p>
                                </div>
                            </div>
                            <div class="b-ol-list-text__item">
                                <div class="b-ol-list-text__item_number f-ol-list-text__item_number f-primary-b">2</div>
                                <div class="b-ol-list-text__item_info">
                                    <a href="#" class="f-ol-list-text__item_info-title f-primary-sb">Frexy template for Corporate website</a>
                                    <p class="b-ol-list-text__item_info-desc f-ol-list-text__item_info-desc">Lorem ipsum dolor sit amet, consectetur</p>
                                </div>
                            </div>
                            <div class="b-ol-list-text__item">
                                <div class="b-ol-list-text__item_number f-ol-list-text__item_number f-primary-b">3</div>
                                <div class="b-ol-list-text__item_info">
                                    <a href="#" class="f-ol-list-text__item_info-title f-primary-sb">Frexy template for Real Estate website</a>
                                    <p class="b-ol-list-text__item_info-desc f-ol-list-text__item_info-desc">Lorem ipsum dolor sit amet, consectetur adipiscing </p>
                                </div>
                            </div>
                            <div class="b-ol-list-text__item">
                                <div class="b-ol-list-text__item_number f-ol-list-text__item_number f-primary-b">4</div>
                                <div class="b-ol-list-text__item_info">
                                    <a href="#" class="f-ol-list-text__item_info-title f-primary-sb">Frexy template for Education</a>
                                    <p class="b-ol-list-text__item_info-desc f-ol-list-text__item_info-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut</p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix">
                            <a href="#" class="f-more f-primary-b">and much more...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->
@endsection