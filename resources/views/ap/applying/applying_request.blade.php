@section('maincontent')
    @include('ap.applying.include_applying_menu')
    <!--start container-fluid-->
    <div class="container-fluid content-change-fixed" ng-controller="homeController">

        <div class="panel panel-default m-b-0">
            <div class="table-h-t">
                <div class="col-md-3 m-t-5">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search here...">
                    </div>
                </div>
                <div class="col-md-3 m-t-10 text-success"><b>Applying Request</b></div>
                <div class="col-md-4 m-t-10">
                    <i class="fa text-success">{{ Session::get('msg_apply') }} {{ Session::put('msg_apply', '') }}</i>
                </div>
                <div class="col-md-2 text-right m-t-10">
                    <a class="btn btn-default btn-xs text-success width-150" title="Applying All Information"><i class="fa">Showing {{ Session::get('count') }} Entries</i></a>
                </div>
            </div>

            <table class="table table-fixed">
                <thead>
                <tr class="success">
                    <th class="col-sm-3">No</th>
                    <th class="col-sm-2">Client Name</th>
                    <th class="col-sm-2">Phone</th>
                    <th class="col-sm-2">Offering Type</th>
                    <th class="col-sm-1">Time</th>
                    <th class="col-sm-2">Action</th>
                </tr>
                </thead>
                <tbody>

                @php $number = 0; $suc = 0; $reqs = 1; $pending = 2; $table = 66; @endphp
                @foreach($apply_view as $v)


                    <tr>
                        <td class="col-xs-12 col-sm-3 text-success" title="{{$v->bank['bank_name']}}">
                            <a class="btn btn-default btn-xs"><i class="fa">{{$number = $number+1}}</i></a>&nbsp;
                            <a class="btn btn-default btn-xs" data-toggle="modal">
                                <img src="{{ asset('ap/images/banks/'.$v->bank['bank_image_url']) }}" height="16px" width="30px">
                            </a>
                            {{str_limit($v->bank['bank_name'], 20, ' ...')}}
                        </td>
                        <td class="col-xs-12 col-sm-2">{{str_limit($v->aply_name, 20, ' ...')}}</td>
                        <td class="col-xs-12 col-sm-2">{{$v->aply_mobile}}</td>
                        <td class="col-xs-12 col-sm-2">
                            @if($v->aply_offering_type == 33)
                                <a data-toggle="modal" data-target="#{{$v->id}}"><i class="fa text-success-light"><b>Loan</b></i></a>
                            @elseif($v->aply_offering_type == 44)
                                <a data-toggle="modal" data-target="#{{$v->id}}"><i class="fa text-success-light"><b>Investment</b></i></a>
                            @elseif($v->aply_offering_type == 55)
                                <a data-toggle="modal" data-target="#{{$v->id}}"><i class="fa text-success-light"><b>Insurance</b></i></a>
                            @else
                                <a data-toggle="modal" data-target="#{{$v->id}}"><i class="fa text-success-light"><b>Card Offer</b></i></a>
                            @endif
                        </td>
                        <td class="col-xs-12 col-sm-1">
                            {{$v->aply_mobile_call}}
                        </td>
                        <td class="col-xs-12 col-sm-2">&nbsp;
                            <a href="{{URL::to('publication-alert/'.$v->id.'/'.$reqs.'/'.$table)}}" class="btn btn-default btn-xs m-l-20" title="Applying Request"><i class="text-danger-light fa fa-arrow-down"></i></a>
                            &nbsp;
                            <a class="btn btn-default btn-xs" data-toggle="modal" data-target="#{{$v->id}}" title="Details Information"><i class="fa fa-list"></i></a>
                        </td>
                    </tr>

                    <!--start detailsInfo information_details-->
                    <div id="{{$v->id}}" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!--start Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title text-success text-center">
                                        <img src="{{ asset('ap/images/banks/'.$v->bank['bank_image_url']) }}" height="20px" width="30px" alt="pic">&nbsp;
                                        {{$v->bank['bank_name']}}
                                    </h4>
                                </div>
                                <div class="modal-body" style="overflow: hidden">
                                    <div class="col-md-12">
                                        <div class="col-md-10 col-md-offset-1 f-s-14 f-f-s">

                                            @if($v->aply_offering_type == 33)
                                                <dl class="dl-horizontal">
                                                    <dt>Offering Type :</dt>
                                                    <dd>
                                                        <i class="fa text-success-light"><b>Loan</b></i>

                                                        @if($v->loan['loan_person_type'] == 1)
                                                            <i class="fa text-success-light">&nbsp;[Sararied Person]</i>
                                                        @elseif($v->loan['loan_person_type'] == 2)
                                                            <i class="fa text-success-light">&nbsp;[Business Person]</i>
                                                        @else
                                                            <i class="fa text-success-light">&nbsp;[Others Person]</i>
                                                        @endif
                                                    </dd>
                                                </dl>
                                                <hr>
                                                <dl class="dl-horizontal">
                                                    <dt>Interest Rate :</dt>
                                                    <dd>{{$v->loan['loan_interest_rate']}}%</dd>
                                                    <dt>Monthly Interest :</dt>
                                                    <dd>{{$v->loan['loan_monthly_interest']}}BDT</dd>
                                                    <dt>Total Payable Interest :</dt>
                                                    <dd>{{$v->loan['loan_interest_payable']}} BDT</dd>
                                                    <dt>Loan Period :</dt>
                                                    <dd>{{$v->loan['loan_period']}} Years </dd>
                                                    <dt>Loan Amount :</dt>
                                                    <dd>{{$v->loan['loan_amount']}} BDT</dd>
                                                </dl>
                                                <hr>
                                                <dl class="dl-horizontal">
                                                    <dt>Loan Requirements :</dt>
                                                    <dd>{!! $v->loan['loan_requirements'] !!}</dd>
                                                    <dt>Loan Features :</dt>
                                                    <dd>{!! $v->loan['loan_features_bfenefits'] !!}</dd>
                                                    <dt>Loan Eligibility :</dt>
                                                    <dd>{!! $v->loan['loan_eligibility'] !!}</dd>
                                                </dl>

                                            @elseif($v->aply_offering_type == 44)
                                                <dl class="dl-horizontal">
                                                    <dt>Offering Type :</dt>
                                                    <dd>
                                                        <i class="fa text-success-light"><b>Investment</b></i>

                                                        @if($v->investment['invst_person_type'] == 1)
                                                            <i class="fa text-success-light">&nbsp;[Sararied Person]</i>
                                                        @elseif($v->investment['invst_person_type'] == 2)
                                                            <i class="fa text-success-light">&nbsp;[Business Person]</i>
                                                        @else
                                                            <i class="fa text-success-light">&nbsp;[Others Person]</i>
                                                        @endif
                                                    </dd>
                                                </dl>
                                                <hr>
                                                <dl class="dl-horizontal">
                                                    <dt>Investment Rate :</dt>
                                                    <dd>{{$v->investment['invst_interest_rate_from']}}% &nbsp; - &nbsp; {{$v->invst_interest_rate_to}}%</dd>
                                                    <dt>Tenure Range :</dt>
                                                    <dd>{{$v->investment['invst_tenure_rate']}} Years</dd>
                                                    <dt>Amount UpTo :</dt>
                                                    <dd>{{$v->investment['invst_amount_upto']}} BDT</dd>
                                                </dl>
                                                <hr>
                                                <dl class="dl-horizontal">
                                                    <dt>Requirements :</dt>
                                                    <dd>{!! $v->investment['invst_requirements'] !!}</dd>
                                                    <dt>Features :</dt>
                                                    <dd>{!! $v->investment['invst_features_benefits'] !!}</dd>
                                                    <dt>Eligibility :</dt>
                                                    <dd>{!! $v->investment['invst_eligibility'] !!}</dd>
                                                </dl>
                                            @elseif($v->aply_offering_type == 55)

                                                <dl class="dl-horizontal">
                                                    <dt>Offering Type :</dt>
                                                    <dd>
                                                        <i class="fa text-success-light"><b>Insurance</b></i>

                                                        @if($v->insurance['insr_type'] == 1)
                                                            <i class="fa text-success-light">&nbsp;[Sararied Person]</i>
                                                        @elseif($v->insurance['insr_type'] == 2)
                                                            <i class="fa text-success-light">&nbsp;[Business Person]</i>
                                                        @else
                                                            <i class="fa text-success-light">&nbsp;[Others Person]</i>
                                                        @endif
                                                    </dd>
                                                </dl>
                                                <hr>
                                                <dl class="dl-horizontal">
                                                    <dt>Sum Insured :</dt>
                                                    <dd>{{$v->insurance['insr_sum_insured']}}%</dd>
                                                    <dt>Claim Ratio :</dt>
                                                    <dd>{{$v->insurance['insr_claim_ratio']}}BDT</dd>
                                                    <dt>Tenure Period:</dt>
                                                    <dd>{{$v->insurance['insr_period']}} BDT</dd>
                                                    <dt>TypeOfCover :</dt>
                                                    <dd>{{$v->insurance['insr_cover_type']}} Years </dd>
                                                    <dt>Premium :</dt>
                                                    <dd>{{$v->insurance['insr_premium']}} BDT</dd>
                                                </dl>
                                                <hr>
                                                <dl class="dl-horizontal">
                                                    <dt>Insurance Requirements :</dt>
                                                    <dd>{!! $v->insurance['insr_requirements'] !!}</dd>
                                                    <dt>Insurance Features :</dt>
                                                    <dd>{!! $v->insurance['insr_features_benefits'] !!}</dd>
                                                    <dt>Insurance Eligibility :</dt>
                                                    <dd>{!! $v->insurance['insr_eligibility'] !!}</dd>
                                                </dl>
                                            @else
                                                <i class="fa text-success-light"><b>Card Offer</b></i>
                                            @endif

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
                    <!--end detailsInfo -->

                @endforeach

                @if ((Session::get('count')) == 0 )
                    <span style="color: #a09393; font-size: 20px; position: absolute; z-index: 10; bottom: 250px; right: 400px;">
                        <i class="fa text-success">Not Finding Any Client Request</i>
                    </span>
                @endif

                </tbody>
            </table>

        </div>

        <div class="table-h-t m-b-20">
            <div class="col-md-3 m-t-0">
                <span class="text-success f-s-12">Showing {{ Session::get('count') }} Entries</span>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-1 col-md-offset-2"></div>
        </div>


    </div>
    <!--end container-fluid-->
@endsection