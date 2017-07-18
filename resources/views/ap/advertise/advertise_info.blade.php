@section('maincontent')
    @include('ap.advertise.include_advertise_menu')
    <!--start container-fluid-->
    <div class="container-fluid content-change-fixed" ng-controller="LoanController">

        <div class="panel panel-default m-b-0">
            <div class="table-h-t">
                <div class="col-md-3 m-t-5">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search here...">
                    </div>
                </div>
                <div class="col-md-3 m-t-10 text-success"><b>Advertise</b></div>
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
                    <th class="col-sm-2">Type</th>
                    <th class="col-sm-4">Website Link</th>
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
                        <a class="btn btn-default btn-xs" data-toggle="modal" data-target="#{{$v->id}}kkk">
                            <img src="{{ asset($v->add_image_url) }}" height="16px" width="30px" alt="pic">
                        </a>
                    </td>
                    <td class="col-xs-12 col-sm-2">{{$v->add_name}}</td>
                    <td class="col-xs-12 col-sm-2">
                        @if($v->add_type==1)
                        <span class="text-success">Salaried</span>
                        @elseif($v->add_type==2)
                        <span class="text-success">Business</span>
                        @else
                        <span class="text-success">Others</span>
                        @endif
                    </td>
                    <td class="col-xs-12 col-sm-4">
                        <a href="https://{{$v->add_link}}" target="_blank">{{str_limit($v->add_link, 40, '...')}}</a>
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

                <!--start detailsInfo image_update-->
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
                                    <div class="col-md-8 col-md-offset-1 f-s-14 f-f-s">
                                        <dl class="dl-horizontal text-center">
                                            <img src="{{ asset($v->add_image_url) }}" height="200px" width="300px" alt="pic">
                                        </dl>
                                        <hr>
                                        <dl class="dl-horizontal">
                                            <dt>Advertise Name :</dt>
                                            <dd>{{$v->add_name}}</dd>
                                            <dt>Type :</dt>
                                            <dd>
                                                @if($v->add_type==1)
                                                    <span class="text-success">Salaried</span>
                                                @elseif($v->add_type==2)
                                                    <span class="text-success">Business</span>
                                                @else
                                                    <span class="text-success">Others</span>
                                                @endif
                                            </dd>
                                            <dt>Publish :</dt>
                                            <dd>
                                                @if($v->add_status==1)
                                                    <span class="text-success">Publish</span>
                                                @else
                                                    <span class="text-success">unPublish</span>
                                                @endif</dd>
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
                <!--end detailsInfo -->

                <!--start detailsInfo information_update-->
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
                                    <div class="col-md-12 f-s-14 f-f-s">

                                        {!! Form::open(array('url'=>'form-advertise-save', 'role'=>'form', 'method'=>'POST')) !!}
                                        <div class="form-horizontal">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="l_id" value="{{ $v->id }}">
                                            <input type="hidden" name="data_ud" value="data_ud">

                                            <div class="form-group">
                                                <label for="exampleInputName2" class="col-sm-4 control-label m-t-20">Image :</label>
                                                <div class="col-sm-6">
                                                    <img src="{{ asset($v->add_image_url) }}" height="60px" width="90px" alt="pic">
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="form-group">
                                                <label for="exampleInputName2" class="col-sm-4 control-label">Advertise Name:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="a_name" value="{{$v->add_name}}" class="form-control" id="exampleInputName2" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputName2" class="col-sm-4 control-label">Type:</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="a_type">
                                                        <option value="{{$v->add_type}}">
                                                            @if($v->add_type==1)
                                                                Salaried
                                                            @elseif($v->add_type==2)
                                                                Business
                                                            @else
                                                                Others
                                                            @endif
                                                        </option>

                                                        <option value="1">Salaried</option>
                                                        <option value="2">Personal</option>
                                                        <option value="3">Bisiness</option>
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
                <!--end detailsInfo -->

                <!--start detailsInfo image_update-->
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
                                                <label for="exampleInputName2" class="col-sm-4 control-label m-t-20">Image :</label>
                                                <div class="col-sm-6">
                                                    <img src="{{ asset($v->add_image_url) }}" height="60px" width="90px" alt="pic">
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