@section('maincontent')
    @include('ap.advertise.include_advertise_menu')
    <!--start container-fluid-->
    <div class="container-fluid content-change-fixed" ng-controller="LoanController">

        <div class="panel panel-default m-b-0">
            <div class="table-h-t">
                <div class="col-md-3 m-t-5">
                    <div class="form-group">
                        <input type="text" value="Advertise" readonly class="form-control" placeholder="Search here...">
                    </div>
                </div>
                <div class="col-md-3 m-t-10 text-success"></div>
                <div class="col-md-4">
                    <i class="fa text-success">{{ Session::get('msg_suc') }} {{ Session::put('msg_suc', '') }}</i>
                    <i class="fa text-danger">{{ Session::get('msg_error') }} {{ Session::put('msg_error', '') }}</i>
                </div>
                <div class="col-md-2 text-right m-t-10">
                    <a href="{{ url('form'.'/'.'advertise') }}" class="btn btn-default btn-xs text-success width-100" title="Assign Advertise"><i class="fa fa-plus"> Advertise</i></a>
                </div>
            </div>

            <table class="table table-fixed">
                <thead>
                <tr class="success">
                    <th class="col-sm-1">No</th>
                    <th class="col-sm-1">Picture</th>
                    <th class="col-sm-2">Advertise Name</th>
                    <th class="col-sm-4">Type</th>
                    <th class="col-sm-2">Website Link</th>
                    <th class="col-sm-2">Action</th>
                </tr>
                </thead>
                <tbody>

                @php $number = 0; $off = 0; $on = 1; $table = 11; @endphp
                @foreach($loan_view as $v)
                <tr>
                    <td class="col-xs-12 col-sm-1 text-success">
                        <a class="btn btn-default btn-xs"><i class="fa">{{$number = $number+1}}</i></a>
                    </td>
                    <td class="col-xs-12 col-sm-1 text-success" title="Click To Edit">
                        <a class="" data-toggle="modal" data-target="#{{$v->id}}kkk">
                            <img src="{{ asset('ap/images/advertise/'.$v->add_image_url) }}" height="16px" width="30px" alt="pic">
                        </a>
                    </td>
                    <td class="col-xs-12 col-sm-2">{{$v->add_name}}</td>
                    <td class="col-xs-12 col-sm-4">
                        <a class="btn btn-default btn-xs" data-toggle="modal" data-target="#{{$v->id}}kt" title="Change Date"><i class="fa fa-hand-o-right"></i></a>
                        &nbsp; {{$v->add_start_date}} - <span class="text-danger">{{$v->add_end_date}}</span>
                    </td>
                    <td class="col-xs-12 col-sm-2">
                        @if($v->add_type==1)
                            <a href="{{$v->add_link}}" target="_blank">Home Loan</a>
                        @elseif($v->add_type==2)
                            <a href="{{$v->add_link}}" target="_blank">Car Loan</a>
                        @elseif($v->add_type==3)
                            <a href="{{$v->add_link}}" target="_blank">Personal Loan</a>
                        @elseif($v->add_type==4)
                            <a href="{{$v->add_link}}" target="_blank">SME Loan</a>
                        @elseif($v->add_type==5)
                            <a href="{{$v->add_link}}" target="_blank">Work Capital Loan</a>
                        @elseif($v->add_type==6)
                            <a href="{{$v->add_link}}" target="_blank">Other's Loan</a>
                        @elseif($v->add_type==7)
                            <a href="{{$v->add_link}}" target="_blank">Saving Account</a>
                        @elseif($v->add_type==8)
                            <a href="{{$v->add_link}}" target="_blank">Fixed Account</a>
                        @elseif($v->add_type==9)
                            <a href="{{$v->add_link}}" target="_blank">Mutual Account</a>
                        @elseif($v->add_type==10)
                            <a href="{{$v->add_link}}" target="_blank">Life Insureance</a>
                        @elseif($v->add_type==11)
                            <a href="{{$v->add_link}}" target="_blank">Bike Insureance</a>
                        @elseif($v->add_type==12)
                            <a href="{{$v->add_link}}" target="_blank">Car Insureance</a>
                        @elseif($v->add_type==13)
                            <a href="{{$v->add_link}}" target="_blank">Marine Insureance</a>
                        @elseif($v->add_type==14)
                            <a href="{{$v->add_link}}" target="_blank">Fire Insureance</a>
                        @elseif($v->add_type==15)
                            <a href="{{$v->add_link}}" target="_blank">Accident Insureance</a>
                        @elseif($v->add_type==16)
                            <a href="{{$v->add_link}}" target="_blank">Credit Card</a>
                        @else
                            <a href="{{$v->add_link}}" target="_blank">Debit Card</a>
                        @endif
                    </td>
                    <td class="col-xs-12 col-sm-2">
                        <span class="">
                            @if($v->add_status==1)
                                <a href="{{URL::to('publication/'.$v->id.'/'.$off.'/'.$table)}}" class="btn btn-default btn-xs" title="Publish"><i class="text-success-light fa fa-check"></i></a>
                            @else
                                <a href="{{URL::to('publication/'.$v->id.'/'.$on.'/'.$table)}}" class="btn btn-default btn-xs" title="unPublish">&nbsp;<i class="text-danger-light fa fa-lock"> </i></a>
                            @endif

                            &nbsp; &nbsp; &nbsp;
                            <a class="btn btn-default btn-xs" data-toggle="modal" data-target="#{{$v->id}}" title="Details Information"><i class="fa fa-list"></i></a>
                            <a class="btn btn-default btn-xs" data-toggle="modal" data-target="#{{$v->id}}kk" title="Click To Edit"><i class="fa fa-edit"></i></a>
                        </span>
                    </td>
                </tr>

                <!--start details_information-->
                <div id="{{$v->id}}" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!--start Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title text-success text-center">&nbsp;
                                    {{$v->add_name}}
                                </h4>
                            </div>
                            <div class="modal-body" style="overflow: hidden">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <img src="{{ asset('ap/images/advertise/'.$v->add_image_url) }}" border="0" width="100%" height="90" alt="pic">
                                    </div>
                                    <div class="col-md-8 col-md-offset-1 f-s-14 f-f-s">

                                        <hr>
                                        <dl class="dl-horizontal">
                                            <dt>Advertise Name :</dt>
                                            <dd>{{$v->add_name}}</dd>
                                            <dt>Page Location :</dt>
                                            <dd>
                                                @if($v->add_type==1)
                                                    <span class="text-success">Home Loan</span>
                                                @elseif($v->add_type==2)
                                                    <span class="text-success">Car Loan</span>
                                                @elseif($v->add_type==3)
                                                    <span class="text-success">Personal Loan</span>
                                                @elseif($v->add_type==4)
                                                    <span class="text-success">SME Loan</span>
                                                @elseif($v->add_type==5)
                                                    <span class="text-success">Work Capital Loan</span>
                                                @elseif($v->add_type==6)
                                                    <span class="text-success">Other's Loan</span>
                                                @elseif($v->add_type==7)
                                                    <span class="text-success">Saving Account</span>
                                                @elseif($v->add_type==8)
                                                    <span class="text-success">Fixed Account</span>
                                                @elseif($v->add_type==9)
                                                    <span class="text-success">Mutual Account</span>
                                                @elseif($v->add_type==10)
                                                    <span class="text-success">Life Insureance</span>
                                                @elseif($v->add_type==11)
                                                    <span class="text-success">Bike Insureance</span>
                                                @elseif($v->add_type==12)
                                                    <span class="text-success">Car Insureance</span>
                                                @elseif($v->add_type==13)
                                                    <span class="text-success">Marine Insureance</span>
                                                @elseif($v->add_type==14)
                                                    <span class="text-success">Fire Insureance</span>
                                                @elseif($v->add_type==15)
                                                    <span class="text-success">Accident Insureance</span>
                                                @elseif($v->add_type==16)
                                                    <span class="text-success">Credit Card</span>
                                                @else
                                                    <span class="text-success">Debit Card</span>
                                                @endif
                                            </dd>
                                            <dt>Status :</dt>
                                            <dd>
                                                @if($v->add_status==1)
                                                    <span class="text-success"><i class="fa fa-check"></i> Publish</span>
                                                @else
                                                    <span class="text-danger"><i class="fa fa-remove"></i> unPublish</span>
                                                @endif
                                            </dd>

                                            <dt>Website Link :</dt>
                                            <dd><a href="{{$v->add_link}}" target="_blank">{{$v->add_link}}</a></dd>
                                            <dt>Company Name :</dt>
                                            <dd>{!! $v->add_company_name !!}</dd>
                                            <dt>Details Information :</dt>
                                            <dd>{!! $v->add_desc !!}</dd>
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
                <!--end details_information-->

                <!--start information_update-->
                <div id="{{$v->id}}kk" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!--start Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title text-success text-center">
                                    {{$v->add_name}}
                                </h4>
                            </div>
                            <div class="modal-body" style="overflow: hidden">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <img src="{{ asset('ap/images/advertise/'.$v->add_image_url) }}" border="0" width="100%" height="90" alt="pic">
                                    </div>
                                    <div class="col-md-12 f-s-14 f-f-s">

                                        {!! Form::open(array('url'=>'form-advertise-save', 'role'=>'form', 'method'=>'POST')) !!}
                                        <div class="form-horizontal">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="l_id" value="{{ $v->id }}">
                                            <input type="hidden" name="data_ud" value="data_ud">

                                            <hr>
                                            <div class="form-group">
                                                <label for="exampleInputName2" class="col-sm-4 control-label">Advertise Name:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="a_name" value="{{$v->add_name}}" class="form-control" id="exampleInputName2" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputName2" class="col-sm-4 control-label">Page Area:</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="a_type">
                                                        <option value="{{$v->add_type}}" class="text-danger-light">
                                                            @if($v->add_type==1)
                                                                Home Loan
                                                            @elseif($v->add_type==2)
                                                                Car Loan
                                                            @elseif($v->add_type==3)
                                                                Personal Loan
                                                            @elseif($v->add_type==4)
                                                                SME Loan
                                                            @elseif($v->add_type==5)
                                                                Work Capital Loan
                                                            @elseif($v->add_type==6)
                                                                Other's Loan
                                                            @elseif($v->add_type==7)
                                                                Saving Account
                                                            @elseif($v->add_type==8)
                                                                Fixed Account
                                                            @elseif($v->add_type==9)
                                                                Mutual Account
                                                            @elseif($v->add_type==10)
                                                                Life Insureance
                                                            @elseif($v->add_type==11)
                                                                Bike Insureance
                                                            @elseif($v->add_type==12)
                                                                Car Insureance
                                                            @elseif($v->add_type==13)
                                                                Marine Insureance
                                                            @elseif($v->add_type==14)
                                                                Fire Insureance
                                                            @elseif($v->add_type==15)
                                                                Accident Insureance
                                                            @elseif($v->add_type==16)
                                                                Credit Card
                                                            @else
                                                                Debit Card
                                                            @endif
                                                        </option>

                                                        <option value="">Select Type</option>
                                                        <option value="1" class="text-success">Home Loan</option>
                                                        <option value="2" class="text-success">Car Loan</option>
                                                        <option value="3" class="text-success">Personal Loan</option>
                                                        <option value="4" class="text-success">SME Loan</option>
                                                        <option value="5" class="text-success">Work Capital Loan</option>
                                                        <option value="6" class="text-success">Other's Loan</option>
                                                        <option value="7" class="text-danger">Saving Account</option>
                                                        <option value="8" class="text-danger">Fixed Account</option>
                                                        <option value="9" class="text-danger">Mutual Account</option>
                                                        <option value="10" class="text-warning">Life Insureance</option>
                                                        <option value="11" class="text-warning">Bike Insureance</option>
                                                        <option value="12" class="text-warning">Car Insureance</option>
                                                        <option value="13" class="text-warning">Marine Insureance</option>
                                                        <option value="14" class="text-warning">Fire Insureance</option>
                                                        <option value="15" class="text-warning">Accident Insureance</option>
                                                        <option value="16" class="text-primary">Credit Card</option>
                                                        <option value="17" class="text-primary">Debit Card</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputName2" class="col-sm-4 control-label">Website Link :</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="a_link" value="{{$v->add_link}}" class="form-control" id="exampleInputName2" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputName2" class="col-sm-4 control-label">Company Name :</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="a_company_name" value="{{$v->add_company_name}}" class="form-control" id="exampleInputName2">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="form-horizontal">
                                            <div class="form-group">
                                                <label for="exampleInputName2" class="col-sm-4 control-label">Advertise Description :</label>
                                                <div class="col-sm-8">
                                                    <textarea name="a_desc" cols="20" rows="10" class="form-control">{{$v->add_desc}}</textarea>
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
                <!--end information_update-->

                <!--start image_update-->
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


                                        {!! Form::open(array('url'=>'image-update', 'role'=>'form', 'method'=>'POST', 'files'=>'true')) !!}
                                        <div class="form-horizontal">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="id" value="{{ $v->id }}">
                                            <input type="hidden" name="t_id" value="11">

                                            <div class="form-group">
                                                <div class="col-sm-12 m-t-20">
                                                    <img src="{{ asset('ap/images/advertise/'.$v->add_image_url) }}" border="0" width="100%" height="90" alt="pic">
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="form-group">
                                                <label for="exampleInputName2" class="col-sm-4 control-label">Change Picture:</label>
                                                <div class="col-sm-6">
                                                    <input type="file" name="image" required>
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
                <!--end image_update-->

                <!--start date_update-->
                <div id="{{$v->id}}kt" class="modal fade" role="dialog">
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


                                        {!! Form::open(array('url'=>'form-advertise-save', 'role'=>'form', 'method'=>'POST')) !!}
                                        <div class="form-horizontal">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="l_id" value="{{ $v->id }}">
                                            <input type="hidden" name="data_ud" value="data_ud_date">

                                            <div class="form-group">
                                                <label for="exampleInputName2" class="col-sm-4 control-label">Start Date :</label>
                                                <div class="col-sm-6 m-t-10">
                                                    {{$v->add_start_date}}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName2" class="col-sm-4 control-label">End Date :</label>
                                                <div class="col-sm-6 m-t-10">
                                                    {{$v->add_end_date}}
                                                </div>
                                            </div>
                                            <hr>

                                            {{--<i class="fa text-success">Update your date here...</i>--}}
                                            <div class="form-group">
                                                <label for="exampleInputName2" class="col-sm-4 control-label">Update Start Date :</label>
                                                <div class="col-sm-6">
                                                    <input type="date" name="s_date" class="form-control" id="exampleInputName2" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName2" class="col-sm-4 control-label">Update End Date :</label>
                                                <div class="col-sm-6">
                                                    <input type="date" name="e_date" class="form-control" id="exampleInputName2" required>
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
                <!--end date_update-->
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