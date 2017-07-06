@section('maincontent')
    @include('ap.insurance.include_insurance_menu')
    <!--start container-fluid-->
    <div class="container-fluid content-change-fixed" ng-controller="LoanController">

        <div class="panel panel-default m-b-0">
            <div class="table-h-t">
                <div class="col-md-3 m-t-5">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search here...">
                    </div>
                </div>
                <div class="col-md-3 m-t-10 text-success"><b>Fire Insurance</b></div>
                <div class="col-md-2"></div>
                <div class="col-md-4 text-right m-t-10">
                    <a href="{{ url('form'.'/'.'insurance') }}" class="btn btn-default btn-xs text-success width-100" title="Assign Insurance"><i class="fa fa-plus"> Insurance</i></a>
                </div>
            </div>

            <table class="table table-fixed">
                <thead>
                <tr class="success">
                    <th class="col-sm-2">Bank Name</th>
                    <th class="col-sm-2">Sum Insured</th>
                    <th class="col-sm-2">Tenure &nbsp; Claim Ratio</th>
                    <th class="col-sm-2">TypeOfCover</th>
                    <th class="col-sm-1">MonthlyPay</th>
                    <th class="col-sm-1">LumpSumPay</th>
                    <th class="col-sm-2">Premium &nbsp; Type <span class="pull-right">Action</span></th>
                </tr>
                </thead>
                <tbody>
                @php $number = 0; @endphp
                @foreach($loan_view as $v)
                    <tr>
                        <td class="col-xs-12 col-sm-2 text-success" title="{{$v->bank->bank_name}}">
                            <img src="{{ asset($v->bank->bank_image_url) }}" height="20px" width="30px" alt="pic">
                            {{--{{$v->bank->bank_name}}--}}
                            {{str_limit($v->bank->bank_name, 14, ' ...')}}
                        </td>
                        <td class="col-xs-12 col-sm-2">{{$v->insr_sum_insured	}}</td>
                        <td class="col-xs-12 col-sm-2">{{$v->insr_period}} Years &nbsp; {{$v->insr_claim_ratio}}%</td>
                        <td class="col-xs-12 col-sm-2">{{$v->insr_cover_type}}</td>
                        <td class="col-xs-12 col-sm-1">{{$v->insr_monthly_payout}}</td>
                        <td class="col-xs-12 col-sm-1">{{$v->insr_lump_sum_payout}}</td>
                        <td class="col-xs-12 col-sm-2">
                            <span class="text-success">{{$v->insr_premium}}</span> &nbsp;
                            @if($v->insr_person_type==1)
                                <span class="text-success">Salaried</span>
                            @elseif($v->insr_person_type==2)
                                <span class="text-success">Business</span>
                            @else
                                <span class="text-success">Others</span>
                            @endif

                            <span class="pull-right">
                                <a class="btn btn-default btn-xs" data-toggle="modal" data-target="#" title="Details Information"><i class="fa fa-list"></i></a>
                                <a class="btn btn-default btn-xs" data-toggle="modal" data-target="#kk" title="Click To Edit"><i class="fa fa-edit"></i></a>
                            </span>
                        </td>
                    </tr>
                @endforeach



                @php $number = 0; @endphp
                @foreach($loan_view as $v)
                    {{--<tr>--}}
                    {{--<td class="col-xs-12 col-sm-2 text-success" title="{{$v->bank->bank_name}}">--}}
                    {{--<img src="{{ asset($v->bank->bank_image_url) }}" height="20px" width="30px" alt="pic">--}}
                    {{--{{$v->bank->bank_name}}--}}
                    {{--{{str_limit($v->bank->bank_name, 14, ' ...')}}--}}
                    {{--</td>--}}
                    {{--<td class="col-xs-12 col-sm-2">{{$v->loan_interest_rate}}%</td>--}}
                    {{--<td class="col-xs-12 col-sm-2">{{$v->loan_monthly_interest}} BDT</td>--}}
                    {{--<td class="col-xs-12 col-sm-2">{{$v->loan_interest_payable}} BDT</td>--}}
                    {{--<td class="col-xs-12 col-sm-2">--}}
                    {{--{{$v->loan_period}} Years <span class="pull-right">{{$v->loan_amount}} BDT</span>--}}
                    {{--</td>--}}
                    {{--<td class="col-xs-12 col-sm-2">--}}
                    {{--@if($v->loan_person_type==1)--}}
                    {{--<span class="text-success">Salaried</span>--}}
                    {{--@elseif($v->loan_person_type==2)--}}
                    {{--<span class="text-success">Business</span>--}}
                    {{--@else--}}
                    {{--<span class="text-success">Others</span>--}}
                    {{--@endif--}}

                    {{--<span class="pull-right">--}}
                    {{--<a class="btn btn-default btn-xs" data-toggle="modal" data-target="#{{$v->id}}" title="Details Information"><i class="fa fa-list"></i></a>--}}
                    {{--<a class="btn btn-default btn-xs" data-toggle="modal" data-target="#{{$v->id}}kk" title="Click To Edit"><i class="fa fa-edit"></i></a>--}}
                    {{--</span>--}}
                    {{--</td>--}}
                    {{--</tr>--}}

                    <!--start detailsInfo -->
                    <div id="{{$v->id}}" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!--start Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title text-success text-center">
                                        <img src="{{ asset($v->bank->bank_image_url) }}" height="20px" width="30px" alt="pic">&nbsp;
                                        {{$v->bank->bank_name}}
                                    </h4>
                                </div>
                                <div class="modal-body" style="overflow: hidden">
                                    <div class="col-md-12">
                                        <div class="col-md-8 col-md-offset-1 f-s-14 f-f-s">
                                            <dl class="dl-horizontal">
                                                <dt>Interest Rate :</dt>
                                                <dd>{{$v->loan_interest_rate}}%</dd>
                                                <dt>Monthly Interest :</dt>
                                                <dd>{{$v->loan_monthly_interest}}BDT</dd>
                                                <dt>Total Payable Interest :</dt>
                                                <dd>{{$v->loan_interest_payable}} BDT</dd>
                                                <dt>Loan Period :</dt>
                                                <dd>{{$v->loan_period}} Years </dd>
                                                <dt>Loan Amount :</dt>
                                                <dd>{{$v->loan_amount}} BDT</dd>
                                            </dl>
                                            <hr>
                                            <dl class="dl-horizontal">
                                                <dt>Loan Features :</dt>
                                                <dd>{!! $v->loan_features_bfenefits !!}</dd>
                                            </dl>

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

                    <!--start detailsInfo -->
                    <div id="{{$v->id}}kk" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!--start Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title text-success text-center">
                                        <img src="{{ asset($v->bank->bank_image_url) }}" height="20px" width="30px" alt="pic">&nbsp;
                                        {{$v->bank->bank_name}}
                                    </h4>
                                </div>
                                <div class="modal-body" style="overflow: hidden">
                                    <div class="col-md-12">
                                        <div class="col-md-12 f-s-14 f-f-s">


                                            {!! Form::open(array('url'=>'form-loan-update', 'role'=>'form', 'method'=>'POST')) !!}
                                            <div class="form-horizontal">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                                <input type="hidden" name="l_id" value="{{ $v->id }}">
                                                <input type="hidden" name="b_id" value="{{ $v->bank_id }}">

                                                <div class="form-group">
                                                    <div class="col-sm-4">
                                                        {{--<select class="form-control" name="bank_id" required>--}}
                                                        {{--<option value="{{$v->bank->bank_id}}">{{$v->bank->bank_name}}</option>--}}

                                                        {{--@foreach($bank_view as $v)--}}
                                                        {{--<option value="{{$v->id}}">{{$v->bank_name}}</option>--}}
                                                        {{--@endforeach--}}
                                                        {{--</select>--}}
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <select class="form-control" name="l_type" required>
                                                            @if($v->loan_type == 1) {
                                                            <option value="1">SME</option>
                                                            }@elseif($v->loan_type ==2){
                                                            <option value="2">Car</option>
                                                            }@elseif($v->loan_type ==3){
                                                            <option value="3">Home</option>
                                                            }@elseif($v->loan_type ==4){
                                                            <option value="4">Personal</option>
                                                            }@elseif($v->loan_type ==5){
                                                            <option value="5">Others</option>
                                                            }@elseif($v->loan_type ==6){
                                                            <option value="6">Working Capital</option>
                                                            }
                                                            @endif

                                                            <option value="1">SME</option>
                                                            <option value="2">Car</option>
                                                            <option value="3">Home</option>
                                                            <option value="4">Personal</option>
                                                            <option value="5">Others</option>
                                                            <option value="6">Working Capital</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <select class="form-control" name="l_person" required>
                                                            @if($v->loan_person_type == 1){
                                                            <option value="1">Salaried Person</option>
                                                            }@elseif($v->loan_person_type == 2){
                                                            <option value="2">Business Person</option>
                                                            }@elseif($v->loan_person_type == 3){
                                                            <option value="3">Others</option>
                                                            }
                                                            @endif

                                                            <option value="1">Salaried Person</option>
                                                            <option value="2">Business Person</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputName2" class="col-sm-4 control-label">Select Loan Amount:</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" name="l_amount" value="{{$v->loan_amount}}" class="form-control" id="exampleInputName2" required>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <select class="form-control" name="l_period" required>
                                                            <option value="{{$v->loan_period}}">{{$v->loan_period}} Year</option>

                                                            <option value="1">1 Year</option>
                                                            <option value="2">2 Year</option>
                                                            <option value="3">3 Year</option>
                                                            <option value="4">4 Year</option>
                                                            <option value="5">5 Year</option>
                                                            <option value="6">6 Year</option>
                                                            <option value="7">7 Year</option>
                                                            <option value="8">8 Year</option>
                                                            <option value="9">9 Year</option>
                                                            <option value="10">10 Year</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputName2" class="col-sm-4 control-label">Loan Interest Rate % :</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="l_interest_rate" value="{{$v->loan_interest_rate}}" class="form-control" id="exampleInputName2" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputName2" class="col-sm-4 control-label">Flating Rate % :</label>
                                                    <div class="col-sm-2">
                                                        <input type="text" name="f_rate_from" value="{{$v->loan_flating_rate_form}}" class="form-control" id="exampleInputName2">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <input type="text" name="f_rate_to" value="{{$v->loan_flating_rate_to}}" class="form-control" id="exampleInputName2">
                                                    </div>
                                                </div>
                                                {{--</div>--}}
                                                <hr>

                                                {{--<div class="form-horizontal">--}}
                                                <div class="form-group">
                                                    <div class="col-sm-10 col-sm-offset-1">
                                                        <span class="text-success"><b>Loan Requirements</b></span>
                                                        <textarea name="l_req" class="ckeditor" cols="30" rows="10">
                                                            {{$v->loan_requirements}}
                                                        </textarea>
                                                    </div>
                                                    <div class="col-sm-10 col-sm-offset-1 m-t-15">
                                                        <span class="text-success"><b>Loan Features</b></span>
                                                        <textarea name="l_fsr" class="ckeditor" cols="30" rows="10">
                                                            {{$v->loan_features_bfenefits}}
                                                        </textarea>
                                                    </div>
                                                    <div class="col-sm-10 col-sm-offset-1 m-t-15">
                                                        <span class="text-success"><b>Loan Eligibility</b></span>
                                                        <textarea name="l_elig" class="ckeditor" cols="30" rows="10">
                                                            {{$v->loan_eligibility}}
                                                        </textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-offset-4 col-sm-10 m-t-15">
                                                        <input type="submit" value="Update" class="btn btn-success col-sm-4">
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
                    <!--end detailsInfo -->

                @endforeach

                </tbody>
            </table>

        </div>

        <div class="table-h-t m-b-20">
            <div class="col-md-3 m-t-0">
                <span class="text-success f-s-12">Showing {{ Session::get('count') }} entries</span>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-1 col-md-offset-2"></div>
        </div>



    </div>
    <!--end container-fluid-->
@endsection