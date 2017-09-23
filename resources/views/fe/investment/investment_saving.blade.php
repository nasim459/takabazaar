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
                    <h1 class="f-primary-l c-default"><i class="fa fa-briefcase"> Investment Saving Account</i></h1>
                    <div class="f-primary-l f-inner-page-header_title-add c-senary"><i class="fa">Take your saving account from here</i></div>
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
                    <li><i class="fa fa-angle-right"></i><span>Home Loan</span></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="l-inner-page-container">
                <div class="row">

                    <div class="col-sm-12 col-md-12 b-item-apartment-block">
                        <div class="b-some-examples__item f-some-examples__item">
                            <div class="b-some-examples__item_action- -app-box"style="margin-top: 13px;">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <i class="fa fa-search f-s-20 m-b-10 t-a-c"> Search here ...</i>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <form class="form-inline app-head">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa">Your amount</i></div>
                                                <input type="text" ng-model="nas" class="form-control" id="exampleInputAmount" placeholder="Amount">
                                                <input type="hidden" ng-model="year">
                                                <div class="input-group-addon">৳</div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa">For</i></div>
                                                <select class="form-control">
                                                    <option value="1">01 - Years</option>
                                                    <option value="2">02 - Years</option>
                                                    <option value="3">03 - Years</option>
                                                    <option value="4">04 - Years</option>
                                                    <option value="5">05 - Years</option>
                                                    <option value="6">06 - Years</option>
                                                    <option value="7">07 - Years</option>
                                                    <option value="8">08 - Years</option>
                                                    <option value="9">09 - Years</option>
                                                    <option value="10">10 - Years</option>
                                                    <option value="11">11 - Years</option>
                                                    <option value="12">12 - Years</option>
                                                    <option value="13">13 - Years</option>
                                                    <option value="14">14 - Years</option>
                                                    <option value="15">15 - Years</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa">Upto Rate 14 %</i></div>
                                                <select class="form-control">
                                                    <option value="1">11.0 %</option>
                                                    <option value="2" selected>14.5 %</option>
                                                    <option value="3">11.5 %</option>
                                                    <option value="3">12.0 %</option>
                                                    <option value="3">12.5 %</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group pull-right">
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
                                    <i class="fa app-head">Interest Rate</i>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <i class="fa app-head">Amount UpTo</i>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <i class="fa app-head">Tenure Range</i>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <i class="fa app-head">Person</i>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <i class="fa app-head">Details</i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12 b-item-apartment-block" ng-repeat="v in investment_data | filter : nas">
                        <div class="b-some-examples__item f-some-examples__item b-hover">
                            <div class="b-some-examples__item_action app-box">
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <img src="@{{ 'ap/images/banks/'+v.bank.bank_image_url }}" class="img-app" alt="pic" title="@{{v.bank.bank_name}}">
                                    <p class="b-stars-group" style="font-size: 12px; margin-top: 4px">
                                        <span><b>@{{v.bank.bank_name | limitTo: 18 }}</b></span><br>
                                        <a href="" data-target="#@{{v.id}}pr" data-toggle="modal" >Give Review</a><br>
                                        <i data-target="#@{{v.id}}p" data-toggle="modal" class="fa fa-star is-active-stars"></i>
                                        <i data-target="#@{{v.id}}p" data-toggle="modal" class="fa fa-star is-active-stars"></i>
                                        <i data-target="#@{{v.id}}p" data-toggle="modal" class="fa fa-star"></i>
                                        <i data-target="#@{{v.id}}p" data-toggle="modal" class="fa fa-star"></i>
                                        <i data-target="#@{{v.id}}p" data-toggle="modal" class="fa fa-star"></i>
                                    </p>
                                </div>

                                <div class="col-xs-12 col-sm-2 col-md-2 nas">
                                    <div class="col-xs-7 t-a-r ralit-main">
                                        <i class="fa"><span class="ralit">Interest Rate : </span></i>
                                    </div>
                                    <div class="col-xs-5 col-sm-12 col-md-12">
                                        <i class="fa"><span class="ralit-r">@{{v.invst_tenure_rate}} %</span></i>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-2 col-md-2 nas">
                                    <div class="col-xs-7 t-a-r ralit-main">
                                        <i class="fa"><span class="ralit">Amount UpTo: </span></i>
                                    </div>
                                    <div class="col-xs-5 col-sm-12 col-md-12">
                                        <i class="fa"><span class="ralit-r">@{{v.invst_amount_upto}} ৳</span></i>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-2 col-md-2 nas">
                                    <div class="col-xs-7 t-a-r ralit-main">
                                        <i class="fa"><span class="ralit">Tenure Range : </span></i>
                                    </div>
                                    <div class="col-xs-5 col-sm-12 col-md-12">
                                        <i class="fa"><span class="ralit-r">@{{v.invst_tenure_rate}} ৳</span></i>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-2 col-md-2 nas m-b-5">
                                    <div class="col-xs-7 t-a-r ralit-main">
                                        <i class="fa"><span class="ralit">Person : </span></i>
                                    </div>
                                    <div class="col-xs-5 col-sm-12 col-md-12">
                                        <i class="fa"><span class="ralit-r" ng-if="v.invst_person_type == 1">Salaried</span></i>
                                        <i class="fa"><span class="ralit-r" ng-if="v.invst_person_type == 2">Person</span></i>
                                        <i class="fa"><span class="ralit-r" ng-if="v.invst_person_type == 3">Susiness</span></i>
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
                        <div id="@{{v.id}}p" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!--start Modal content-->
                                <div class="modal-content modal-top">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <a href=""><i class="fa app-tab-in">Choose Your Option To Give Your Rating</i></a>
                                    </div>
                                    <div class="modal-body" style="overflow: hidden">
                                        <div class="col-md-12">
                                            <div class="col-md-12 f-s-14 f-f-s">


                                                {!! Form::open(array('url'=>'user-rating', 'role'=>'form', 'method'=>'POST')) !!}
                                                <div class="form-horizontal">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="hidden" name="id" value="@{{ v.id }}">
                                                    <input type="hidden" name="t_id" value="33">
                                                    <input type="hidden" name="t_id" value="">

                                                    <div class="form-group" style="margin-bottom: -15px;">
                                                        <label for="exampleInputName2" class="col-xs-12 col-sm-6 control-label m-t-20">
                                                            <p class="b-stars-group" style="font-size: 18px;">
                                                                <i class="fa fa-star is-active-stars"></i>
                                                                <i class="fa fa-star is-active-stars"></i>
                                                                <i class="fa fa-star is-active-stars"></i>
                                                                <i class="fa fa-star is-active-stars"></i>
                                                                <i class="fa fa-star is-active-stars"></i>
                                                            </p>
                                                        </label>
                                                        <div class="col-xs-12 col-sm-4">
                                                            <input type="radio" name="rating" value="5" checked><span class="m-l-10">5 Start</span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group" style="margin-bottom: -15px;">
                                                        <label for="exampleInputName2" class="col-xs-12 col-sm-6 control-label">
                                                            <p class="b-stars-group" style="font-size: 18px;">
                                                                <i class="fa fa-star is-active-stars"></i>
                                                                <i class="fa fa-star is-active-stars"></i>
                                                                <i class="fa fa-star is-active-stars"></i>
                                                                <i class="fa fa-star is-active-stars"></i>
                                                                <i class="fa fa-star"></i>
                                                            </p>
                                                        </label>
                                                        <div class="col-xs-12 col-sm-4">
                                                            <input type="radio" name="rating" value="4"><span class="m-l-10">4 Start</span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group" style="margin-bottom: -15px;">
                                                        <label for="exampleInputName2" class="col-xs-12 col-sm-6 control-label">
                                                            <p class="b-stars-group" style="font-size: 18px;">
                                                                <i class="fa fa-star is-active-stars"></i>
                                                                <i class="fa fa-star is-active-stars"></i>
                                                                <i class="fa fa-star is-active-stars"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </p>
                                                        </label>
                                                        <div class="col-xs-12 col-sm-4">
                                                            <input type="radio" name="rating" value="3"><span class="m-l-10">3 Start</span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group" style="margin-bottom: -15px;">
                                                        <label for="exampleInputName2" class="col-xs-12 col-sm-6 control-label">
                                                            <p class="b-stars-group" style="font-size: 18px;">
                                                                <i class="fa fa-star is-active-stars"></i>
                                                                <i class="fa fa-star is-active-stars"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </p>
                                                        </label>
                                                        <div class="col-xs-12 col-sm-4">
                                                            <input type="radio" name="rating" value="2"><span class="m-l-10">2 Start</span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputName2" class="col-xs-12 col-sm-6 control-label">
                                                            <p class="b-stars-group" style="font-size: 18px;">
                                                                <i class="fa fa-star is-active-stars"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </p>
                                                        </label>
                                                        <div class="col-xs-12 col-sm-4">
                                                            <input type="radio" name="rating" value="1"><span class="m-l-10">1 Start</span>
                                                        </div>
                                                    </div>
                                                    <hr>

                                                </div>

                                                <div class="form-horizontal">
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-4 col-sm-10 m-t-15">
                                                            <input type="submit" value="Submit Rating" class="btn btn-success col-xs-12 col-sm-4">
                                                        </div>
                                                    </div>
                                                </div>
                                                {!! Form::close() !!}
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                <!--end Modal content-->

                            </div>
                        </div>
                        <!--End User_Rating -->

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
                                                    <input type="hidden" name="table" value="44">
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
                        {{--End_Modal Client_Review--}}


                        {{--Start Modal apply--}}
                        <div id="@{{v.id}}av" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                {{--Start Modal--}}
                                <div class="modal-content modal-top">
                                    <div class="modal-header t-a-c">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <i class="fa app-tab-in">Home Loan</i>
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
                                                <input type="hidden" name="table" value="33">

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
                                        <i class="fa app-tab-in">Required Document For Home Loan</i>
                                    </div>
                                    <div class="modal-body">
                                        <div class="">
                                            <div class="row b-form-inline b-form-horizontal">
                                                <div class="col-xs-12">
                                                    <div class="b-form-row" ng-bind-html="v.invst_requirements"></div>
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
                                                    <div class="b-form-row" ng-bind-html="v.invst_features_benefits"></div>
                                                </div>
                                            </div>

                                            <div class="fa app-tab-in" style="margin-top: 10px;">ELIGIBILITY </div>
                                            <hr class="b-hr" style="margin-bottom: 12px; margin-top: 12px;" />
                                            <div class="row b-form-inline b-form-horizontal">
                                                <div class="col-xs-12">
                                                    <div class="b-form-row" ng-bind-html="v.invst_eligibility"></div>
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