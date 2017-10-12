@section('maincontent')
    @include('ap.loan.include_loan_menu')
    <!--start container-fluid-->
    <div class="container-fluid content-change-fixed" ng-controller="LoanController">

        <div class="panel panel-default m-b-0">
            <div class="table-h-t">
                <div class="col-md-3 m-t-5">
                    <div class="form-group">
                        <input type="text" value="Home Loan" readonly class="form-control" placeholder="Search here...">
                    </div>
                </div>
                <div class="col-md-3 m-t-10 text-success"><b></b></div>
                <div class="col-md-4">
                    <i class="fa text-success">{{ Session::get('msg_suc') }} {{ Session::put('msg_suc', '') }}</i>
                    <i class="fa text-danger">{{ Session::get('msg_error') }} {{ Session::put('msg_error', '') }}</i>
                </div>
                <div class="col-md-2 text-right m-t-10">
                    <a href="{{ url('form'.'/'.'loan') }}" class="btn btn-default btn-xs text-success width-100" title="Assign Loan"><i class="fa fa-plus"> Loan</i></a>
                </div>
            </div>

            <table class="table table-fixed">
                <thead>
                <tr class="success">
                    <th class="col-sm-2">Bank Name</th>
                    <th class="col-sm-2">Interest Rate</th>
                    <th class="col-sm-2">Monthly Interest</th>
                    <th class="col-sm-2">Total Interest</th>
                    <th class="col-sm-2">Period <span class="pull-right">Amount</span></th>
                    <th class="col-sm-2">Type <span class="pull-right">Action</span></th>
                </tr>
                </thead>
                <tbody>

                @php $number = 0; $off = 0; $on = 1; $table = 33; @endphp
                @foreach($loan_view as $v)
                    <tr>
                        <td class="col-xs-12 col-sm-2 text-success" title="{{$v->bank->bank_name}}">
                            <a class="btn btn-default btn-xs" data-toggle="modal" data-target="#{{$v->id}}kkk">
                                <img src="{{ asset('ap/images/banks/'.$v->bank->bank_image_url) }}" height="16px" width="30px" alt="pic">
                            </a>
                            {{str_limit($v->bank->bank_name, 11, ' ...')}}
                        </td>
                        <td class="col-xs-12 col-sm-2">{{$v->loan_interest_rate}}%</td>
                        <td class="col-xs-12 col-sm-2">{{$v->loan_monthly_interest}} BDT</td>
                        <td class="col-xs-12 col-sm-2">{{$v->loan_interest_payable}} BDT</td>
                        <td class="col-xs-12 col-sm-2">
                            {{$v->loan_period}} Years <span class="pull-right">{{$v->loan_amount}} BDT</span>
                        </td>
                        <td class="col-xs-12 col-sm-2">
                            @if($v->loan_person_type==1)
                                <span class="text-success">Salaried</span>
                            @elseif($v->loan_person_type==2)
                                <span class="text-success">Business</span>
                            @else
                                <span class="text-success">Others</span>
                            @endif

                            <span class="pull-right">
                                @if($v->loan_status==1)
                                    <a href="{{URL::to('publication/'.$v->id.'/'.$off.'/'.$table)}}" class="btn btn-default btn-xs" title="Publish"><i class="text-success-light fa fa-check"></i></a>
                                @else
                                    <a href="{{URL::to('publication/'.$v->id.'/'.$on.'/'.$table)}}" class="btn btn-default btn-xs" title="unPublish">&nbsp;<i class="text-danger-light fa fa-lock"> </i></a>
                                @endif

                                <a class="btn btn-default btn-xs" data-toggle="modal" data-target="#{{$v->id}}" title="Details Information"><i class="fa fa-list"></i></a>
                                <a class="btn btn-default btn-xs" data-toggle="modal" data-target="#{{$v->id}}kk" title="Click To Edit"><i class="fa fa-edit"></i></a>
                            </span>
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
                                        <img src="{{ asset('ap/images/banks/'.$v->bank->bank_image_url) }}" height="20px" width="30px" alt="pic">&nbsp;
                                        {{$v->bank->bank_name}}
                                    </h4>
                                </div>
                                <div class="modal-body" style="overflow: hidden">
                                    <div class="col-md-12">
                                        <div class="col-md-10 col-md-offset-1 f-s-14 f-f-s">
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
                                                <dt>Loan Requirements :</dt>
                                                <dd>{!! $v->loan_requirements !!}</dd>
                                                <dt>Loan Features :</dt>
                                                <dd>{!! $v->loan_features_bfenefits !!}</dd>
                                                <dt>Loan Eligibility :</dt>
                                                <dd>{!! $v->loan_eligibility !!}</dd>
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

                    <!--start detailsInfo information_update-->
                    <div id="{{$v->id}}kk" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!--start Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title text-success text-center">
                                        <img src="{{ asset('ap/images/banks/'.$v->bank->bank_image_url) }}" height="20px" width="30px" alt="pic">&nbsp;
                                        {{$v->bank->bank_name}}
                                    </h4>
                                </div>
                                <div class="modal-body" style="overflow: hidden">
                                    <div class="col-md-12">
                                        <div class="col-md-12 f-s-14 f-f-s">

                                            {!! Form::open(array('url'=>'form-loan-save', 'role'=>'form', 'method'=>'POST')) !!}
                                            <div class="form-horizontal">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                                <input type="hidden" name="l_id" value="{{ $v->id }}">
                                                <input type="hidden" name="bank_id" value="{{ $v->bank['id'] }}">
                                                <input type="hidden" name="u_data" value="update_value">

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
                                                            <option value="1">SME Loan</option>
                                                            }@elseif($v->loan_type ==2){
                                                            <option value="2">Car Loan</option>
                                                            }@elseif($v->loan_type ==3){
                                                            <option value="3">Home Loan</option>
                                                            }@elseif($v->loan_type ==4){
                                                            <option value="4">Personal Loan</option>
                                                            }@elseif($v->loan_type ==5){
                                                            <option value="5">Others Loan</option>
                                                            }@elseif($v->loan_type ==6){
                                                            <option value="6">Working Capital</option>
                                                            }
                                                            @endif

                                                            <option value="1">SME Loan</option>
                                                            <option value="2">Car Loan</option>
                                                            <option value="3">Home Loan</option>
                                                            <option value="4">Personal Loan</option>
                                                            <option value="5">Others Loan</option>
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

                    <!--start detailsInfo picture_update -->
                    <div id="{{$v->id}}kkk" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!--start Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title text-success text-center">
                                        Update Picture Information
                                    </h4>
                                </div>
                                <div class="modal-body" style="overflow: hidden">
                                    <div class="col-md-12">
                                        <div class="col-md-12 f-s-14 f-f-s">


                                            {!! Form::open(array('url'=>'image-update-child', 'role'=>'form', 'method'=>'POST', 'files'=>'true')) !!}
                                            <div class="form-horizontal">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="hidden" name="id" value="{{ $v->id }}">
                                                <input type="hidden" name="t_id" value="33">

                                                <div class="form-group">
                                                    <label for="exampleInputName2" class="col-sm-4 control-label m-t-20">Image :</label>
                                                    <div class="col-sm-6">
                                                        <img src="{{ asset('ap/images/banks/'.$v->bank->bank_image_url) }}" height="60px" width="90px" alt="pic">
                                                    </div>
                                                </div>
                                                <hr>

                                                <div class="form-group">
                                                    <label for="exampleInputName2" class="col-sm-4 control-label">Change Bank:</label>
                                                    <div class="col-sm-8">
                                                        <select class="form-control" name="bank_id" required>
                                                            <option value="">Select Bank</option>
                                                            @foreach($bank_view as $v)
                                                                <option value="{{$v->id}}">{{$v->bank_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                            <hr>

                                            <div class="form-horizontal">
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
                <span class="text-success f-s-12">Showing {{ Session::get('count') }} Entries</span>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-1 col-md-offset-2"></div>
        </div>



    </div>
    <!--end container-fluid-->
@endsection