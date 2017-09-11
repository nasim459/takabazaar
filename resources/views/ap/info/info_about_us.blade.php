@section('maincontent')
    @include('ap.info.include_info_menu')
    <!--start container-fluid-->
    <div class="container-fluid content-change-fixed" ng-controller="homeController">

        <div class="panel panel-default m-b-0">
            <div class="table-h-t">
                <div class="col-md-3 m-t-5">
                    <div class="form-group">
                        <input type="text" value="Blog User" readonly class="form-control" placeholder="Search here...">
                    </div>
                </div>
                <div class="col-md-3 m-t-10 text-success">
                    {{--<b>Blog Category</b>--}}
                </div>
                <div class="col-md-3 m-t-10">
                    <i class="fa text-danger-light">{{ Session::get('msg_error') }}{{ Session::put('msg_error', '') }}</i>
                    <i class="fa text-success-light">{{ Session::get('msg') }}{{ Session::put('msg', '') }}</i>
                </div>
                <div class="col-md-3 text-right m-t-10">
                    <a data-toggle="modal" data-target="#aboutTeam" class="btn btn-default btn-xs text-success width-100" title="Create A Member"><i class="fa fa-plus"> Add Member</i></a>
                </div>
            </div>

            <table class="table table-fixed">
                <thead>
                <tr class="success">
                    <th class="col-sm-1">No</th>
                    <th class="col-sm-2">Picture</th>
                    <th class="col-sm-3">Member Name</th>
                    <th class="col-sm-3">Designation</th>
                    <th class="col-sm-2">Created</th>
                    <th class="col-sm-1">Status</th>
                </tr>
                </thead>
                <tbody>

                @php $number = 0; $off = 0; $on = 1; $table = 111; @endphp
                @foreach($info_view as $v)
                    <tr>
                        <td class="col-xs-12 col-sm-1 text-success">
                            <a class="btn btn-default btn-xs"><i class="fa">{{$number = $number+1}}</i></a>
                        </td>
                        <td class="col-xs-12 col-sm-2">
                            <a class="btn btn-default btn-xs" data-toggle="modal" data-target="#{{$v->id}}kkk">
                                <img src="{{ asset($v->about_image) }}" height="16px" width="30px">
                            </a>
                        </td>
                        <td class="col-xs-12 col-sm-3" title="{{$v->about_name}}">
                            {{str_limit($v->about_name, 34, '...')}}
                        </td>
                        <td class="col-xs-12 col-sm-3">
                            {{str_limit($v->about_designation, 34, '...')}}
                        </td>
                        <td class="col-xs-12 col-sm-2">
                            {{$v->created_at}}
                        </td>
                        <td class="col-xs-12 col-sm-1">
                            @if($v->status == 1)
                                <a href="{{URL::to('publication/'.$v->id.'/'.$off.'/'.$table)}}" class="btn btn-default btn-xs text-success" title="Publish"><i class="fa fa-check"></i></a>
                            @else
                                <a href="{{URL::to('publication/'.$v->id.'/'.$on.'/'.$table)}}" class="btn btn-default btn-xs text-danger" title="Block"><i class="fa fa-remove">&nbsp;</i></a>
                            @endif
                                <a data-toggle="modal" data-target="#{{$v->id}}kk" class="btn btn-default btn-xs text-success"><i class="fa fa-edit"></i></a>
                        </td>
                    </tr>



                    <!--start about_add_team_member -->
                    <div id="aboutTeam" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!--start Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title text-success text-center">Assign Your Team Member</h4>
                                </div>
                                <div class="modal-body" style="overflow: hidden">
                                    <div class="col-md-12">
                                        <div class="col-md-12 f-s-14 f-f-s">

                                            {!! Form::open(array('url'=>'form-info', 'role'=>'form', 'method'=>'POST', 'files'=>'true')) !!}
                                            <div class="form-horizontal m-t-10">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                {{--<input type="hidden" name="insert_save" value="insert_save">--}}

                                                <div class="form-group">
                                                    <label class="col-sm-4" style="text-align: right;" for="usr">Full Name:</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="name" class="form-control" id="usr" placeholder="Write full name..." required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-4" style="text-align: right;" for="usr">Designation :</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="designation" class="form-control" id="usr" placeholder="Write category name..." required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-4" style="text-align: right;" for="usr">Facebook Link :</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="fb_link" class="form-control" id="usr" placeholder="Facebook  profile link..." required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-4" style="text-align: right;" for="usr">Google Link :</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="google_link" class="form-control" id="usr" placeholder="Google profile link..." required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-4" style="text-align: right;" for="usr">Twitter Link :</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="twitter_link" class="form-control" id="usr" placeholder="Twitter profile link..." required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-4" style="text-align: right;" for="usr">Picture :</label>
                                                    <div class="col-sm-6">
                                                        <input type="file" class="m-t-5" name="image">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-4" for="usr"></label>
                                                    <div class="col-sm-6 m-t-15">
                                                        <button type="submit" class="btn btn-success col-sm-12">Save</button>
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
                    <!--end about_add_team_member -->

                    <!--start user_image_update-->
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
                                                        <img src="{{ asset($v->about_image) }}" class="img-thumbnail" height="70px" width="110px" alt="pic">
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
                    <!--end user_image_update -->

                    <!--start about_team_member -->
                    <div id="{{$v->id}}kk" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!--start Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title text-success text-center">Update Your Team Member</h4>
                                </div>
                                <div class="modal-body" style="overflow: hidden">
                                    <div class="col-md-12">
                                        <div class="col-md-12 f-s-14 f-f-s">

                                            {!! Form::open(array('url'=>'form-info', 'role'=>'form', 'method'=>'POST', 'files'=>'true')) !!}
                                            <div class="form-horizontal m-t-10">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="hidden" name="insert_update" value="insert_update">
                                                <input type="hidden" name="id" value="{{ $v->id }}">

                                                <div class="form-group">
                                                    <label class="col-sm-4" style="text-align: right;" for="usr">Full Name:</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="name" value="{{ $v->about_name }}" class="form-control" id="usr" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-4" style="text-align: right;" for="usr">Designation :</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="designation" value="{{ $v->about_designation }}" class="form-control" id="usr" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-4" style="text-align: right;" for="usr">Facebook Link :</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="fb_link" value="{{ $v->about_fb }}" class="form-control" id="usr" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-4" style="text-align: right;" for="usr">Google Link :</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="google_link" value="{{ $v->about_google }}" class="form-control" id="usr" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-4" style="text-align: right;" for="usr">Twitter Link :</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="twitter_link" value="{{ $v->about_twitter }}" class="form-control" id="usr" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-4" style="text-align: right;" for="usr">Picture :</label>
                                                    <div class="col-sm-6">
                                                        <input type="file" class="m-t-5" name="image">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-4" for="usr"></label>
                                                    <div class="col-sm-6 m-t-15">
                                                        <button type="submit" class="btn btn-success col-sm-12">Save</button>
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
                    <!--end about_team_member -->
                @endforeach

                </tbody>
            </table>

        </div>

        <div class="table-h-t m-b-20">
            <div class="col-md-3 m-t-0">
                <span class="text-success f-s-12">Showing {{Session::get('count')}} entries</span>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-1 col-md-offset-2"></div>
        </div>


    </div>
    <!--end container-fluid-->
@endsection