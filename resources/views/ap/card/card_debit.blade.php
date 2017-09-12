@section('maincontent')
    @include('ap.card.include_card_menu')
    <!--start container-fluid-->
    <div class="container-fluid content-change-fixed" ng-controller="LoanController">

        <div class="panel panel-default m-b-0">
            <div class="table-h-t">
                <div class="col-md-3 m-t-5">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search here...">
                    </div>
                </div>
                <div class="col-md-3 m-t-10 text-success"><b>Debit Card</b></div>
                <div class="col-md-4">
                    <i class="fa text-success">{{ Session::get('msg_suc') }} {{ Session::put('msg_suc', '') }}</i>
                    <i class="fa text-danger">{{ Session::get('msg_error') }} {{ Session::put('msg_error', '') }}</i>
                    <i class="fa text-danger">{{ Session::get('msg_delete') }} {{ Session::put('msg_delete', '') }}</i>
                </div>
                <div class="col-md-2 text-right m-t-10">
                    <a href="{{ url('form'.'/'.'card-debit') }}" class="btn btn-default btn-xs text-success width-100" title="Assign Card"><i class="fa fa-plus"> Card Add</i></a>
                </div>
            </div>

            <table class="table table-fixed">
                <thead>
                <tr class="success">
                    <th class="col-sm-2">Bank Name</th>
                    <th class="col-sm-2">Card Type</th>

                    <th class="col-sm-2">Yearly Limit</th>
                    <th class="col-sm-2" title="Activation Deposit">Activation Deposit</th>
                    <th class="col-sm-1" title="Minimum Balance">Minimum</th>
                    <th class="col-sm-1" title="Daily Limit ATM & Purchase">Daily Limit</th>
                    <th class="col-sm-2" title="Reward & Installment">Reward<span class="pull-right">Action</span></th>
                </tr>
                </thead>
                <tbody>

                @php $number = 0; $off = 0; $on = 1; $table = 99; @endphp
                @foreach($card_view as $v)
                    <tr>
                        <td class="col-xs-12 col-sm-2 text-success" title="{{$v->bank['bank_name']}}">
                            <a class="btn btn-default btn-xs"><i class="fa">{{$number = $number+1}}</i></a>
                            <a class="btn btn-default btn-xs" data-toggle="modal" data-target="#{{$v->id}}kkk">
                                <img src="{{ asset('ap/images/banks/'.$v->bank['bank_image_url']) }}" height="16px" width="30px" alt="pic">
                            </a>
                            {{str_limit($v->bank['bank_name'], 8, ' ...')}}
                        </td>
                        <td class="col-xs-12 col-sm-2 text-success" title="{{$v->cardcategorie['cc_name']}}">
                            <a class="" data-toggle="modal" data-target="#{{$v->id}}kkk">
                                <img src="{{ asset($v->cardcategorie['cc_image_url']) }}" height="20px" width="30px" alt="pic">
                            </a>
                            {{str_limit($v->cardcategorie['cc_name'], 15, ' ...')}}
                        </td>

                        <td class="col-xs-12 col-sm-2">{{$v->c_yearly_limit}} ৳</td>
                        <td class="col-xs-12 col-sm-2">{{$v->c_activation_deposit}} ৳</td>
                        <td class="col-xs-12 col-sm-1">{{$v->c_min_balance}} ৳</td>
                        <td class="col-xs-12 col-sm-1"><span title="Daily_Limit_ATM={{$v->c_daily_limit_atm}}৳ & Daily_Limit_Purchase={{$v->c_daily_limit_purchase}}৳">{{$v->c_daily_limit_atm}} ৳</span></td>
                        <td class="col-xs-12 col-sm-2">
                            {{$v->c_reward_installment}} ৳

                            <span class="pull-right">
                                @if($v->c_status == 1)
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
                                                <dt>Yearly Limit :</dt>
                                                <dd>{{$v->c_yearly_limit}} ৳ / thousand</dd>
                                                <dt>Activation Deposit :</dt>
                                                <dd>{{$v->c_activation_deposit}}</dd>
                                                <dt>Minimum Balance :</dt>
                                                <dd>{{$v->c_min_balance}} ৳</dd>
                                                <dt>Daily Limit ATM :</dt>
                                                <dd>{{$v->c_daily_limit_atm}} ৳</dd>
                                                <dt>Daily Limit Purchase :</dt>
                                                <dd>{{$v->c_daily_limit_purchase}} ৳</dd>
                                            </dl>
                                            <hr>
                                            <dl class="dl-horizontal">
                                                <dt>Card Features :</dt>
                                                <dd>{!! $v->c_features_benefits !!}</dd>
                                                <dt>Card Requirements :</dt>
                                                <dd>{!! $v->c_requirements !!}</dd>
                                                <dt>Card Eligibility :</dt>
                                                <dd>{!! $v->c_eligibility !!}</dd>
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
                                        <img src="{{ asset('ap/images/banks/'.$v->bank['bank_image_url']) }}" height="20px" width="30px" alt="pic">&nbsp;
                                        {{$v->bank['bank_name']}}
                                    </h4>
                                </div>
                                <div class="modal-body" style="overflow: hidden">
                                    <div class="col-md-12">
                                        <div class="col-md-12 f-s-14 f-f-s">

                                            {!! Form::open(array('url'=>'form-card-debit-save', 'role'=>'form', 'method'=>'POST')) !!}
                                            <div class="form-horizontal">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                                <input type="hidden" name="c_id" value="{{ $v->id }}">
                                                <input type="hidden" name="b_id" value="{{$v->bank['id']}}">
                                                <input type="hidden" name="cc_id_old" value="{{$v->cardcategorie['id']}}">
                                                <input type="hidden" name="data_ud" value="data_ud">

                                                <dl class="dl-horizontal">
                                                    <dt class="text-success">Bank Name :</dt>
                                                    <dd>{{$v->bank['bank_name']}}</dd>
                                                    <dt class="text-success">Card Type :</dt>
                                                    <dd>{{$v->cardcategorie['cc_name']}}</dd>
                                                </dl>
                                                <hr>

                                                <div class="form-group">
                                                    <label for="exampleInputName2" class="col-sm-4 control-label">Yearly Limit :</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" name="y_limit" value="{{$v->c_yearly_limit}}" step="0.01" class="form-control" id="exampleInputName2" placeholder="Ex. 0.99 TK" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputName2" class="col-sm-4 control-label">Activation Deposit :</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" name="a_deposit" value="{{$v->c_activation_deposit}}" step="0.01" class="form-control" id="exampleInputName2" placeholder="Ex. 45" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputName2" class="col-sm-4 control-label">Minimum Balance :</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" name="m_balance" value="{{$v->c_min_balance}}" step="0.01" class="form-control" id="exampleInputName2" placeholder="Ex. 1500 TK" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputName2" class="col-sm-4 control-label">Daily Limit ATM :</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" name="d_limit_atm" value="{{$v->c_daily_limit_atm}}" step="0.01" class="form-control" id="exampleInputName2" placeholder="Ex. 0.75 %" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputName2" class="col-sm-4 control-label">Daily Limit Purchase :</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" name="d_limit_purchase" value="{{$v->c_daily_limit_purchase}}" step="0.01" class="form-control" id="exampleInputName2" placeholder="Ex. 1000 TK" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputName2" class="col-sm-4 control-label">Reward & Installment :</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" name="r_installment" value="{{$v->c_reward_installment}}" step="0.01" class="form-control" id="exampleInputName2" placeholder="Ex. 1000 TK" required>
                                                    </div>
                                                </div>
                                                <hr>

                                                {{--<div class="form-horizontal">--}}
                                                <div class="form-group">
                                                    <div class="col-sm-10 col-sm-offset-1">
                                                        <span class="text-success"><b>Card Requirements</b></span>
                                                        <textarea name="data_req" class="ckeditor" cols="30" rows="10">
                                                            {{$v->c_features_benefits}}
                                                        </textarea>
                                                    </div>

                                                    <div class="col-sm-10 col-sm-offset-1 m-t-15">
                                                        <span class="text-success"><b>Card Features</b></span>
                                                        <textarea name="data_fsr" class="ckeditor" cols="30" rows="10">
                                                            {{$v->c_features_benefits}}
                                                        </textarea>
                                                    </div>

                                                    <div class="col-sm-10 col-sm-offset-1 m-t-15">
                                                        <span class="text-success"><b>Card Eligibility</b></span>
                                                        <textarea name="data_elig" class="ckeditor" cols="30" rows="10">
                                                            {{$v->c_eligibility}}
                                                        </textarea>
                                                    </div>
                                                </div>

                                                <hr>
                                                <div class="form-group">
                                                    <label for="exampleInputName2" class="col-sm-4 control-label">Change Card Type :</label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control" name="cc_id_new">
                                                            <option value="">Select Card Type</option>

                                                            @foreach($cardcategorie_view as $v)
                                                                <option value="{{$v->id}}">{{$v->cc_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputName2" class="col-sm-4 control-label"></label>
                                                    <div class="col-sm-7">
                                                        <input type="submit" value="Update" class="btn btn-success col-sm-12">
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
                                                <input type="hidden" name="t_id" value="99">

                                                <div class="form-group">
                                                    <label for="exampleInputName2" class="col-sm-4 control-label m-t-20">Image :</label>
                                                    <div class="col-sm-6">
                                                        <img src="{{ asset('ap/images/banks/'.$v->bank['bank_image_url']) }}" height="60px" width="90px" alt="pic"><br>
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