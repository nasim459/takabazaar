
@section('fe_maincontent')
    <div class="j-menu-container"></div>

    @foreach($header_image as $v)
        @if($v->status == 0)
            <div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">
                @else
                    <div class="b-inner-page-header f-inner-page-header" style="background: url({{ asset('ap/images/header_image/'.$v->header_image_url) }}) no-repeat center;
                            background-size: cover;">
                        @endif
                        @endforeach
        <div class="b-inner-page-header__content">
            <div class="container">
                <div class="pull-left">
                    <h1 class="f-primary-l c-default"><i class="fa fa-briefcase"> Fire Insurance</i></h1>
                    {{--<div class="f-primary-l f-inner-page-header_title-add c-senary"><i class="fa">Create a fire insurance from here</i></div>--}}
                </div>

                @if(Session::get('fe_error_msg') != NULL)
                    <div class="col-xs-12 col-md-6 m-l-5 alert alert-danger" style="font-size: 20px;">
                        <a href="#" class="pull-right" data-dismiss="alert">&times;</a>
                        {{Session::get('fe_error_msg')}} {{Session::put('fe_error_msg', '')}}
                    </div>
                @endif

                @if(Session::get('fe_msg') != NULL)
                    <div class="col-xs-12 col-md-6 m-l-5 alert alert-success" style="font-size: 20px;">
                        <a href="#" class="pull-right" data-dismiss="alert">&times;</a>
                        {{Session::get('fe_msg')}} {{Session::put('fe_msg', '')}}
                    </div>
                @endif

                <div class="pull-right">
                    <div class="t-a-c">
                        <i class="fa f-s-25 m-b-10">Hotline</i><br>
                        <a href="#" class="btn btn-danger"><i class="fa f-s-20 c-red- m-b-5">01846 177 831</i></a><br>
                        {{--<i class="fa f-s-14">info@finFObd.com</i>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="l-main-container" ng-controller="fe_loanController">
        <div class="b-breadcrumbs f-breadcrumbs">
            <div class="container">
                <ul>
                    <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                    <li><i class="fa fa-angle-right"></i><span>Fire Insurance</span></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="l-inner-page-container">
                <div class="row">

                    <div class="col-sm-12 col-md-12 b-item-apartment-block" style="text-align: center">
                        @foreach($advertise_image as $v)
                            @if(isset($v->add_name))
                                <a href="{{$v->add_link}}" target="_blank"><img src="{{ asset('ap/images/advertise/'.$v->add_image_url) }}" border="0" width="728" height="90" alt="pic"></a>
                            @endif
                        @endforeach
                    </div>

                    <div class="col-sm-12 col-md-12 b-item-apartment-block">
                        <div class="b-some-examples__item f-some-examples__item">
                            <div class="b-some-examples__item_action- -app-box"style="margin-top: 13px;">
                                {{--<div class="col-xs-12 col-sm-12 col-md-12">--}}
                                {{--<i class="fa fa-search f-s-20 m-b-10 t-a-c"> Search here ...</i>--}}
                                {{--</div>--}}

                                <div class="col-xs-12 col-sm-12 col-md-12">

                                </div>

                                <div class="col-xs-12 col-sm-offset-3">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="b-form-row f-primary-l f-title-big c-secondary">Fire Insurance Apply Form</div>
                                        {{--<div class="b-form-row">Consectetur adipiscing elituis sagittis eu mi et pellentesqueur</div>--}}
                                        <hr class="b-hr" />

                                        {!! Form::open(array('url'=>'insurance-apply-save', 'role'=>'form', 'method'=>'POST')) !!}
                                        <div class="form-horizontal m-t-10">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="insurance" value="insr_fire">
                                            <input type="hidden" name="type" value="3">

                                            <div class="form-group">
                                                <label class="col-sm-4 m-t-8 text-right" for="username"></label>
                                                <div class="col-sm-6">
                                                    <i class="fa"><span style="font-size: 25px">Coming Soon ...</span></i>
                                                </div>
                                            </div>

                                            {{--<div class="form-group">--}}
                                                {{--<label class="col-sm-4 m-t-8 text-right" for="username"> Name :</label>--}}
                                                {{--<div class="col-sm-6">--}}
                                                    {{--<input type="text" name="name" class="form-control" id="username" placeholder="Enter name..." required>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="form-group">--}}
                                                {{--<label class="col-sm-4 m-t-8 text-right" for="username"> Occupation :</label>--}}
                                                {{--<div class="col-sm-6">--}}
                                                    {{--<input type="text" name="occupation" class="form-control" id="username" placeholder="Enter name..." required>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="form-group">--}}
                                                {{--<label class="col-sm-4 m-t-8 text-right" for="username"> Age :</label>--}}
                                                {{--<div class="col-sm-6">--}}
                                                    {{--<input type="text" name="age" class="form-control" id="username" placeholder="Enter age..." required>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="form-group">--}}
                                                {{--<label class="col-sm-4 m-t-8 text-right" for="username"> Gender :</label>--}}
                                                {{--<div class="col-sm-6">--}}
                                                    {{--<select class="form-control" name="gender" required>--}}
                                                        {{--<option value="1">Male</option>--}}
                                                        {{--<option value="2">Female</option>--}}
                                                    {{--</select>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="form-group">--}}
                                                {{--<label class="col-sm-4 m-t-8 text-right" for="username"> Smoking habit :</label>--}}
                                                {{--<div class="col-sm-6">--}}
                                                    {{--<select class="form-control" name="smoking" required>--}}
                                                        {{--<option value="1">Yes</option>--}}
                                                        {{--<option value="2">No</option>--}}
                                                    {{--</select>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="form-group">--}}
                                                {{--<label class="col-sm-4 m-t-8 text-right" for="username"> Any Medical Condition :</label>--}}
                                                {{--<div class="col-sm-6">--}}
                                                    {{--<select class="form-control" name="m_conditon" required>--}}
                                                        {{--<option value="1">Yes</option>--}}
                                                        {{--<option value="2">No</option>--}}
                                                    {{--</select>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="form-group">--}}
                                                {{--<label class="col-sm-4 m-t-8 text-right" for="username"> Mobile Number :</label>--}}
                                                {{--<div class="col-sm-6">--}}
                                                    {{--<input type="text" name="mobile" class="form-control" id="username" placeholder="Ex. 01XXX XXX XXX" required>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            <div class="form-group">
                                                <label class="col-sm-4" for="email"></label>
                                                <div class="col-sm-6 m-t-15">
                                                    <button type="submit" class="btn btn-success col-sm-12">Next</button>
                                                </div>
                                            </div>

                                        </div>
                                        {!! Form::close() !!}

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection