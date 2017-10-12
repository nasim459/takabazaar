@section('fe_maincontent')
    <!--start section-->
    <section class="b-desc-section-container b-diagonal-line-bg-light">
        <div class="container">

            @if(Session::get('fe_error_msg') != NULL)
                <div class="col-xs-12 col-md-6 alert alert-danger" style="font-size: 20px;">
                    <a href="#" class="pull-right" data-dismiss="alert">&times;</a>
                    {{Session::get('fe_error_msg')}} {{Session::put('fe_error_msg', '')}}
                </div>
            @endif

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
                <div class="col-md-12 t-a-c">
                    <div class="b-infoblock-with-icon">
                        <a data-target="#home" data-toggle="modal" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate app-c-s" title="Home Loan">
                            <i class="fa fa-home f-s-50"><br><span class="f-s-18">Home Loan</span></i>
                        </a>
                        <a data-target="#car" data-toggle="modal" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate app-c-s" title="Car Loan">
                            <i class="fa fa-car f-s-50"><br><span class="f-s-18">Car Loan</span></i>
                        </a>
                        <a data-target="#personal" data-toggle="modal" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate app-c-s" title="Persoanal Loan">
                            <i class="fa fa-user f-s-50"><br><span class="f-s-18">Persoanal Loan</span></i>
                        </a>
                        <a data-target="#sme" data-toggle="modal" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate app-c-s" title="Sme Loan">
                            <i class="fa fa-life-ring f-s-50"><br><span class="f-s-18">SME Loan</span></i>
                        </a>
                        <a data-target="#working" data-toggle="modal" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate app-c-s" title="Others Loan">
                            <i class="fa fa-won f-s-50"><br><span class="f-s-18">Working Capital</span></i>
                        </a>
                        <a data-target="#others" data-toggle="modal" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate app-c-s" title="Others Loan">
                            <i class="fa fa-book f-s-50"><br><span class="f-s-18">Others Loan</span></i>
                        </a>
                    </div>
                </div>

                {{--Start home_loan--}}
                <div id="home" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        {{--Start Modal--}}
                        <div class="modal-content modal-top">
                            <div class="modal-header t-a-c">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <i class="fa app-tab-in f-s-20">What is your position?</i>
                            </div>
                            <div class="modal-body" style="overflow: hidden">

                                <div class="col-md-12 t-a-c">
                                    <a href="{{URL::to('person/'.'loan-home'.'/'.'salaried')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/salaried.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Salaried Person</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'loan-home'.'/'.'business')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/business.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Business Person</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'loan-home'.'/'.'others')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/others.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Other's Person</span></i>
                                    </a>

                                    {{--<a href="{{ url('loan-home') }}" class="btn btn-default" title="Home Loan">--}}
                                        {{--<i class="fa fa-home f-s-50"><br><span class="f-s-22">Others Person</span></i>--}}
                                    {{--</a>--}}
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        {{--End Modal--}}
                    </div>
                </div>
                {{--End home_loan--}}

                {{--Start car_loan--}}
                <div id="car" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        {{--Start Modal--}}
                        <div class="modal-content modal-top">
                            <div class="modal-header t-a-c">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <i class="fa app-tab-in f-s-20">What is your position?</i>
                            </div>
                            <div class="modal-body" style="overflow: hidden">

                                <div class="col-md-12 t-a-c">
                                    <a href="{{URL::to('person/'.'loan-car'.'/'.'salaried')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/salaried.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Salaried Person</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'loan-car'.'/'.'business')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/business.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Business Person</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'loan-car'.'/'.'others')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/others.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Other's Person</span></i>
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
                {{--End car_loan--}}

                {{--Start personal_loan--}}
                <div id="personal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        {{--Start Modal--}}
                        <div class="modal-content modal-top">
                            <div class="modal-header t-a-c">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <i class="fa app-tab-in f-s-20">What is your position?</i>
                            </div>
                            <div class="modal-body" style="overflow: hidden">

                                <div class="col-md-12 t-a-c">
                                    <a href="{{URL::to('person/'.'loan-personal'.'/'.'salaried')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/salaried.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Salaried Person</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'loan-personal'.'/'.'business')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/business.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Business Person</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'loan-personal'.'/'.'others')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/others.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Other's Person</span></i>
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
                {{--End personal_loan--}}

                {{--Start sme_loan--}}
                <div id="sme" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        {{--Start Modal--}}
                        <div class="modal-content modal-top">
                            <div class="modal-header t-a-c">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <i class="fa app-tab-in f-s-20">What is your position?</i>
                            </div>
                            <div class="modal-body" style="overflow: hidden">

                                <div class="col-md-12 t-a-c">
                                    <a href="{{URL::to('person/'.'loan-sme'.'/'.'salaried')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/salaried.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Salaried Person</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'loan-sme'.'/'.'business')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/business.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Business Person</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'loan-sme'.'/'.'others')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/others.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Other's Person</span></i>
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
                {{--End sme_loan--}}

                {{--Start working_loan--}}
                <div id="working" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        {{--Start Modal--}}
                        <div class="modal-content modal-top">
                            <div class="modal-header t-a-c">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <i class="fa app-tab-in f-s-20">What is your position?</i>
                            </div>
                            <div class="modal-body" style="overflow: hidden">

                                <div class="col-md-12 t-a-c">
                                    <a href="{{URL::to('person/'.'loan-working-capital'.'/'.'salaried')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/salaried.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Salaried Person</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'loan-working-capital'.'/'.'business')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/business.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Business Person</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'loan-working-capital'.'/'.'others')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/others.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Other's Person</span></i>
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
                {{--End workingloan--}}

                {{--Start others_loan--}}
                <div id="others" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        {{--Start Modal--}}
                        <div class="modal-content modal-top">
                            <div class="modal-header t-a-c">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <i class="fa app-tab-in f-s-20">What is your position?</i>
                            </div>
                            <div class="modal-body" style="overflow: hidden">

                                <div class="col-md-12 t-a-c">
                                    <a href="{{URL::to('person/'.'loan-others'.'/'.'salaried')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/salaried.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Salaried Person</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'loan-others'.'/'.'business')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/business.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Business Person</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'loan-others'.'/'.'others')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/others.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Other's Person</span></i>
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
                {{--End others_loan--}}

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