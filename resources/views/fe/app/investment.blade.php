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

            <h2 class="f-center f-primary-b" style="text-transform: capitalize">Choose Your Investment From here</h2>
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
                        <a  href="#" data-target="#saving" data-toggle="modal" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate app-c-s" title="Saving Accoutn">
                            <i class="fa fa-bank f-s-50"><br><span class="f-s-22">Saving</span></i>
                        </a>
                        <a  href="#" data-target="#fixed" data-toggle="modal" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate app-c-s" title="Fixed Accoutn">
                            <i class="fa fa-bank f-s-50"><br><span class="f-s-22">Fixed</span></i>
                        </a>
                        <a  href="#" data-target="#mutual" data-toggle="modal" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate app-c-s" title="Mutual Accoutn">
                            <i class="fa fa-bank f-s-50"><br><span class="f-s-22">Mutual</span></i>
                        </a>
                    </div>
                </div>

                {{--Start investment_saving--}}
                <div id="saving" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        {{--Start Modal--}}
                        <div class="modal-content modal-top">
                            <div class="modal-header t-a-c">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <i class="fa app-tab-in f-s-20">What is your position?</i>
                            </div>
                            <div class="modal-body" style="overflow: hidden">

                                <div class="col-md-12 t-a-c">
                                    <a href="{{URL::to('person/'.'investment-saving'.'/'.'salaried')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/salaried.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Salaried Person</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'investment-saving'.'/'.'business')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/business.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Business Person</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'investment-saving'.'/'.'others')}}" class="btn btn-default app-psn" title="Home Loan">
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
                {{--End investment_saving--}}

                {{--Start investment_fixed--}}
                <div id="fixed" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        {{--Start Modal--}}
                        <div class="modal-content modal-top">
                            <div class="modal-header t-a-c">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <i class="fa app-tab-in f-s-20">What is your position?</i>
                            </div>
                            <div class="modal-body" style="overflow: hidden">

                                <div class="col-md-12 t-a-c">
                                    <a href="{{URL::to('person/'.'investment-fixed'.'/'.'salaried')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/salaried.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Salaried Person</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'investment-fixed'.'/'.'business')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/business.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Business Person</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'investment-fixed'.'/'.'others')}}" class="btn btn-default app-psn" title="Home Loan">
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
                {{--End investment_fixed--}}

                {{--Start investment_mutual--}}
                <div id="mutual" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        {{--Start Modal--}}
                        <div class="modal-content modal-top">
                            <div class="modal-header t-a-c">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <i class="fa app-tab-in f-s-20">What is your position?</i>
                            </div>
                            <div class="modal-body" style="overflow: hidden">

                                <div class="col-md-12 t-a-c">
                                    <a href="{{URL::to('person/'.'investment-mutual'.'/'.'salaried')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/salaried.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Salaried Person</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'investment-mutual'.'/'.'business')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/business.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Business Person</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'investment-mutual'.'/'.'others')}}" class="btn btn-default app-psn" title="Home Loan">
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
                {{--End investment_mutual--}}

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