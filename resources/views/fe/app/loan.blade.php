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

                @if(Session::get('fe_error_msg') != NULL)
                    <div class="col-xs-12 col-md-6 alert alert-danger" style="font-size: 20px;">
                        <a href="#" class="pull-right" data-dismiss="alert">&times;</a>
                        {{Session::get('fe_error_msg')}} {{Session::put('fe_error_msg', '')}}
                    </div>
                @endif

                <div class="col-md-10 col-md-offset-1">
                    {{--<div class="b-infoblock-with-icon">--}}
                    <a  href="{{ url('loan-car') }}" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate app">
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
                    <a href="{{ url('loan-others') }}" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate app">
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
                                    <a href="{{ url('loan-home/'.'salaried') }}" class="btn btn-default m-t-10 m-b-10 m-l-10" style="width: 160px;">
                                        <i class="fa fa-user z_1_5"><br><span class="f-s-12">Salaried Person</span></i>
                                    </a>
                                    <a href="{{ url('loan-home/'.'business') }}" class="btn btn-default m-t-10 m-b-10 m-l-10" style="width: 160px;">
                                        <i class="fa fa-user z_1_5"><br><span class="f-s-12">Business Person</span></i>
                                    </a>
                                    <a href="{{ url('loan-home/'.'others') }}" class="btn btn-default m-t-10 m-b-10 m-l-10" style="width: 160px;">
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