@section('fe_maincontent')
    <!--start section-->
    <section class="b-desc-section-container b-diagonal-line-bg-light">
        <div class="container">
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

                @if(Session::get('fe_error_msg') != NULL)
                    <div class="col-xs-12 col-md-6 alert alert-danger" style="font-size: 20px;">
                        <a href="#" class="pull-right" data-dismiss="alert">&times;</a>
                        {{Session::get('fe_error_msg')}} {{Session::put('fe_error_msg', '')}}
                    </div>
                @endif

                <div class="col-md-10 col-md-offset-1">
                    {{--<div class="b-infoblock-with-icon">--}}
                    <a  href="{{ url('investment-saving') }}" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate app">
                        <i class="fa fa-bank z_1_5"><br><span class="f-s-12">Saving Account</span></i>
                    </a>
                    <a href="{{ url('investment-fixed') }}" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate app">
                        <i class="fa fa-bank z_1_5"><br><span class="f-s-12">Fixed Account</span></i>
                    </a>
                    <a href="{{ url('investment-mutual') }}" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate app">
                        <i class="fa fa-bank z_1_5"><br><span class="f-s-12">Mutual Accoutn</span></i>
                    </a>
                    <a href="{{ url('loan-working-capital') }}" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate app" title="Capital Marketing">
                        <i class="fa fa-car z_1_5"><br><span class="f-s-12">Capital</span></i>
                    </a>
                    <a href="{{ url('loan-others') }}" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate app">
                        <i class="fa fa-book z_1_5"><br><span class="f-s-12">Others Loan</span></i>
                    </a>
                </div>

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