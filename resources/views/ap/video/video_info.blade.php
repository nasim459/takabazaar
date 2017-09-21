@section('maincontent')
    @include('ap.video.include_video_menu')
    <!--start container-fluid-->
    <div class="container-fluid content-change-fixed" ng-controller="LoanController">

        <div class="panel panel-default m-b-0">
            <div class="table-h-t">
                <div class="col-md-3 m-t-5">
                    <div class="form-group">
                        <input type="text" value="Video Information" readonly class="form-control" placeholder="Search here...">
                    </div>
                </div>
                <div class="col-md-3 m-t-10 text-success"></div>
                <div class="col-md-4">
                    <i class="fa text-success">{{ Session::get('msg_suc') }} {{ Session::put('msg_suc', '') }}</i>
                    <i class="fa text-danger">{{ Session::get('msg_error') }} {{ Session::put('msg_error', '') }}</i>
                </div>
                <div class="col-md-2 text-right m-t-10">
                    <a data-toggle="modal" data-target="#addVideo" class="btn btn-default btn-xs text-success width-100" title="Add youtube video"><i class="fa fa-plus"> Video</i></a>
                </div>
            </div>

            <table class="table table-fixed">
                <thead>
                <tr class="success">
                    <th class="col-sm-1">No</th>
                    <th class="col-sm-2">Video Name</th>
                    <th class="col-sm-4">Embed Code</th>
                    <th class="col-sm-2">Page Location</th>
                    <th class="col-sm-1">Link</th>
                    <th class="col-sm-2">Action</th>
                </tr>
                </thead>
                <tbody>

                @php $number = 0; $off = 0; $on = 1; $table = '333'; @endphp
                @foreach($video_view as $v)
                <tr>
                    <td class="col-xs-12 col-sm-1 text-success">
                        <a class="btn btn-default btn-xs"><i class="fa">{{$number = $number+1}}</i></a>
                    </td>
                    <td class="col-xs-12 col-sm-2 text-success" title="{{ $v->v_name }}">
                        {{str_limit($v->v_name, 20, '...')}}
                    </td>
                    <td class="col-xs-12 col-sm-4">
                        <a data-toggle="modal" data-target="#{{$v->id}}" class="btn btn-default btn-xs" title="View Details">{{str_limit($v->v_embed_code, 50, '...')}}</a>
                    </td>
                    <td class="col-xs-12 col-sm-2">
                        @if($v->v_p_location==1)
                        <span class="text-success">Home Page</span>
                        @elseif($v->v_p_location==2)
                        <span class="text-success">loan Page</span>
                        @elseif($v->v_p_location==3)
                        <span class="text-success">Investment Page</span>
                        @elseif($v->v_p_location==4)
                        <span class="text-success">Insurance Page</span>
                        @else
                        <span class="text-success">Card Page</span>
                        @endif
                    </td>
                    <td class="col-xs-12 col-sm-1">
                        &nbsp; &nbsp;&nbsp;
                        <a href="{{$v->v_youtube_link}}" target="_blank" title="Click to go youtube website"><i class="text-success-light fa fa-arrow-right"></i></a>
                    </td>
                    <td class="col-xs-12 col-sm-2">
                        <span class="">
                            @if($v->v_status == 1)
                                <a href="{{URL::to('publication/'.$v->id.'/'.$off.'/'.$table)}}" class="btn btn-default btn-xs" title="Publish"><i class="text-success-light fa fa-check"></i></a>
                            @else
                                <a href="{{URL::to('publication/'.$v->id.'/'.$on.'/'.$table)}}" class="btn btn-default btn-xs" title="unPublish">&nbsp;<i class="text-danger-light fa fa-lock"> </i></a>
                            @endif

                            &nbsp; &nbsp; &nbsp;
                            <a class="btn btn-default btn-xs" data-toggle="modal" data-target="#{{$v->id}}" title="Click To View Details"><i class="fa fa-list"></i></a>
                            <a class="btn btn-default btn-xs" data-toggle="modal" data-target="#{{$v->id}}kk" title="Click To Edit"><i class="fa fa-edit"></i></a>
                        </span>
                    </td>
                </tr>

                <!--start video_information-->
                <div id="{{$v->id}}" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!--start Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title text-success text-center">&nbsp;
                                    Video Details Information
                                </h4>
                            </div>
                            <div class="modal-body" style="overflow: hidden">
                                <div class="col-md-12">
                                    <div class="col-md-8 col-md-offset-1 f-s-14 f-f-s">
                                        <dl class="dl-horizontal text-center">
                                            <i href="" style="width: 560px; height: 315px;">
                                                {!! $v->v_embed_code !!}
                                            </i>
                                        </dl>
                                        <hr>

                                        <dl class="dl-horizontal">
                                            <dt>Video Type :</dt>
                                            <dd>
                                                @if($v->v_p_location==1)
                                                    <span class="text-success">Home Loan</span>
                                                @elseif($v->v_p_location==2)
                                                    <span class="text-success">Car Loan</span>
                                                @else
                                                    <span class="text-success">SME</span>
                                                @endif
                                            </dd>
                                            <dt>Status :</dt>
                                            <dd>
                                                @if($v->v_status==1)
                                                    <span class="text-success">Publish</span>
                                                @else
                                                    <span class="text-success">unPublish</span>
                                                @endif
                                            </dd>
                                            <dt>Video Name :</dt>
                                            <dd>{{$v->v_name}}</dd>
                                            <dt>Youtube Link :</dt>
                                            <dd><a href="{{$v->v_youtube_link}}" target="_blank">{{$v->v_youtube_link}}</a></dd>
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
                <!--end  video_information-->

                <!--start add_video-->
                <div id="addVideo" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!--start Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title text-success text-center">&nbsp;
                                    Assign your youtube video
                                </h4>
                            </div>
                            <div class="modal-body" style="overflow: hidden">
                                <div class="col-md-12">
                                    <div class="col-md-12 f-s-14 f-f-s">

                                        {!! Form::open(array('url'=>'form-video-save', 'role'=>'form', 'method'=>'POST', 'files'=>'true')) !!}
                                        <div class="form-horizontal">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                            <div class="form-group">
                                                <label for="exampleInputName2" class="col-sm-4 control-label">Video Name:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="name" class="form-control" id="exampleInputName2" placeholder="Write video name..." required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName2" class="col-sm-4 control-label">YouTube Link :</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="link" class="form-control" id="exampleInputName2" placeholder="https://www.youtube.com" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName2" class="col-sm-4 control-label">Page Location:</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="location" required>
                                                        <option value="">Select Page Location</option>
                                                        <option value="1">Home Page</option>
                                                        <option value="2">loan Page</option>
                                                        <option value="3">Investment Page</option>
                                                        <option value="4">Insurance Page</option>
                                                        <option value="5">Card Page</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName2" class="col-sm-4 control-label">Embed Code:</label>
                                                <div class="col-sm-8">
                                                    <textarea name="code" cols="4" rows="5" class="form-control" placeholder="Write embaded code of youtube..." required></textarea>
                                                    <span>NB: Removed red mark <strong class="text-danger-light">width="560" height="315"</strong> form embaded code</span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-4 col-sm-10">
                                                    <input type="submit" value="Save" class="btn btn-success col-sm-4">
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
                <!--end  add_video-->

                <!--start update_video-->
                <div id="{{$v->id}}kk" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!--start Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title text-success text-center">&nbsp;
                                    Edit youtube video
                                </h4>
                            </div>
                            <div class="modal-body" style="overflow: hidden">
                                <div class="col-md-12">
                                    <div class="col-md-12 f-s-14 f-f-s">

                                        {!! Form::open(array('url'=>'form-video-save', 'role'=>'form', 'method'=>'POST', 'files'=>'true')) !!}
                                        <div class="form-horizontal">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="id" value="{{$v->id}}">
                                            <input type="hidden" name="data_ud" value="data_ud">

                                            <div class="form-group">
                                                <label for="exampleInputName2" class="col-sm-4 control-label">Video Name:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="name" value="{{$v->v_name}}" class="form-control" id="exampleInputName2" placeholder="Write video name..." required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName2" class="col-sm-4 control-label">YouTube Link :</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="link" value="{{$v->v_youtube_link}}" class="form-control" id="exampleInputName2" placeholder="https://www.youtube.com" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName2" class="col-sm-4 control-label">Page Location:</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="location" required>
                                                        @if( $v->v_p_location == 1)
                                                            <option value="1">Home Page</option>
                                                        @elseif( $v->v_p_location == 2)
                                                            <option value="2">loan Page</option>
                                                        @elseif( $v->v_p_location == 3)
                                                            <option value="3">Investment Page</option>
                                                        @elseif( $v->v_p_location == 4)
                                                            <option value="4">Insurance Page</option>
                                                        @else
                                                            <option value="5">Card Page</option>
                                                        @endif

                                                        <option value="1">Home Page</option>
                                                        <option value="2">loan Page</option>
                                                        <option value="3">Investment Page</option>
                                                        <option value="4">Insurance Page</option>
                                                        <option value="5">Card Page</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName2" class="col-sm-4 control-label">Embed Code:</label>
                                                <div class="col-sm-8">
                                                    <textarea name="code" cols="4" rows="5" class="form-control" placeholder="Write embaded code of youtube..." required>{{$v->v_embed_code}}</textarea>
                                                    <span><strong>NB:</strong> Removed red mark <strong class="text-danger-light">width="560" height="315"</strong> form above embaded code</span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-4 col-sm-10">
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
                <!--end  update_video-->

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