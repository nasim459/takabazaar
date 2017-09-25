@section('maincontent')
    @include('ap.insurance.include_insurance_menu')
    <!--start container-fluid-->
    <div class="container-fluid content-change-fixed" ng-controller="LoanController">

        <div class="panel panel-default m-b-0">
            <div class="table-h-t">
                <div class="col-md-3 m-t-5">
                    <div class="form-group">
                        <input type="text" value="Fire Insurance" readonly class="form-control" placeholder="Search here...">
                    </div>
                </div>
                <div class="col-md-3 m-t-10 text-success"><b></b></div>
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
                    <th class="col-sm-3">Premium &nbsp; Type <span class="pull-right">Action</span></th>
                </tr>
                </thead>
                <tbody>
                @php $number = 0; $off = 0; $on = 1; $table = 55; @endphp
                @foreach($loan_view as $v)
                    <tr>
                        <td class="col-xs-12 col-sm-2 text-success" title="{{$v->bank->bank_name}}">
                            <img src="{{ asset('ap/images/banks/'.$v->bank->bank_image_url) }}" height="20px" width="30px" alt="pic">
                            {{--{{$v->bank->bank_name}}--}}
                            {{str_limit($v->bank->bank_name, 14, ' ...')}}
                        </td>
                        <td class="col-xs-12 col-sm-2">{{$v->insr_sum_insured	}}</td>
                        <td class="col-xs-12 col-sm-2">{{$v->insr_period}} Years &nbsp; {{$v->insr_claim_ratio}}%</td>
                        <td class="col-xs-12 col-sm-2">
                            @if($v->insr_cover_type == 1)
                                First Cover
                            @elseif($v->insr_cover_type == 2)
                                Second Cover
                            @elseif($v->insr_cover_type == 3)
                                Third Cover
                            @endif
                        </td>
                        <td class="col-xs-12 col-sm-1">{{$v->insr_monthly_payout}}</td>
                        <td class="col-xs-12 col-sm-3">
                            <span class="text-success">{{$v->insr_premium}}</span> &nbsp;
                            @if($v->insr_person_type==1)
                                <span class="text-success">Salaried</span>
                            @elseif($v->insr_person_type==2)
                                <span class="text-success">Business</span>
                            @else
                                <span class="text-success">Others</span>
                            @endif

                            <span class="pull-right">
                                {{--@if($v->insr_status==1)--}}
                                {{--<a href="{{URL::to('publication/'.$v->id.'/'.$off.'/'.$table)}}" class="btn btn-default btn-xs" title="Publish"><i class="text-success-light fa fa-check"></i></a>--}}
                                {{--@else--}}
                                {{--<a href="{{URL::to('publication/'.$v->id.'/'.$on.'/'.$table)}}" class="btn btn-default btn-xs" title="unPublish">&nbsp;<i class="text-danger-light fa fa-lock"> </i></a>--}}
                                {{--@endif--}}

                                <a class="btn btn-default btn-xs" data-toggle="modal" data-target="#{{$v->id}}" title="Details Information"><i class="fa fa-list"></i></a>
                                <a class="btn btn-default btn-xs" data-toggle="modal" data-target="#{{$v->id}}kk" title="Click To Edit"><i class="fa fa-edit"></i></a>
                            </span>
                        </td>
                    </tr>

                    <!--start detailsInfo -->
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
                                                <dt>Sum Insured :</dt>
                                                <dd>{{$v->insr_sum_insured}}BDT</dd>
                                                <dt>Tenure :</dt>
                                                <dd>{{$v->insr_period}} Years</dd>
                                                <dt>Claim Ratio :</dt>
                                                <dd>{{$v->insr_claim_ratio}} BDT</dd>
                                                <dt>MonthlyPay :</dt>
                                                <dd>{{$v->insr_monthly_payout}}  BDT</dd>
                                                <dt>LumpSumPay :</dt>
                                                <dd>{{$v->insr_lump_sum_payout}} BDT</dd>
                                                <dt>Premium  :</dt>
                                                <dd>{{$v->insr_premium}} BDT</dd>
                                            </dl>
                                            <hr>
                                            <dl class="dl-horizontal">
                                                <dt>Insurance Features :</dt>
                                                <dd>{!! $v->insr_features_benefits !!}</dd>
                                                <dt>Insurance Features :</dt>
                                                <dd>{!! $v->insr_requirements !!}</dd>
                                                <dt>Insurance Eligibility :</dt>
                                                <dd>{!! $v->insr_eligibility !!}</dd>
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

                    <!--start edit_information-->
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

                                            {!! Form::open(array('url'=>'form-insurance', 'role'=>'form', 'method'=>'POST')) !!}
                                            <input type="hidden" name="insert" value="data_update">
                                            <input type="hidden" name="id" value="{{$v->id}}">

                                            <div class="col-sm-10 m-t-20 col-sm-offset-1" style="overflow: hidden;">
                                                <div class="form-horizontal">
                                                    <div class="form-group">

                                                        <div class="col-sm-6">
                                                            <select class="form-control" name="insr_type" required>
                                                                @if($v->insr_type == 1) {
                                                                <option value="1">Life</option>
                                                                }@elseif($v->insr_type ==2){
                                                                <option value="2">Marine</option>
                                                                }@elseif($v->insr_type ==3){
                                                                <option value="3">Fire</option>
                                                                }@elseif($v->insr_type ==4){
                                                                <option value="4">Accident</option>
                                                                }@elseif($v->insr_type ==5){
                                                                <option value="5">Car</option>
                                                                }@elseif($v->insr_type ==6){
                                                                <option value="6">Bike</option>
                                                                }
                                                                @endif


                                                                <option value="1">Life</option>
                                                                <option value="2">Marine</option>
                                                                <option value="3">Fire</option>
                                                                <option value="4">Accident</option>
                                                                <option value="5">Car</option>
                                                                <option value="6">Bike</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <select class="form-control" name="insr_person" required>
                                                                @if($v->insr_person_type == 1){
                                                                <option value="1">Salaried Person</option>
                                                                }@elseif($v->insr_person_type == 2){
                                                                <option value="2">Business Person</option>
                                                                }@elseif($v->insr_person_type == 3){
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
                                                        <label for="exampleInputName2" class="col-sm-4 control-label">Sum Insured :</label>
                                                        <div class="col-sm-4">
                                                            <input type="number" name="insr_sum" value="{{$v->insr_sum_insured}}" step="any" class="form-control" id="exampleInputName2" required>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <select class="form-control" name="insr_period" required>
                                                                <option value="{{$v->insr_period}}">{{$v->insr_period}} Year</option>

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
                                                        <label for="exampleInputName2" class="col-sm-6 control-label">Types of Cover :</label>
                                                        <div class="col-sm-6">
                                                            <select class="form-control" name="insr_cover" required>
                                                                @if($v->insr_cover_type == 1){
                                                                <option value="1">First Cover</option>
                                                                }@elseif($v->insr_cover_type == 2){
                                                                <option value="2">Second Cover</option>
                                                                }@elseif($v->insr_cover_type == 3){
                                                                <option value="3">Third Cover</option>
                                                                }
                                                                @endif

                                                                <option value="1">First Cover</option>
                                                                <option value="2">Second Cover</option>
                                                                <option value="3">Third Cover</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputName2" class="col-sm-6 control-label">Monthly Payout :</label>
                                                        <div class="col-sm-6">
                                                            <input type="number" step="any" name="insr_monthly_payout" value="{{ $v->insr_monthly_payout }}" class="form-control" id="exampleInputName2">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputName2" class="col-sm-6 control-label">Insurance Sum Payout :</label>
                                                        <div class="col-sm-6">
                                                            <input type="number" step="any" name="insr_lum_sum_payout" value="{{ $v->insr_lump_sum_payout }}" class="form-control" id="exampleInputName2">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputName2" class="col-sm-6 control-label">Claim Settelment Ratio :</label>
                                                        <div class="col-sm-6">
                                                            <input type="number" step="any" name="insr_claim_ration" value="{{ $v->insr_claim_ratio }}" class="form-control" id="exampleInputName2">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputName2" class="col-sm-6 control-label">Insurance Premimuml :</label>
                                                        <div class="col-sm-6">
                                                            <input type="number" step="any" name="insr_premium" value="{{ $v->insr_premium }}" class="form-control" id="exampleInputName2">
                                                        </div>
                                                    </div>

                                                </div>
                                                <hr>
                                            </div>

                                            <div class="col-sm-12" style="overflow: hidden;">
                                                <div class="form-horizontal">
                                                    <div class="form-group">
                                                        <div class="col-sm-10 col-sm-offset-1">
                                                            <span class="text-success"><b>Insurance Requirements</b></span>
                                                            <textarea name="data_req" class="ckeditor" cols="30" rows="10">
                                                            {{$v->insr_requirements}}
                                                        </textarea>
                                                        </div>
                                                        <div class="col-sm-10 col-sm-offset-1 m-t-15">
                                                            <span class="text-success"><b>Insurance Features</b></span>
                                                            <textarea name="data_fsr" class="ckeditor" cols="30" rows="10">
                                                            {{$v->insr_features_benefits}}
                                                        </textarea>
                                                        </div>
                                                        <div class="col-sm-10 col-sm-offset-1 m-t-15">
                                                            <span class="text-success"><b>Insurance Eligibility</b></span>
                                                            <textarea name="data_elig" class="ckeditor" cols="30" rows="10">
                                                            {{$v->insr_eligibility}}
                                                        </textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputName2" class="col-sm-4 control-label">Change Bank :</label>
                                                        <div class="col-sm-6">
                                                            <select class="form-control" name="bank_id" required>
                                                                <option value="{{$v->bank->id}}">{{$v->bank->bank_name}}</option>

                                                                @foreach($bank_view as $v)
                                                                    <option value="{{$v->id}}">{{$v->bank_name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-sm-offset-4 col-sm-10">
                                                            <input type="submit" value="Update" class="btn btn-success col-sm-4">
                                                        </div>
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
                    <!--end edit_information-->

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