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
                    <h1 class="f-primary-l c-default"><i class="fa fa-card"> Credit Card</i></h1>
                    <div class="f-primary-l f-inner-page-header_title-add c-senary"><i class="fa">Choose your credit card from here</i></div>
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
                    <li><a href="#"><i class="fa fa-home"></i>Card</a></li>
                    <li><i class="fa fa-angle-right"></i><span>Credit Card</span></li>
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

                    <div class="col-sm-12 col-md-12 b-item-apartment-block ralit-hide">
                        <div class="b-some-examples__item f-some-examples__item">
                            <div class="b-some-examples__item_action app-box">
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <i class="fa app-head">Bank Name</i>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <i class="fa app-head">Interest Per Thousand</i>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <i class="fa app-head">Interest Free Period</i>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <i class="fa app-head">OverLimit Free</i>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <i class="fa app-head">Process Free</i>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <i class="fa app-head">Details Information</i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12 b-item-apartment-block" ng-repeat="v in card_data | filter : nas">
                        <div class="b-some-examples__item f-some-examples__item b-hover">
                            <div class="b-some-examples__item_action app-box">
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <img src="@{{ 'ap/images/card_category/'+v.cardcategorie.cc_image_url }}" class="img-app" alt="pic" title="@{{v.cardcategorie.cc_name}}">
                                    {{--<img src="@{{ 'ap/images/banks/'+v.bank.bank_image_url }}" class="img-app" alt="pic" title="@{{v.bank.bank_name}}">--}}
                                    <p class="b-stars-group" style="font-size: 12px; margin-top: 4px;">
                                        <span style="color: red;" title="@{{v.cardcategorie.cc_name}}"><b>@{{v.cardcategorie.cc_name | limitTo: 18 }}</b></span><br>
                                        <span title="@{{v.bank.bank_name}}"><b>@{{v.bank.bank_name | limitTo: 18 }}</b></span><br>
                                        <a href="" data-target="#@{{v.id}}pr" data-toggle="modal" title="Click to give your review">Give Review</a><br>
                                        <i class="fa fa-star is-active-stars"></i>
                                        <i class="fa fa-star is-active-stars"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </p>
                                </div>

                                <div class="col-xs-12 col-sm-2 col-md-2 nas">
                                    <div class="col-xs-7 t-a-r ralit-main">
                                        <i class="fa"><span class="ralit">Interest Per Thousand: </span></i>
                                    </div>
                                    <div class="col-xs-5 col-sm-12 col-md-12">
                                        <i class="fa"><span class="ralit-r">@{{v.c_interest_per_day}} ৳</span></i>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-2 col-md-2 nas">
                                    <div class="col-xs-7 t-a-r ralit-main">
                                        <i class="fa"><span class="ralit">Interest Free Period: </span></i>
                                    </div>
                                    <div class="col-xs-5 col-sm-12 col-md-12">
                                        <i class="fa"><span class="ralit-r">@{{v.c_interest_free_period}} %</span></i>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-2 col-md-2 nas">
                                    <div class="col-xs-7 t-a-r ralit-main">
                                        <i class="fa"><span class="ralit">OverLimit Free : </span></i>
                                    </div>
                                    <div class="col-xs-5 col-sm-12 col-md-12">
                                        <i class="fa"><span class="ralit-r">@{{v.c_over_limit_free}} ৳</span></i>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-2 col-md-2 nas">
                                    <div class="col-xs-7 t-a-r ralit-main">
                                        <i class="fa"><span class="ralit">Process Free : </span></i>
                                    </div>
                                    <div class="col-xs-5 col-sm-12 col-md-12">
                                        <i class="fa"><span class="ralit-r">@{{v.c_cheque_process_free}} ৳</span></i>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <a data-target="#@{{v.id}}av" data-toggle="modal" class="btn btn-success btn-xs col-xs-12 col-sm-12 col-md-12" title="Apply"> Apply</a>
                                        <a data-target="#@{{v.id}}ar" data-toggle="modal" class="btn btn-primary btn-xs  col-xs-12 col-sm-12 col-md-12" style="margin-top: 4px;margin-bottom: 4px;" title="Required Documents"> Required Documents</a>
                                        <a data-target="#@{{v.id}}ad" data-toggle="modal" class="btn btn-danger btn-xs m-b-5 col-xs-12 col-sm-12 col-md-12" title="View Details"> Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{--Start_Modal Client_Review--}}
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
                                                    <input type="hidden" name="table" value="77">
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

                                        {{--start review_area--}}
                                        <hr class="b-hr" />
                                        <div class="fa app-tab-in m-b-20">People says about this ...</div>
                                        <div class=""  ng-repeat="r in v.reviews">
                                            <div class="b-mention-item">
                                                <div class="b-mention-item__user f-center">
                                                    {{--<div class="b-mention-item__user_img">--}}
                                                    {{--<img class="fade-in-animate" data-retina src="img/users/user_md.png" alt="">--}}
                                                    {{--</div>--}}
                                                    <div class="b-mention-item__user_info f-mention-item__user_info f-center--xs f-left">
                                                        <div class="f-mention-item__user_name f-primary-b" title="@{{ r.r_name }}">
                                                            <i class="fa fa-user"> @{{ r.r_name | limitTo: 14 }} @{{r.r_name.length > 14 ? '...' : ''}}</i>
                                                        </div>
                                                        <div class="f-mention-item__user_position" title="@{{ r.r_email }}">
                                                            @{{ r.r_email | limitTo: 16 }} @{{r.r_email.length > 16 ? '...' : ''}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="b-remaining">
                                                    <div class="b-mention-item__comment">
                                                        <div class="b-mention-item__comment_text f-mention-item__comment_text">
                                                            @{{ r.r_message }}<br/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{--end review_area--}}

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                {{--End Modal--}}
                            </div>
                        </div>
                        {{--End_Modal Client_Review--}}


                        {{--Start Modal apply--}}
                        <div id="@{{v.id}}av" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                {{--Start Modal--}}
                                <div class="modal-content modal-top">
                                    <div class="modal-header t-a-c">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <i class="fa app-tab-in">Credit Card</i>
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
                                                <input type="hidden" name="table" value="77">

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
                        {{--End Modal apply--}}

                        {{--Start Modal Required Documents--}}
                        <div id="@{{v.id}}ar" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                {{--Start Modal--}}
                                <div class="modal-content modal-top">
                                    <div class="modal-header t-a-c">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <i class="fa app-tab-in">Required Document For Credit Card</i>
                                    </div>
                                    <div class="modal-body">
                                        <div class="">
                                            <div class="row b-form-inline b-form-horizontal">
                                                <div class="col-xs-12">
                                                    <div class="b-form-row" ng-bind-html="v.c_requirements"></div>
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
                        {{--End Modal Required Documents--}}

                        {{--Start Modal View Details--}}
                        <div id="@{{v.id}}ad" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                {{--Start Modal--}}
                                <div class="modal-content modal-top">
                                    <div class="modal-header t-a-c">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <i class="fa app-tab-in">Details Information For Home Loan</i>
                                    </div>
                                    <div class="modal-body">
                                        <div class="">
                                            <div class="fa app-tab-in" style="margin-top: 10px;">ADDITIONAL FEATURES </div>
                                            <hr class="b-hr" style="margin-bottom: 12px; margin-top: 12px;" />
                                            <div class="row b-form-inline b-form-horizontal">
                                                <div class="col-xs-12">
                                                    <div class="b-form-row" ng-bind-html="v.c_features_benefits"></div>
                                                </div>
                                            </div>

                                            <div class="fa app-tab-in" style="margin-top: 10px;">ELIGIBILITY </div>
                                            <hr class="b-hr" style="margin-bottom: 12px; margin-top: 12px;" />
                                            <div class="row b-form-inline b-form-horizontal">
                                                <div class="col-xs-12">
                                                    <div class="b-form-row" ng-bind-html="v.c_eligibility"></div>
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
                        {{--End Modal View Details--}}

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection