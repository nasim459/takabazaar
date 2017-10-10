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
                    <h1 class="f-primary-l c-default"><i class="fa fa-user-md"> Health Insurance</i></h1>
                    <div class="f-primary-l f-inner-page-header_title-add c-senary"><i class="fa">Create a health insurance from here</i></div>
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
                        <i class="fa f-s-16 c-red m-b-5">01 777 888 757</i><br>
                        <i class="fa f-s-14">info@finFObd.com</i>
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
                    <li><i class="fa fa-angle-right"></i><span>Health Insurance</span></li>
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
                                    <form class="form-inline app-head">
                                        {{--<div class="form-group">--}}
                                            {{--<div class="input-group">--}}
                                                {{--<div class="input-group-addon"><i class="fa">Your amount</i></div>--}}
                                                {{--<input type="text" ng-model="nas" class="form-control" id="exampleInputAmount" placeholder="Amount">--}}
                                                {{--<input type="hidden" ng-model="year">--}}
                                                {{--<div class="input-group-addon">৳</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                        {{--<div class="form-group">--}}
                                            {{--<div class="input-group">--}}
                                                {{--<div class="input-group-addon"><i class="fa">For</i></div>--}}
                                                {{--<select class="form-control">--}}
                                                    {{--<option value="1">01 - Years</option>--}}
                                                    {{--<option value="2">02 - Years</option>--}}
                                                    {{--<option value="3">03 - Years</option>--}}
                                                    {{--<option value="4">04 - Years</option>--}}
                                                    {{--<option value="5">05 - Years</option>--}}
                                                    {{--<option value="6">06 - Years</option>--}}
                                                    {{--<option value="7">07 - Years</option>--}}
                                                    {{--<option value="8">08 - Years</option>--}}
                                                    {{--<option value="9">09 - Years</option>--}}
                                                    {{--<option value="10">10 - Years</option>--}}
                                                    {{--<option value="11">11 - Years</option>--}}
                                                    {{--<option value="12">12 - Years</option>--}}
                                                    {{--<option value="13">13 - Years</option>--}}
                                                    {{--<option value="14">14 - Years</option>--}}
                                                    {{--<option value="15">15 - Years</option>--}}
                                                {{--</select>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                        {{--<div class="form-group">--}}
                                            {{--<div class="input-group">--}}
                                                {{--<div class="input-group-addon"><i class="fa">Upto Rate 14 %</i></div>--}}
                                                {{--<select class="form-control">--}}
                                                    {{--<option value="1">11.0 %</option>--}}
                                                    {{--<option value="2" selected>14.5 %</option>--}}
                                                    {{--<option value="3">11.5 %</option>--}}
                                                    {{--<option value="3">12.0 %</option>--}}
                                                    {{--<option value="3">12.5 %</option>--}}
                                                {{--</select>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                        <div class="form-group pull-right m-b-10">
                                            <div class="input-group">
                                                <div class="input-group-addon" title="Search by selected option"><i class="fa fa-search"></i></div>
                                                <div class="input-group-addon" title="Are you a salaried or business or others person?"><i class="fa"> I am a</i></div>
                                                <select class="form-control">
                                                    <option value="1">Salaried Person</option>
                                                    <option value="1">Salaried Person</option>
                                                    <option value="2">Business Person</option>
                                                    <option value="3">Others Person</option>
                                                </select>
                                            </div>
                                        </div>

                                    </form>
                                </div>

                                <div class="col-xs-12 col-sm-2 col-md-2"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12 b-item-apartment-block ralit-hide">
                        <div class="b-some-examples__item f-some-examples__item">
                            <div class="b-some-examples__item_action app-box">
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <i class="fa app-head">Bank Name</i>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <i class="fa app-head">Sum Insured</i>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <i class="fa app-head">Claim Ratio</i>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <i class="fa app-head">Installment Pay/m</i>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <i class="fa app-head">Premium</i>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <i class="fa app-head">Details</i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12 b-item-apartment-block" ng-if="v.insr_type == 7" ng-repeat="v in insurance_data | filter : nas">
                        <div class="b-some-examples__item f-some-examples__item b-hover">
                            <div class="b-some-examples__item_action app-box">
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <img src="@{{ 'ap/images/banks/'+v.bank.bank_image_url }}" class="img-app" alt="pic" title="@{{v.bank.bank_name}}">
                                    <p class="b-stars-group" style="font-size: 12px; margin-top: 4px">
                                        <span><b>@{{v.bank.bank_name | limitTo: 18 }}</b></span><br>
                                        <a href="" data-target="#@{{v.id}}pr" data-toggle="modal" >Give Review</a><br>
                                        <i class="fa fa-star is-active-stars"></i>
                                        <i class="fa fa-star is-active-stars"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </p>
                                </div>

                                <div class="col-xs-12 col-sm-2 col-md-2 nas">
                                    <div class="col-xs-7 t-a-r ralit-main">
                                        <i class="fa"><span class="ralit">Sum Insured : </span></i>
                                    </div>
                                    <div class="col-xs-5 col-sm-12 col-md-12">
                                        <i class="fa"><span class="ralit-r">@{{v.insr_sum_insured}} ৳</span></i>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-2 col-md-2 nas">
                                    <div class="col-xs-7 t-a-r ralit-main">
                                        <i class="fa"><span class="ralit">Claim Ratio: </span></i>
                                    </div>
                                    <div class="col-xs-5 col-sm-12 col-md-12">
                                        <i class="fa"><span class="ralit-r">@{{v.insr_claim_ratio}} %</span></i>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-2 col-md-2 nas">
                                    <div class="col-xs-7 t-a-r ralit-main">
                                        <i class="fa"><span class="ralit">Installment Pay/m : </span></i>
                                    </div>
                                    <div class="col-xs-5 col-sm-12 col-md-12">
                                        <i class="fa"><span class="ralit-r">@{{v.insr_monthly_payout}} ৳</span></i>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-2 col-md-2 nas m-b-5">
                                    <div class="col-xs-7 t-a-r ralit-main">
                                        <i class="fa"><span class="ralit">Premium : </span></i>
                                    </div>
                                    <div class="col-xs-5 col-sm-12 col-md-12">
                                        <i class="fa"><span class="ralit-r">@{{v.insr_premium}} ৳</span></i>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <a data-target="#@{{v.id}}av" data-toggle="modal" class="btn btn-success btn-xs col-xs-12 col-sm-12 col-md-12" title="Apply"> Apply</a>
                                        <a data-target="#@{{v.id}}ar" data-toggle="modal" class="btn btn-primary btn-xs  col-xs-12 col-sm-12 col-md-12" style="margin-top: 4px;margin-bottom: 4px;" title="Required Documents"> Required Documents</a>
                                        <a data-target="#@{{v.id}}ad" data-toggle="modal" class="btn btn-danger btn-xs m-b-5 col-xs-12 col-sm-12 col-md-12" title="View Details"> View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Start User_Rating -->
                        <!--End User_Rating -->

                        {{--Start Client_Review--}}
                        <div id="@{{v.id}}pr" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                {{--Start Modal--}}
                                <div class="modal-content modal-top">
                                    <div class="modal-header t-a-c">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <i class="fa app-tab-in">Give Your Review</i>
                                    </div>
                                    <div class="modal-body">
                                        <div class="">
                                            <div class="fa app-tab-in">Tell us what's on your mind</div>
                                            <hr class="b-hr" />
                                            {!! Form::open(array('url'=>'user-review', 'role'=>'form', 'method'=>'POST')) !!}
                                            <div class="row b-form-inline b-form-horizontal">
                                                <div class="col-xs-12">

                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="hidden" name="id" value="@{{ v.id }}">
                                                    <input type="hidden" name="table" value="33">
                                                    <div class="b-form-row">

                                                        <label class="b-form-horizontal__label t-a-r" for="create_account_name">Name : &nbsp;</label>
                                                        <div class="b-form-horizontal__input">
                                                            <input type="text" name="name" id="create_account_name" class="form-control" required placeholder="Write name..." />
                                                        </div>
                                                    </div>

                                                    <div class="b-form-row">
                                                        <label class="b-form-horizontal__label t-a-r" for="create_account_phone">E-Mail : &nbsp;</label>
                                                        <div class="b-form-horizontal__input">
                                                            <input type="email" name="email" id="create_account_phone" class="form-control" placeholder="yourMail@example.com" />
                                                        </div>
                                                    </div>

                                                    <div class="b-form-row">
                                                        <label class="b-form-horizontal__label t-a-r" for="create_account_phone">Give Your Openion : &nbsp;</label>
                                                        <div class="b-form-horizontal__input">
                                                            <textarea class="form-control" name="message" rows="4" required placeholder="Write a short review..."></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="b-form-row">
                                                        <div class="b-form-horizontal__label"></div>
                                                        <div class="b-form-horizontal__input">
                                                            <input type="submit" value="Review" class="btn btn-success btn-sm col-sm-12">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                {{--End Modal--}}
                            </div>
                        </div>
                        {{--End Client_Review--}}


                        {{--Start apply--}}
                        <div id="@{{v.id}}av" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                {{--Start Modal--}}
                                <div class="modal-content modal-top">
                                    <div class="modal-header t-a-c">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <i class="fa app-tab-in">Life Insurance</i>
                                    </div>
                                    <div class="modal-body">

                                        {{--<hr class="b-hr" />--}}
                                        {!! Form::open(array('url'=>'user-apply', 'role'=>'form', 'method'=>'POST')) !!}
                                        <div class="row b-form-inline b-form-horizontal m-l-15">
                                            <i class="fa text-success m-b-10">Apply here to fill up your information</i>

                                            <div class="col-xs-12">

                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="hidden" name="id" value="@{{ v.id }}">
                                                <input type="hidden" name="bank_id" value="@{{v.bank.id}}">
                                                <input type="hidden" name="table" value="55">

                                                <div class="b-form-row">
                                                    <label class="b-form-horizontal__label t-a-r" for="create_account_name">Name <span class="c-red">*</span> : &nbsp; </label>
                                                    <div class="b-form-horizontal__input" title="Needed Maximum 30 Character">
                                                        <input type="text" name="name" maxlength="30" id="create_account_name" class="form-control" placeholder="Enter name..." required />
                                                    </div>
                                                </div>
                                                <div class="b-form-row">
                                                    <label class="b-form-horizontal__label t-a-r" for="create_account_name">Position <span>*</span> : &nbsp; </label>
                                                    <div class="b-form-horizontal__input" title="Maximum 80 Character">
                                                        <input type="text" name="ocpn" maxlength="80" id="create_account_name" class="form-control" placeholder="Enter your ocupation..." />
                                                    </div>
                                                </div>
                                                <div class="b-form-row">
                                                    <label class="b-form-horizontal__label t-a-r" for="create_account_name">Organization <span>*</span> : &nbsp; </label>
                                                    <div class="b-form-horizontal__input" title="Needed Maximum 100 Character">
                                                        <input type="text" name="org" maxlength="100" id="create_account_name" class="form-control" placeholder="Enter ogranization" />
                                                    </div>
                                                </div>
                                                <div class="b-form-row">
                                                    <label class="b-form-horizontal__label t-a-r" for="create_account_name">Monthly Salary <span class="c-red">*</span> : &nbsp; </label>
                                                    <div class="b-form-horizontal__input">
                                                        <input type="number" name="salary" id="create_account_name" class="form-control" placeholder="00.00" required />
                                                    </div>
                                                </div>
                                                <div class="b-form-row">
                                                    <label class="b-form-horizontal__label t-a-r" for="create_account_phone">Mobile Number <span class="c-red">*</span> : &nbsp; </label>
                                                    <div class="b-form-horizontal__input">
                                                        <input type="number" name="mobile" id="create_account_phone" class="form-control" placeholder="01xxxxxxxxx" required />
                                                    </div>
                                                </div>
                                                <div class="b-form-row">
                                                    <label class="b-form-horizontal__label t-a-r" for="create_account_phone">When We Call You<span class="c-red">*</span>  &nbsp; </label>
                                                    <div class="b-form-horizontal__input">
                                                        <input type="time" name="mobile_call" id="create_account_phone" class="form-control" required />
                                                    </div>
                                                </div>
                                                <div class="b-form-row">
                                                    <label class="b-form-horizontal__label t-a-r" for="create_account_phone">E-Mail <span class="c-red">*</span> : &nbsp; </label>
                                                    <div class="b-form-horizontal__input">
                                                        <input type="email" name="email" id="create_account_phone" class="form-control" required placeholder="example@finfobd.com" />
                                                    </div>
                                                </div>
                                                <div class="b-form-row">
                                                    <label class="b-form-horizontal__label t-a-r" for="create_account_phone">Location <span class="c-red">*</span> : &nbsp; </label>
                                                    <div class="b-form-horizontal__input">
                                                        <textarea class="form-control" name="location" rows="3" required placeholder="Write your location..."></textarea>
                                                    </div>
                                                </div>

                                                <div class="b-form-row">
                                                    <div class="b-form-horizontal__label"></div>
                                                    <div class="b-form-horizontal__input">
                                                        <input type="submit" value="Apply" class="btn btn-success btn-sm col-sm-12">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {!! Form::close() !!}

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                {{--End Modal--}}
                            </div>
                        </div>
                        {{--End apply--}}

                        {{--Start Required Documents--}}
                        <div id="@{{v.id}}ar" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                {{--Start Modal--}}
                                <div class="modal-content modal-top">
                                    <div class="modal-header t-a-c">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <i class="fa app-tab-in">Required Document For Life Insurance</i>
                                    </div>
                                    <div class="modal-body">
                                        <div class="">
                                            <div class="row b-form-inline b-form-horizontal">
                                                <div class="col-xs-12">
                                                    <div class="b-form-row" ng-bind-html="v.insr_requirements"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                {{--End Modal--}}
                            </div>
                        </div>
                        {{--End Required Documents--}}

                        {{--Start View Details--}}
                        <div id="@{{v.id}}ad" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                {{--Start Modal--}}
                                <div class="modal-content modal-top">
                                    <div class="modal-header t-a-c">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <i class="fa app-tab-in">Details Information For Life Insurance</i>
                                    </div>
                                    <div class="modal-body">
                                        <div class="">
                                            <div class="fa app-tab-in" style="margin-top: 10px;">ADDITIONAL FEATURES </div>
                                            <hr class="b-hr" style="margin-bottom: 12px; margin-top: 12px;" />
                                            <div class="row b-form-inline b-form-horizontal">
                                                <div class="col-xs-12">
                                                    <div class="b-form-row" ng-bind-html="v.insr_features_benefits"></div>
                                                </div>
                                            </div>

                                            <div class="fa app-tab-in" style="margin-top: 10px;">ELIGIBILITY </div>
                                            <hr class="b-hr" style="margin-bottom: 12px; margin-top: 12px;" />
                                            <div class="row b-form-inline b-form-horizontal">
                                                <div class="col-xs-12">
                                                    <div class="b-form-row" ng-bind-html="v.insr_eligibility"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                {{--End Modal--}}
                            </div>
                        </div>
                        {{--End View Details--}}

                    </div>
                </div>



                {{--Start Modal Rating--}}
                <div id="pp" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        {{--Start Modal--}}
                        <div class="modal-content modal-top">
                            <div class="modal-header t-a-c">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <i class="fa app-tab-in">Give Your Rating</i>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-12 f-s-14 f-f-s">


                                    {!! Form::open(array('url'=>'ryryry', 'role'=>'form', 'method'=>'POST', 'files'=>'true')) !!}
                                    <div class="form-horizontal">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="id" value="">
                                        <input type="hidden" name="t_id" value="33">

                                        <div class="form-group">
                                            <label for="exampleInputName2" class="col-sm-4 control-label">Change Bank:</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="bank_id" required>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <hr>

                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <div class="col-sm-offset-4 col-sm-10 m-t-15">
                                                <input type="submit" value="Submit" class="btn btn-success col-sm-4">
                                            </div>
                                        </div>
                                    </div>
                                    {!! Form::close() !!}
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
    </div>

@endsection