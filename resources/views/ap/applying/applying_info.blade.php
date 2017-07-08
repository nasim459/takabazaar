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
                <div class="col-md-3 m-t-10 text-success"><b>Applying Information</b></div>
                <div class="col-md-4">
                    <i class="fa text-success">{{ Session::get('msg_suc') }} {{ Session::put('msg_suc', '') }}</i>
                    <i class="fa text-danger">{{ Session::get('msg_error') }} {{ Session::put('msg_error', '') }}</i>
                    <i class="fa text-danger">{{ Session::get('msg_delete') }} {{ Session::put('msg_delete', '') }}</i>
                </div>
                <div class="col-md-2 text-right m-t-10">
                    <a href="{{ url('form'.'/'.'bank') }}" class="btn btn-default btn-xs text-success width-100" title="Add Customer"><i class="fa fa-plus"> Add</i></a>
                </div>
            </div>

            <table class="table table-fixed">
                <thead>
                <tr class="success">
                    <th class="col-sm-1">No</th>
                    <th class="col-sm-4">Name</th>
                    <th class="col-sm-2">Phone</th>
                    <th class="col-sm-2">Type</th>
                    <th class="col-sm-1">Status</th>
                    <th class="col-sm-2">Action</th>
                </tr>
                </thead>
                <tbody>

                @php $number = 0; $off = 0; $on = 1; $table = 22; @endphp
                @foreach($bank_view as $v)
                <tr>
                    <td class="col-xs-12 col-sm-1 text-success">
                        <a class="btn btn-default btn-xs"><i class="fa">{{$number = $number+1}}</i></a>
                    </td>
                    <td class="col-xs-12 col-sm-4">Yamin Alam Sarker</td>
                    <td class="col-xs-12 col-sm-2">01777888757</td>
                    <td class="col-xs-12 col-sm-2">Loan</td>
                    <td class="col-xs-12 col-sm-1">
                        <a href="" class="btn btn-default btn-xs" title="Applying Request"><i class="text-danger-light fa fa-arrow-down"></i></a>
                    </td>
                    <td class="col-xs-12 col-sm-2">
                        <a href="" class="btn btn-default btn-xs" title="Publish"><i class="text-success-light fa fa-check"></i></a>
                    </td>
                </tr>


                <!--start detailsInfo -->
                <div id="{{$v->id}}kk" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!--start Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title text-success text-center">
                                    <img src="{{ asset($v->bank_image_url) }}" height="20px" width="30px" alt="pic">
                                    {{$v->bank_name}}
                                </h4>
                            </div>
                            <div class="modal-body" style="overflow: hidden">
                                <div class="col-md-12">
                                    <div class="col-md-12 f-s-14 f-f-s">

                                        {!! Form::open(array('url'=>'form-bank-update', 'role'=>'form', 'method'=>'POST')) !!}
                                        <div class="form-horizontal">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="b_id" value="{{ $v->id }}">

                                            <div class="form-group m-t-15">
                                                <label for="exampleInputName2" class="col-sm-4 control-label">Bank Name :</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="b_name" value="{{$v->bank_name}}" class="form-control" id="exampleInputName2" required>
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

                <!--start detailsInfo -->
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
                                            <input type="hidden" name="t_id" value="22">

                                            <div class="form-group">
                                                <label for="exampleInputName2" class="col-sm-4 control-label m-t-20">Image :</label>
                                                <div class="col-sm-6">
                                                    <img src="{{ asset($v->bank_image_url) }}" height="60px" width="90px" alt="pic">
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

                <!--start detailsInfo Delete-->
                <div id="{{$v->id}}kkd" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!--start Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title text-success text-center">
                                    Delete Information
                                </h4>
                            </div>
                            <div class="modal-body" style="overflow: hidden">
                                <div class="col-md-12">
                                    <div class="col-md-12 f-s-14 f-f-s">

                                        {!! Form::open(array('url'=>'delete', 'role'=>'form', 'method'=>'POST')) !!}
                                        <div class="form-horizontal">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="id" value="{{ $v->id }}">
                                            <input type="hidden" name="t_id" value="22">

                                            <div class="form-group text-center">
                                                <h1 style="color: #f73c3c; text-shadow: 2px 2px 4px #c3c3c3;">
                                                    Are you sure to delete this data?
                                                </h1>
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="form-horizontal">
                                            <div class="form-group">
                                                <div class="col-sm-offset-4 col-sm-10 m-t-15">
                                                    <input type="submit" value="Delete" class="btn btn-danger col-sm-4">
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
                <span class="text-success f-s-12">Showing 1 to 10 of 12 entries</span>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-1 col-md-offset-2"></div>
        </div>


    </div>
    <!--end container-fluid-->
@endsection