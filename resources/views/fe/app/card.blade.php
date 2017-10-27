@section('fe_maincontent')
    <!--start section-->
    @foreach($header_image as $v)
        @if($v->status == 0)
            <section class="b-desc-section-container b-diagonal-line-bg-light m-b-0">
                @else
                    <section class="b-desc-section-container b-diagonal-line-bg-light m-b-0" style="background: url({{ asset('ap/images/header_image/'.$v->header_image_url) }}) no-repeat center;
                            background-size: cover;">
                        @endif
                        @endforeach
        <div class="container">

            @if(Session::get('fe_error_msg') != NULL)
                <h2 class="f-center f-primary-b" style="text-transform: capitalize;">
                    <i class="fa text-danger m-b-10">{{ Session::get('fe_error_msg') }} {{ Session::put('fe_error_msg', '') }}</i>
                </h2>
            @endif

            <h2 class="f-center f-primary-b" style="text-transform: capitalize">Choose Your Card From here</h2>
                {{--<div class="b-hr-stars f-hr-stars">--}}
                    {{--<div class="b-hr-stars__group">--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                    {{--</div>--}}
                {{--</div>--}}

            <div class="row h-200">
                <div class="col-md-12 t-a-c">
                    <div class="b-infoblock-with-icon">
                        <a data-target="#card_credit" data-toggle="modal" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate app-c-s">
                            <i class="fa fa-credit-card f-s-50"><br><span class="f-s-22">Credit Card</span></i>
                        </a>
                        <a href="{{URL::to('card-debit')}}" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate app-c-s">
                            <i class="fa fa-credit-card f-s-50"><br><span class="f-s-22">Debit Card</span></i>
                        </a>
                    </div>
                </div>

                {{--Start card_credit--}}
                <div id="card_credit" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        {{--Start Modal--}}
                        <div class="modal-content modal-top">
                            <div class="modal-header t-a-c">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <i class="fa app-tab-in f-s-20">Choose Your Credit Card</i>
                            </div>
                            <div class="modal-body" style="overflow: hidden">

                                <div class="col-md-12 t-a-c">
                                    <a href="{{URL::to('person/'.'card-credit'.'/'.'visa_card')}}" class="btn btn-default app-psn-card" title="Visa Card">
                                        <img src="{{ asset('fe/img/card_credit/11.png') }}" class="app-img-card" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Visa Card</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'card-credit'.'/'.'master_card')}}" class="btn btn-default app-psn-card" title="Master Card">
                                        <img src="{{ asset('fe/img/card_credit/22.png') }}" class="app-img-card" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Master Card</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'card-credit'.'/'.'american_express')}}" class="btn btn-default app-psn-card" title="American Express">
                                        <img src="{{ asset('fe/img/card_credit/33.png') }}" class="app-img-card" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">American Express</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'card-credit'.'/'.'world_card')}}" class="btn btn-default app-psn-card" title="World Card">
                                        <img src="{{ asset('fe/img/card_credit/44.png') }}" class="app-img-card" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">World Card</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'card-credit'.'/'.'dinner_club')}}" class="btn btn-default app-psn-card" title="Diners Club">
                                        <img src="{{ asset('fe/img/card_credit/55.png') }}" class="app-img-card" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Diners Club</span></i>
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
                {{--End card_credit--}}

            </div>

        </div>
    </section>
    <!--end section-->

    <!--start section-->
    <section class="b-desc-section-container b-diagonal-line-bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="b-infoblock-with-icon-group row">

                        @php $number = 4; @endphp
                        @foreach($video_view as $v)
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                {!! $v->v_embed_code !!}<br>
                                {{str_limit($v->v_name, 46, '...')}}
                            </div>
                        @endforeach

                        {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                        {{--<iframe src="https://www.youtube.com/embed/3rsGPNChtVU?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>--}}
                        {{--</div>--}}

                        {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                        {{--<iframe src="https://www.youtube.com/embed/q5jEY92Amgw?controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>--}}
                        {{--</div>--}}

                        {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                        {{--<iframe src="https://www.youtube.com/embed/yltlJEdSAHw?showinfo=0" frameborder="0" allowfullscreen></iframe>--}}
                        {{--</div>--}}

                        {{--<video class="col-md-4 col-sm-6 col-xs-12" controls>--}}
                        {{--<source src="{{ asset('fe/video/mov_bbb.mp4') }}" type="video/mp4">--}}
                        {{--<source src="{{ asset('fe/video/mov_bbb.ogg') }}" type="video/ogg">--}}
                        {{--Your browser does not support HTML5 video.--}}
                        {{--</video>--}}
                        {{--<video class="col-md-4 col-sm-6 col-xs-12" controls>--}}
                        {{--<source src="{{ asset('fe/video/mov_bbb.mp4') }}" type="video/mp4">--}}
                        {{--<source src="{{ asset('fe/video/mov_bbb.ogg') }}" type="video/ogg">--}}
                        {{--Your browser does not support HTML5 video.--}}
                        {{--</video>--}}
                        {{--<video class="col-md-4 col-sm-6 col-xs-12" controls>--}}
                        {{--<source src="{{ asset('fe/video/mov_bbb.mp4') }}" type="video/mp4">--}}
                        {{--<source src="{{ asset('fe/video/mov_bbb.ogg') }}" type="video/ogg">--}}
                        {{--Your browser does not support HTML5 video.--}}
                        {{--</video>--}}

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--end section-->
@endsection