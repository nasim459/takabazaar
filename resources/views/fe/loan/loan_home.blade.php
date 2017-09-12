@section('fe_maincontent')
    <div class="j-menu-container"></div>

    <div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">
        <div class="b-inner-page-header__content">
            <div class="container">
                <h1 class="f-primary-l c-default"><i class="fa fa-home"> Home Lone</i></h1>
                <div class="f-primary-l f-inner-page-header_title-add c-senary"><i class="fa">Choose your loan from here</i></div>
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
                                <div class="col-xs-12 col-sm-2 col-md-2"></div>

                                <div class="col-xs-12 col-sm-12 col-md-8">
                                    <form class="form-inline app-head">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa">I want to borrow</i></div>
                                                <input type="text" ng-model="nas" class="form-control" id="exampleInputAmount" placeholder="Amount">
                                                <div class="input-group-addon">৳</div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa">For</i></div>
                                                <select class="form-control">
                                                    <option value="1">01 - Years</option>
                                                    <option value="2" selected>02 - Years</option>
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
                                    </form>
                                </div>

                                <div class="col-xs-12 col-sm-2 col-md-2"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12 b-item-apartment-block">
                        <div class="b-some-examples__item f-some-examples__item">
                            <div class="b-some-examples__item_action app-box">
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <i class="fa app-head">Bank Name</i>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <i class="fa app-head">Interest Rate</i>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <i class="fa app-head">Monthly Installment</i>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <i class="fa app-head">Total Payable Interest</i>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <i class="fa app-head">Years / Period</i>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <i class="fa app-head">Details</i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12 b-item-apartment-block" ng-repeat="v in display_data | filter : nas">
                        <div class="b-some-examples__item f-some-examples__item b-hover">
                            <div class="b-some-examples__item_action app-box">
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <img src="@{{ 'ap/images/banks/'+v.bank.bank_image_url }}" class="img-app" alt="pic" title="@{{v.bank.bank_name}}">
                                    <p class="b-stars-group" style="font-size: 12px; margin-top: 4px">
                                        <span><b>@{{v.bank.bank_name | limitTo: 18 }}</b></span><br>
                                        <span>5020 views</span><br>
                                        <i data-target="#@{{v.id}}p" data-toggle="modal" class="fa fa-star is-active-stars"></i>
                                        <i data-target="#@{{v.id}}p" data-toggle="modal" class="fa fa-star is-active-stars"></i>
                                        <i data-target="#@{{v.id}}p" data-toggle="modal" class="fa fa-star"></i>
                                        <i data-target="#@{{v.id}}p" data-toggle="modal" class="fa fa-star"></i>
                                        <i data-target="#@{{v.id}}p" data-toggle="modal" class="fa fa-star"></i>
                                    </p>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2 nas">
                                    <i class="fa">@{{v.loan_interest_rate}} %</i>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2 nas">
                                    <i class="fa">@{{v.loan_monthly_interest}} ৳</i>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2 nas">
                                    <i class="fa">@{{v.loan_interest_payable}} ৳</i>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2 nas m-b-5">
                                    <i class="fa">@{{v.loan_period}} years</i>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <a data-target="#apply" data-toggle="modal" class="btn btn-success btn-xs col-xs-12 col-md-12"> Apply</a>
                                    <a data-target="#document" data-toggle="modal" class="btn btn-primary btn-xs  col-xs-12 col-md-12" style="margin-top: 4px;margin-bottom: 4px;"> Required Documents</a>
                                    <a data-target="#details" data-toggle="modal" class="btn btn-danger btn-xs m-b-5 col-xs-12 col-md-12"> View Details</a>
                                </div>
                            </div>
                        </div>

                        <!--start user_rating -->
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
                                                    <input type="text" name="t_id" value="">


                                                    {{--@if(!empty($_SERVER["HTTP_CLIENT_IP"]))--}}
                                                        {{--$IP = $_SERVER["HTTP_CLIENT_IP"];--}}
                                                    {{--@elseif(!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))--}}
                                                        {{--$IP = $_SERVER["HTTP_X_FORWARDED_FOR"];--}}
                                                    {{--@else--}}
                                                        {{--$IP = $_SERVER["REMOTE_ADDR"]--}}
                                                        {{--@endif--}}
                                                    {{--{{ $IP }}--}}


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
                        <!--end user_rating -->
                    </div>
                </div>



                {{--Start Modal apply--}}
                <div id="apply" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        {{--Start Modal--}}
                        <div class="modal-content modal-top">
                            <div class="modal-header t-a-c">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <i class="fa app-tab-in">Home Loan</i>
                            </div>
                            <div class="modal-body">
                                <div class="">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#tabs_10" aria-controls="tabs_10" role="tab" data-toggle="tab">Apply</a></li>
                                        <li role="presentation"><a href="#tabs_11" aria-controls="tabs_11" role="tab" data-toggle="tab">Required Documents</a></li>
                                        <li role="presentation"><a href="#tabs_12" aria-controls="tabs_12" role="tab" data-toggle="tab">View Details</a></li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content app-tab">
                                        <div id="tabs_10" role="tabpanel" class="tab-pane active">
                                            <div class="fa app-tab-in">Apply here to fill up your information</div>
                                            <hr class="b-hr" />
                                            {!! Form::open(array('url'=>'--', 'role'=>'form', 'method'=>'POST')) !!}
                                            <div class="row b-form-inline b-form-horizontal">
                                                <div class="col-xs-12">
                                                    <div class="b-form-row">
                                                        <label class="b-form-horizontal__label" for="create_account_name">Name</label>
                                                        <div class="b-form-horizontal__input">
                                                            <input type="text" id="create_account_name" class="form-control" required />
                                                        </div>
                                                    </div>
                                                    <div class="b-form-row">
                                                        <label class="b-form-horizontal__label" for="create_account_name">Occupation</label>
                                                        <div class="b-form-horizontal__input">
                                                            <input type="text" id="create_account_name" class="form-control" required />
                                                        </div>
                                                    </div>
                                                    <div class="b-form-row">
                                                        <label class="b-form-horizontal__label" for="create_account_name">Organization</label>
                                                        <div class="b-form-horizontal__input">
                                                            <input type="text" id="create_account_name" class="form-control" required />
                                                        </div>
                                                    </div>
                                                    <div class="b-form-row">
                                                        <label class="b-form-horizontal__label" for="create_account_name">Monthly Salary</label>
                                                        <div class="b-form-horizontal__input">
                                                            <input type="text" id="create_account_name" class="form-control" required />
                                                        </div>
                                                    </div>
                                                    <div class="b-form-row">
                                                        <label class="b-form-horizontal__label" for="create_account_phone">Mobile Number</label>
                                                        <div class="b-form-horizontal__input">
                                                            <input type="number" id="create_account_phone" class="form-control" required />
                                                        </div>
                                                    </div>
                                                    <div class="b-form-row">
                                                        <label class="b-form-horizontal__label" for="create_account_phone">E-Mail</label>
                                                        <div class="b-form-horizontal__input">
                                                            <input type="email" id="create_account_phone" class="form-control" required />
                                                        </div>
                                                    </div>
                                                    <div class="b-form-row">
                                                        <label class="b-form-horizontal__label" for="create_account_phone">Address</label>
                                                        <div class="b-form-horizontal__input">
                                                            <textarea class="form-control" rows="3" required></textarea>
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

                                        <div id="tabs_11" role="tabpanel" class="tab-pane">
                                            <div class="fa app-tab-in">Essential Document</div>
                                            <hr class="b-hr" style="margin-bottom: 12px; margin-top: 12px;" />
                                            <div class="row b-form-inline b-form-horizontal">
                                                <div class="col-xs-12">
                                                    <div class="b-form-row">
                                                        Lab print photo 2 copy<br>
                                                        NID clear copy both<br>
                                                        TIN Certificate<br>
                                                        Bank statement of last 1 year<br>
                                                        Trade license min 3 years<br>
                                                        Visiting card<br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="tabs_12" role="tabpanel" class="tab-pane">
                                            <div class="fa app-tab-in">FEES AND CHARGES</div>
                                            <hr class="b-hr" style="margin-bottom: 12px; margin-top: 12px;" />
                                            <div class="row b-form-inline b-form-horizontal">
                                                <div class="col-xs-12">
                                                    <div class="b-form-row">
                                                        Processing Fee:1 %+15% VAT  of the approved loan amount.<br>
                                                        Early Adjustment Fee: 2%+ 15% VAT within 5 years 1%+ 15% VAT  After 5 years.<br>
                                                        Partial Payment Fee : 2%+ 15% VAT within 5 years 1%+ 15% VAT After 5 years.<br>
                                                        Penal Charges :2%+ 15% VAT Per month on overdue amount<br>
                                                        Post approval Quotation Change Fee: Tk. 1000 per change of quotation.<br>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="fa app-tab-in" style="margin-top: 10px;">ADDITIONAL FEATURES </div>
                                            <hr class="b-hr" style="margin-bottom: 12px; margin-top: 12px;" />
                                            <div class="row b-form-inline b-form-horizontal">
                                                <div class="col-xs-12">
                                                    <div class="b-form-row">
                                                        Processing Fee:1 %+15% VAT  of the approved loan amount.<br>
                                                        Early Adjustment Fee: 2%+ 15% VAT within 5 years 1%+ 15% VAT  After 5 years.<br>
                                                        Partial Payment Fee : 2%+ 15% VAT within 5 years 1%+ 15% VAT After 5 years.<br>
                                                        Penal Charges :2%+ 15% VAT Per month on overdue amount<br>
                                                        Post approval Quotation Change Fee: Tk. 1000 per change of quotation.<br>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="fa app-tab-in" style="margin-top: 10px;">ELIGIBILITY </div>
                                            <hr class="b-hr" style="margin-bottom: 12px; margin-top: 12px;" />
                                            <div class="row b-form-inline b-form-horizontal">
                                                <div class="col-xs-12">
                                                    <div class="b-form-row">
                                                        Minimum Income : BDT 50,000<br>
                                                        Minimum Trade Licence Age: 3 years<br>
                                                        Age: 23 years to 65 years<br>
                                                    </div>
                                                </div>
                                            </div>
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
                {{--End Modal apply--}}

                {{--Start Modal apply--}}
                <div id="document" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        {{--Start Modal--}}
                        <div class="modal-content modal-top">
                            <div class="modal-header t-a-c">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <i class="fa app-tab-in">Home Loan</i>
                            </div>
                            <div class="modal-body">
                                <div class="">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation"><a href="#tabs_13" aria-controls="tabs_13" role="tab" data-toggle="tab">Apply</a></li>
                                        <li role="presentation" class="active"><a href="#tabs_14" aria-controls="tabs_14" role="tab" data-toggle="tab">Required Documents</a></li>
                                        <li role="presentation"><a href="#tabs_15" aria-controls="tabs_15" role="tab" data-toggle="tab">View Details</a></li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content app-tab">
                                        <div id="tabs_13" role="tabpanel" class="tab-pane">
                                            <div class="fa app-tab-in">Apply here to fill up your information</div>
                                            <hr class="b-hr" />
                                            {!! Form::open(array('url'=>'--', 'role'=>'form', 'method'=>'POST')) !!}
                                            <div class="row b-form-inline b-form-horizontal">
                                                <div class="col-xs-12">
                                                    <div class="b-form-row">
                                                        <label class="b-form-horizontal__label" for="create_account_name">Name</label>
                                                        <div class="b-form-horizontal__input">
                                                            <input type="text" id="create_account_name" class="form-control" required />
                                                        </div>
                                                    </div>
                                                    <div class="b-form-row">
                                                        <label class="b-form-horizontal__label" for="create_account_name">Occupation</label>
                                                        <div class="b-form-horizontal__input">
                                                            <input type="text" id="create_account_name" class="form-control" required />
                                                        </div>
                                                    </div>
                                                    <div class="b-form-row">
                                                        <label class="b-form-horizontal__label" for="create_account_name">Organization</label>
                                                        <div class="b-form-horizontal__input">
                                                            <input type="text" id="create_account_name" class="form-control" required />
                                                        </div>
                                                    </div>
                                                    <div class="b-form-row">
                                                        <label class="b-form-horizontal__label" for="create_account_name">Monthly Salary</label>
                                                        <div class="b-form-horizontal__input">
                                                            <input type="text" id="create_account_name" class="form-control" required />
                                                        </div>
                                                    </div>
                                                    <div class="b-form-row">
                                                        <label class="b-form-horizontal__label" for="create_account_phone">Mobile Number</label>
                                                        <div class="b-form-horizontal__input">
                                                            <input type="number" id="create_account_phone" class="form-control" required />
                                                        </div>
                                                    </div>
                                                    <div class="b-form-row">
                                                        <label class="b-form-horizontal__label" for="create_account_phone">E-Mail</label>
                                                        <div class="b-form-horizontal__input">
                                                            <input type="email" id="create_account_phone" class="form-control" required />
                                                        </div>
                                                    </div>
                                                    <div class="b-form-row">
                                                        <label class="b-form-horizontal__label" for="create_account_phone">Address</label>
                                                        <div class="b-form-horizontal__input">
                                                            <textarea class="form-control" rows="3" required></textarea>
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

                                        <div id="tabs_14" role="tabpanel" class="tab-pane active">
                                            <div class="fa app-tab-in">Essential Document</div>
                                            <hr class="b-hr" style="margin-bottom: 12px; margin-top: 12px;" />
                                            <div class="row b-form-inline b-form-horizontal">
                                                <div class="col-xs-12">
                                                    <div class="b-form-row">
                                                        Lab print photo 2 copy<br>
                                                        NID clear copy both<br>
                                                        TIN Certificate<br>
                                                        Bank statement of last 1 year<br>
                                                        Trade license min 3 years<br>
                                                        Visiting card<br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="tabs_15" role="tabpanel" class="tab-pane">
                                            <div class="fa app-tab-in">FEES AND CHARGES</div>
                                            <hr class="b-hr" style="margin-bottom: 12px; margin-top: 12px;" />
                                            <div class="row b-form-inline b-form-horizontal">
                                                <div class="col-xs-12">
                                                    <div class="b-form-row">
                                                        Processing Fee:1 %+15% VAT  of the approved loan amount.<br>
                                                        Early Adjustment Fee: 2%+ 15% VAT within 5 years 1%+ 15% VAT  After 5 years.<br>
                                                        Partial Payment Fee : 2%+ 15% VAT within 5 years 1%+ 15% VAT After 5 years.<br>
                                                        Penal Charges :2%+ 15% VAT Per month on overdue amount<br>
                                                        Post approval Quotation Change Fee: Tk. 1000 per change of quotation.<br>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="fa app-tab-in" style="margin-top: 10px;">ADDITIONAL FEATURES </div>
                                            <hr class="b-hr" style="margin-bottom: 12px; margin-top: 12px;" />
                                            <div class="row b-form-inline b-form-horizontal">
                                                <div class="col-xs-12">
                                                    <div class="b-form-row">
                                                        Processing Fee:1 %+15% VAT  of the approved loan amount.<br>
                                                        Early Adjustment Fee: 2%+ 15% VAT within 5 years 1%+ 15% VAT  After 5 years.<br>
                                                        Partial Payment Fee : 2%+ 15% VAT within 5 years 1%+ 15% VAT After 5 years.<br>
                                                        Penal Charges :2%+ 15% VAT Per month on overdue amount<br>
                                                        Post approval Quotation Change Fee: Tk. 1000 per change of quotation.<br>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="fa app-tab-in" style="margin-top: 10px;">ELIGIBILITY </div>
                                            <hr class="b-hr" style="margin-bottom: 12px; margin-top: 12px;" />
                                            <div class="row b-form-inline b-form-horizontal">
                                                <div class="col-xs-12">
                                                    <div class="b-form-row">
                                                        Minimum Income : BDT 50,000<br>
                                                        Minimum Trade Licence Age: 3 years<br>
                                                        Age: 23 years to 65 years<br>
                                                    </div>
                                                </div>
                                            </div>
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
                {{--End Modal apply--}}

                {{--Start Modal apply--}}
                <div id="details" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        {{--Start Modal--}}
                        <div class="modal-content modal-top">
                            <div class="modal-header t-a-c">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <i class="fa app-tab-in">Home Loan</i>
                            </div>
                            <div class="modal-body">
                                <div class="">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation"><a href="#tabs_16" aria-controls="tabs_16" role="tab" data-toggle="tab">Apply</a></li>
                                        <li role="presentation"><a href="#tabs_17" aria-controls="tabs_17" role="tab" data-toggle="tab">Required Documents</a></li>
                                        <li role="presentation" class="active"><a href="#tabs_18" aria-controls="tabs_18" role="tab" data-toggle="tab">View Details</a></li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content app-tab">
                                        <div id="tabs_16" role="tabpanel" class="tab-pane">
                                            <div class="fa app-tab-in">Apply here to fill up your information</div>
                                            <hr class="b-hr" />
                                            {!! Form::open(array('url'=>'--', 'role'=>'form', 'method'=>'POST')) !!}
                                            <div class="row b-form-inline b-form-horizontal">
                                                <div class="col-xs-12">
                                                    <div class="b-form-row">
                                                        <label class="b-form-horizontal__label" for="create_account_name">Name</label>
                                                        <div class="b-form-horizontal__input">
                                                            <input type="text" id="create_account_name" class="form-control" required />
                                                        </div>
                                                    </div>
                                                    <div class="b-form-row">
                                                        <label class="b-form-horizontal__label" for="create_account_name">Occupation</label>
                                                        <div class="b-form-horizontal__input">
                                                            <input type="text" id="create_account_name" class="form-control" required />
                                                        </div>
                                                    </div>
                                                    <div class="b-form-row">
                                                        <label class="b-form-horizontal__label" for="create_account_name">Organization</label>
                                                        <div class="b-form-horizontal__input">
                                                            <input type="text" id="create_account_name" class="form-control" required />
                                                        </div>
                                                    </div>
                                                    <div class="b-form-row">
                                                        <label class="b-form-horizontal__label" for="create_account_name">Monthly Salary</label>
                                                        <div class="b-form-horizontal__input">
                                                            <input type="text" id="create_account_name" class="form-control" required />
                                                        </div>
                                                    </div>
                                                    <div class="b-form-row">
                                                        <label class="b-form-horizontal__label" for="create_account_phone">Mobile Number</label>
                                                        <div class="b-form-horizontal__input">
                                                            <input type="number" id="create_account_phone" class="form-control" required />
                                                        </div>
                                                    </div>
                                                    <div class="b-form-row">
                                                        <label class="b-form-horizontal__label" for="create_account_phone">E-Mail</label>
                                                        <div class="b-form-horizontal__input">
                                                            <input type="email" id="create_account_phone" class="form-control" required />
                                                        </div>
                                                    </div>
                                                    <div class="b-form-row">
                                                        <label class="b-form-horizontal__label" for="create_account_phone">Address</label>
                                                        <div class="b-form-horizontal__input">
                                                            <textarea class="form-control" rows="3" required></textarea>
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

                                        <div id="tabs_17" role="tabpanel" class="tab-pane">
                                            <div class="fa app-tab-in">Essential Document</div>
                                            <hr class="b-hr" style="margin-bottom: 12px; margin-top: 12px;" />
                                            <div class="row b-form-inline b-form-horizontal">
                                                <div class="col-xs-12">
                                                    <div class="b-form-row">
                                                        Lab print photo 2 copy<br>
                                                        NID clear copy both<br>
                                                        TIN Certificate<br>
                                                        Bank statement of last 1 year<br>
                                                        Trade license min 3 years<br>
                                                        Visiting card<br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="tabs_18" role="tabpanel" class="tab-pane active">
                                            <div class="fa app-tab-in">FEES AND CHARGES</div>
                                            <hr class="b-hr" style="margin-bottom: 12px; margin-top: 12px;" />
                                            <div class="row b-form-inline b-form-horizontal">
                                                <div class="col-xs-12">
                                                    <div class="b-form-row">
                                                        Processing Fee:1 %+15% VAT  of the approved loan amount.<br>
                                                        Early Adjustment Fee: 2%+ 15% VAT within 5 years 1%+ 15% VAT  After 5 years.<br>
                                                        Partial Payment Fee : 2%+ 15% VAT within 5 years 1%+ 15% VAT After 5 years.<br>
                                                        Penal Charges :2%+ 15% VAT Per month on overdue amount<br>
                                                        Post approval Quotation Change Fee: Tk. 1000 per change of quotation.<br>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="fa app-tab-in" style="margin-top: 10px;">ADDITIONAL FEATURES </div>
                                            <hr class="b-hr" style="margin-bottom: 12px; margin-top: 12px;" />
                                            <div class="row b-form-inline b-form-horizontal">
                                                <div class="col-xs-12">
                                                    <div class="b-form-row">
                                                        Processing Fee:1 %+15% VAT  of the approved loan amount.<br>
                                                        Early Adjustment Fee: 2%+ 15% VAT within 5 years 1%+ 15% VAT  After 5 years.<br>
                                                        Partial Payment Fee : 2%+ 15% VAT within 5 years 1%+ 15% VAT After 5 years.<br>
                                                        Penal Charges :2%+ 15% VAT Per month on overdue amount<br>
                                                        Post approval Quotation Change Fee: Tk. 1000 per change of quotation.<br>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="fa app-tab-in" style="margin-top: 10px;">ELIGIBILITY </div>
                                            <hr class="b-hr" style="margin-bottom: 12px; margin-top: 12px;" />
                                            <div class="row b-form-inline b-form-horizontal">
                                                <div class="col-xs-12">
                                                    <div class="b-form-row">
                                                        Minimum Income : BDT 50,000<br>
                                                        Minimum Trade Licence Age: 3 years<br>
                                                        Age: 23 years to 65 years<br>
                                                    </div>
                                                </div>
                                            </div>
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
                {{--End Modal apply--}}

                {{--Start Modal apply--}}
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
                {{--End Modal apply--}}



            </div>
        </div>
    </div>
@endsection