@section('fe_maincontent')
    <!--start section-->
    <section class="b-desc-section-container b-diagonal-line-bg-light">
        <div class="container">

            @if(Session::get('fe_error_msg') != NULL)
                <h2 class="f-center f-primary-b" style="text-transform: capitalize;">
                    <i class="fa text-danger m-b-10">{{ Session::get('fe_error_msg') }} {{ Session::put('fe_error_msg', '') }}</i>
                </h2>
            @endif

            <h2 class="f-center f-primary-b" style="text-transform: capitalize">Choose Your Insurance From here</h2>
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
                        <a  href="#" data-target="#life" data-toggle="modal" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate app-c-s" title="Life Insurance">
                            <i class="fa fa-user-md f-s-50"><br><span class="f-s-22">Life</span></i>
                        </a>
                        <a href="#" data-target="#motor_car" data-toggle="modal" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate app-c-s" title="Car Insurance">
                            <i class="fa fa-car f-s-50"><br><span class="f-s-22">Car</span></i>
                        </a>
                        <a href="#" data-target="#motor_bike" data-toggle="modal" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate app-c-s" title="Car Insurance">
                            <i class="fa fa-car f-s-50"><br><span class="f-s-22">Bike</span></i>
                        </a>
                        <a href="#" data-target="#marine" data-toggle="modal" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate app-c-s" title="Marine Insurance">
                            <i class="fa fa-leaf f-s-50"><br><span class="f-s-22">Marine</span></i>
                        </a>
                        <a href="#" data-target="#fire" data-toggle="modal" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate app-c-s" title="Marine Insurance">
                            <i class="fa fa-fire f-s-50"><br><span class="f-s-22">Fire</span></i>
                        </a>
                        <a href="#" data-target="#accident" data-toggle="modal" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate app-c-s" title="Marine Insurance">
                            <i class="fa fa-warning f-s-50"><br><span class="f-s-22">Accident</span></i>
                        </a>
                        <a href="#" data-target="#health" data-toggle="modal" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate app-c-s" title="Marine Insurance">
                            <i class="fa fa-user-md f-s-50"><br><span class="f-s-22">Health</span></i>
                        </a>
                    </div>
                </div>

                {{--Start insurance_life--}}
                <div id="life" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        {{--Start Modal--}}
                        <div class="modal-content modal-top">
                            <div class="modal-header t-a-c">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <i class="fa app-tab-in f-s-20">What is your position?</i>
                            </div>
                            <div class="modal-body" style="overflow: hidden">

                                <div class="col-md-12 t-a-c">
                                    <a href="{{URL::to('person/'.'insurance-life'.'/'.'salaried')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/salaried.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Salaried Person</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'insurance-life'.'/'.'business')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/business.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Business Person</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'insurance-life'.'/'.'others')}}" class="btn btn-default app-psn" title="Home Loan">
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
                {{--End insurance_life--}}

                {{--Start insurance_motor_car--}}
                <div id="motor_car" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        {{--Start Modal--}}
                        <div class="modal-content modal-top">
                            <div class="modal-header t-a-c">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <i class="fa app-tab-in f-s-20">What is your position?</i>
                            </div>
                            <div class="modal-body" style="overflow: hidden">

                                <div class="col-md-12 t-a-c">
                                    <a href="{{URL::to('person/'.'insurance-motor-car'.'/'.'salaried')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/salaried.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Salaried Person</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'insurance-motor-car'.'/'.'business')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/business.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Business Person</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'insurance-motor-car'.'/'.'others')}}" class="btn btn-default app-psn" title="Home Loan">
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
                {{--End insurance_motor_car--}}

                {{--Start insurance_motor_bike--}}
                <div id="motor_bike" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        {{--Start Modal--}}
                        <div class="modal-content modal-top">
                            <div class="modal-header t-a-c">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <i class="fa app-tab-in f-s-20">What is your position?</i>
                            </div>
                            <div class="modal-body" style="overflow: hidden">

                                <div class="col-md-12 t-a-c">
                                    <a href="{{URL::to('person/'.'insurance-motor-bike'.'/'.'salaried')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/salaried.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Salaried Person</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'insurance-motor-bike'.'/'.'business')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/business.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Business Person</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'insurance-motor-bike'.'/'.'others')}}" class="btn btn-default app-psn" title="Home Loan">
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
                {{--End insurance_motor_bike--}}

                {{--Start insurance_marine--}}
                <div id="marine" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        {{--Start Modal--}}
                        <div class="modal-content modal-top">
                            <div class="modal-header t-a-c">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <i class="fa app-tab-in f-s-20">What is your position?</i>
                            </div>
                            <div class="modal-body" style="overflow: hidden">

                                <div class="col-md-12 t-a-c">
                                    <a href="{{URL::to('person/'.'insurance-marine'.'/'.'salaried')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/salaried.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Salaried Person</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'insurance-marine'.'/'.'business')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/business.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Business Person</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'insurance-marine'.'/'.'others')}}" class="btn btn-default app-psn" title="Home Loan">
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
                {{--End insurance_marine--}}

                {{--Start insurance_fire--}}
                <div id="fire" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        {{--Start Modal--}}
                        <div class="modal-content modal-top">
                            <div class="modal-header t-a-c">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <i class="fa app-tab-in f-s-20">What is your position?</i>
                            </div>
                            <div class="modal-body" style="overflow: hidden">

                                <div class="col-md-12 t-a-c">
                                    <a href="{{URL::to('person/'.'insurance-fire'.'/'.'salaried')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/salaried.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Salaried Person</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'insurance-fire'.'/'.'business')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/business.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Business Person</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'insurance-fire'.'/'.'others')}}" class="btn btn-default app-psn" title="Home Loan">
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
                {{--End insurance_fire--}}

                {{--Start insurance_accident--}}
                <div id="accident" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        {{--Start Modal--}}
                        <div class="modal-content modal-top">
                            <div class="modal-header t-a-c">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <i class="fa app-tab-in f-s-20">What is your position?</i>
                            </div>
                            <div class="modal-body" style="overflow: hidden">

                                <div class="col-md-12 t-a-c">
                                    <a href="{{URL::to('person/'.'insurance-accident'.'/'.'salaried')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/salaried.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Salaried Person</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'insurance-accident'.'/'.'business')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/business.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Business Person</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'insurance-accident'.'/'.'others')}}" class="btn btn-default app-psn" title="Home Loan">
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
                {{--End insurance_accident--}}

                {{--Start insurance_health--}}
                <div id="health" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        {{--Start Modal--}}
                        <div class="modal-content modal-top">
                            <div class="modal-header t-a-c">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <i class="fa app-tab-in f-s-20">What is your position?</i>
                            </div>
                            <div class="modal-body" style="overflow: hidden">

                                <div class="col-md-12 t-a-c">
                                    <a href="{{URL::to('person/'.'insurance-health'.'/'.'salaried')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/salaried.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Salaried Person</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'insurance-health'.'/'.'business')}}" class="btn btn-default app-psn" title="Home Loan">
                                        <img src="{{ asset('fe/img/person/business.jpg') }}" class="app-img" alt=""><br>
                                        <i class="fa"><br><span class="f-s-18">Business Person</span></i>
                                    </a>
                                    <a href="{{URL::to('person/'.'insurance-health'.'/'.'others')}}" class="btn btn-default app-psn" title="Home Loan">
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
                {{--End insurance_health--}}

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