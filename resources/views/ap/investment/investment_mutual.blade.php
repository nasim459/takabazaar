@section('maincontent')
    @include('ap.investment.include_investment_menu')
    <!--start container-fluid-->
    <div class="container-fluid content-change-fixed" ng-controller="LoanController">

        <div class="panel panel-default m-b-0">
            <div class="table-h-t">
                <div class="col-md-3 m-t-5">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search here...">
                    </div>
                </div>
                <div class="col-md-3 m-t-10 text-success"><b>Mutual Accounts</b></div>
                <div class="col-md-4">
                    <i class="fa text-success">{{ Session::get('msg_suc') }} {{ Session::put('msg_suc', '') }}</i>
                    <i class="fa text-danger">{{ Session::get('msg_error') }} {{ Session::put('msg_error', '') }}</i>
                </div>
                <div class="col-md-2 text-right m-t-10">
                    <a href="{{ url('form'.'/'.'investment') }}" class="btn btn-default btn-xs text-success width-100" title="Assign Investment"><i class="fa fa-plus"> Investment</i></a>
                </div>
            </div>

            <table class="table table-fixed">
                <thead>
                <tr class="success">
                    <th class="col-sm-2">Bank Name</th>
                    <th class="col-sm-2">Interest Rate</th>
                    <th class="col-sm-2">Tenure Range</th>
                    <th class="col-sm-2">Amount UpTo</th>
                    <th class="col-sm-2">Person Type</th>
                    <th class="col-sm-2">Action</th>
                </tr>
                </thead>
                <tbody>

                @php $number = 0; $off = 0; $on = 1; $table = 44; @endphp
                @foreach($invst_view as $v)
                    <tr>
                        <td class="col-xs-12 col-sm-2 text-success" title="{{$v->bank['bank_name']}}">
                            <a class="btn btn-default btn-xs"><i class="fa">{{$number = $number+1}}</i></a>
                            <a class="btn btn-default btn-xs" data-toggle="modal" data-target="#{{$v->id}}kkk">
                                <img src="{{ asset($v->bank['bank_image_url']) }}" height="16px" width="30px" alt="pic">
                            </a>
                            {{str_limit($v->bank['bank_name'], 8, ' ...')}}
                        </td>
                        <td class="col-xs-12 col-sm-2">{{$v->invst_interest_rate_from}}% &nbsp; - &nbsp; {{$v->invst_interest_rate_to}}%</td>
                        <td class="col-xs-12 col-sm-2">&nbsp;&nbsp;{{$v->invst_tenure_rate}} Year</td>
                        <td class="col-xs-12 col-sm-2">&nbsp;&nbsp;{{$v->invst_amount_upto}} ৳</td>
                        <td class="col-xs-12 col-sm-2">&nbsp;&nbsp;
                            @if($v->invst_person_type==1)
                                <span class="text-success">Salaried</span>
                            @elseif($v->invst_person_type==2)
                                <span class="text-success">Business</span>
                            @else
                                <span class="text-success">Others</span>
                            @endif

                        </td>
                        <td class="col-xs-12 col-sm-2">
                            <span class="">
                                @if($v->invst_status==1)
                                    <a href="{{URL::to('publication/'.$v->id.'/'.$off.'/'.$table)}}" class="btn btn-default btn-xs" title="Publish"><i class="text-success-light fa fa-check"></i></a>
                                @else
                                    <a href="{{URL::to('publication/'.$v->id.'/'.$on.'/'.$table)}}" class="btn btn-default btn-xs" title="unPublish">&nbsp;<i class="text-danger-light fa fa-lock"> </i></a>
                                @endif
                                &nbsp; &nbsp;
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
                                        <img src="{{ asset($v->bank['bank_image_url']) }}" height="20px" width="30px" alt="pic">&nbsp;
                                        {{$v->bank['bank_name']}}
                                    </h4>
                                </div>
                                <div class="modal-body" style="overflow: hidden">
                                    <div class="col-md-12">
                                        <div class="col-md-10 col-md-offset-1 f-s-14 f-f-s">
                                            <dl class="dl-horizontal">
                                                <dt>Offering Type :</dt>
                                                <dd>
                                                    @if($v->invst_type==1)
                                                        <span class="text-success">Save Account</span>
                                                    @elseif($v->invst_type==2)
                                                        <span class="text-success">Fixed Account</span>
                                                    @else
                                                        <span class="text-success">Mutual Account</span>
                                                    @endif
                                                </dd>
                                                <dt>Person Type :</dt>
                                                <dd>
                                                    @if($v->invst_person_type==1)
                                                        <span class="text-success">Salaried</span>
                                                    @elseif($v->invst_person_type==2)
                                                        <span class="text-success">Business</span>
                                                    @else
                                                        <span class="text-success">Others</span>
                                                    @endif
                                                </dd>
                                            </dl>
                                            <hr>
                                            <dl class="dl-horizontal">
                                                <dt>Investment Rate :</dt>
                                                <dd>{{$v->invst_interest_rate_from}}% &nbsp; - &nbsp; {{$v->invst_interest_rate_to}}%</dd>
                                                <dt>Tenure Range :</dt>
                                                <dd>{{$v->invst_tenure_rate}} Years</dd>
                                                <dt>Amount UpTo :</dt>
                                                <dd>{{$v->invst_amount_upto}} BDT</dd>
                                            </dl>
                                            <hr>
                                            <dl class="dl-horizontal">
                                                <dt>Requirements :</dt>
                                                <dd>{!! $v->invst_requirements !!}</dd>
                                                <dt>Features :</dt>
                                                <dd>{!! $v->invst_features_benefits !!}</dd>
                                                <dt>Eligibility :</dt>
                                                <dd>{!! $v->invst_eligibility !!}</dd>
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
                                        <img src="{{ asset($v->bank['bank_image_url']) }}" height="20px" width="30px" alt="pic">&nbsp;
                                        {{$v->bank['bank_name']}}
                                    </h4>
                                </div>
                                <div class="modal-body" style="overflow: hidden">
                                    <div class="col-md-12">
                                        <div class="col-md-12 f-s-14 f-f-s">

                                            {!! Form::open(array('url'=>'form-investment', 'role'=>'form', 'method'=>'POST')) !!}
                                            <div class="form-horizontal">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="hidden" name="insert" value="data_update">

                                                <input type="hidden" name="i_id" value="{{ $v->id }}">
                                                <input type="hidden" name="bank_id" value="{{ $v->bank['id'] }}">

                                                <div class="form-group">
                                                    <div class="col-sm-6">
                                                        <select class="form-control" name="invst_type" required>
                                                            @if($v->invst_type==1)
                                                                <option value="1">Save Accounts</option>
                                                            @elseif($v->invst_type==2)
                                                                <option value="2">Fixed Accounts</option>
                                                            @else
                                                                <option value="3">Mutual Accounts</option>
                                                            @endif

                                                            <option value="1">Save Accounts</option>
                                                            <option value="2">Fixed Accounts</option>
                                                            <option value="3">Mutual Accounts</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <select class="form-control" name="invst_person" required>
                                                            @if($v->invst_person_type == 1){
                                                            <option value="1">Salaried Person</option>
                                                            }@elseif($v->invst_person_type == 2){
                                                            <option value="2">Business Person</option>
                                                            }@elseif($v->invst_person_type == 3){
                                                            <option value="3">Others</option>
                                                            }
                                                            @endif

                                                            <option value="1">Salaried Person</option>
                                                            <option value="2">Business Person</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <hr>

                                                <div class="form-group">
                                                    <label for="exampleInputName2" class="col-sm-6 control-label">Investment Amount UpTo:</label>
                                                    <div class="col-sm-3">
                                                        <input type="number" name="invst_amount" value="{{$v->invst_amount_upto}}" class="form-control" id="exampleInputName2" placeholder="Ex. 200000 TK" required>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="invst_period" required>
                                                            <option value="{{$v->invst_tenure_rate}}">{{$v->invst_tenure_rate}} Year</option>

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
                                                    <label for="exampleInputName2" class="col-sm-6 control-label">Investment Interest Rate % :</label>
                                                    <div class="col-sm-3">
                                                        <input type="number" step="0.01" name="invst_rate_from" value="{{$v->invst_interest_rate_from}}" class="form-control" id="exampleInputName2" placeholder="EX. 0%">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input type="number" step="0.01" name="invst_rate_to" value="{{$v->invst_interest_rate_to}}" class="form-control" id="exampleInputName2" placeholder="EX. 20%">
                                                    </div>
                                                </div>
                                                <hr>


                                                <div class="form-group">
                                                    <div class="col-sm-10 col-sm-offset-1">
                                                        <span class="text-success"><b>Investment  Requirements</b></span>
                                                        <textarea name="data_req" class="ckeditor" cols="30" rows="10">
                                                            {{$v->invst_requirements}}
                                                        </textarea>
                                                    </div>
                                                    <div class="col-sm-10 col-sm-offset-1 m-t-15">
                                                        <span class="text-success"><b>Investment  Features</b></span>
                                                        <textarea name="data_fsr" class="ckeditor" cols="30" rows="10">
                                                            {{$v->invst_features_benefits}}
                                                        </textarea>
                                                    </div>
                                                    <div class="col-sm-10 col-sm-offset-1 m-t-15">
                                                        <span class="text-success"><b>Investment  Eligibility</b></span>
                                                        <textarea name="data_elig" class="ckeditor" cols="30" rows="10">
                                                            {{$v->invst_eligibility}}
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
                                                <input type="hidden" name="t_id" value="44">

                                                <div class="form-group">
                                                    <label for="exampleInputName2" class="col-sm-4 control-label m-t-20">Image :</label>
                                                    <div class="col-sm-6">
                                                        <img src="{{ asset($v->bank['bank_image_url']) }}" height="60px" width="90px" alt="pic"><br>
                                                        <b class="m-t-10">{{ ($v->bank['bank_name']) }}</b>
                                                    </div>
                                                </div>
                                                <hr>

                                                <div class="form-group">
                                                    <label for="exampleInputName2" class="col-sm-4 control-label">Change Bank:</label>
                                                    <div class="col-sm-8">
                                                        <select class="form-control" name="bank_id" required>
                                                            <option value="{{($v->bank['id'])}}">{{($v->bank['bank_name'])}}</option>

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

                @if ((Session::get('count')) == 0 )
                    <span style="color: #a09393; font-size: 20px; position: absolute; z-index: 10; bottom: 250px; right: 400px;">
                        <i class="fa text-success">Data Not Entered Into The System !!!</i>
                    </span>
                @endif

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