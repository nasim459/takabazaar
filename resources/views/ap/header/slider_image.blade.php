@section('maincontent')
    @include('ap.header.include_header_menu')
    <!--start container-fluid-->
    <div class="container-fluid content-change-fixed" ng-controller="homeController">

        <div class="panel panel-default m-b-0">
            <div class="table-h-t">
                <div class="col-md-3 m-t-5">
                    <div class="form-group">
                        <input type="text" value="Slider Image" readonly class="form-control" placeholder="Search here...">
                    </div>
                </div>
                <div class="col-md-3 m-t-10 text-success"></div>
                <div class="col-md-4">
                    <i class="fa text-success">{{ Session::get('msg_suc') }} {{ Session::put('msg_suc', '') }}</i>
                    <i class="fa text-danger">{{ Session::get('msg_error') }} {{ Session::put('msg_error', '') }}</i>
                    <i class="fa text-danger">{{ Session::get('msg_delete') }} {{ Session::put('msg_delete', '') }}</i>
                </div>
                <div class="col-md-2 text-right m-t-10">
                    <a href="#" class="btn btn-default btn-xs text-success width-100" title="Add Headaer Image"><i class="fa fa-hand-o-right"> Use {{ Session::get('count') }} Slider</i></a>
                </div>
            </div>

            <table class="table table-fixed">
                <thead>
                <tr class="success">
                    <th class="col-sm-1">No</th>
                    <th class="col-sm-1">Image</th>
                    <th class="col-sm-6">Slider Message</th>
                    <th class="col-sm-2">Status</th>
                    <th class="col-sm-2">Action</th>
                </tr>
                </thead>
                <tbody>

                @php $number = 0; $off = 0; $on = 1; $table = '5555'; @endphp
                @foreach($header_image as $v)
                <tr>
                    <td class="col-xs-12 col-sm-1 text-success">
                        <a class="btn btn-default btn-xs"><i class="fa">{{$number = $number+1}}</i></a>
                    </td>
                    <td class="col-xs-12 col-sm-1">
                        <a class="btn btn-default btn-xs" data-toggle="modal" data-target="#{{$v->id}}kkk" title="Click To Edit">
                            <img src="{{ asset('ap/images/slider_image/'.$v->slider_image_url) }}" height="16px" width="30px">
                        </a>
                    </td>
                    <td class="col-xs-12 col-sm-6">
                        {{--<a data-toggle="modal" data-target="#{{$v->id}}kkd" class="btn btn-default btn-xs" title="Click To Edit"><i class="fa fa-pencil"></i></a>--}}
                        {{str_limit($v->slider_message, 70, ' ...')}}
                    </td>
                    <td class="col-xs-12 col-sm-2">
                        &nbsp; &nbsp;  &nbsp;
                        @if($v->status==1)
                            <a href="{{URL::to('publication/'.$v->id.'/'.$off.'/'.$table)}}" class="btn btn-default btn-xs" title="Publish"><i class="text-success-light fa fa-check"></i></a>
                        @else
                            <a href="{{URL::to('publication/'.$v->id.'/'.$on.'/'.$table)}}" class="btn btn-default btn-xs" title="unPublish">&nbsp;<i class="text-danger-light fa fa-lock"> </i></a>
                        @endif
                    </td>
                    <td class="col-xs-12 col-sm-2">
                        <a class="btn btn-default btn-xs text-success" data-toggle="modal" data-target="#{{$v->id}}k" title="Click To Edit"><i class="fa fa-edit"> Edit&nbsp;</i></a>
                    </td>
                </tr>


                <!--start updte_header_image-->
                <div id="{{$v->id}}kkk" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!--start Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title text-success text-center">
                                    Update Slider Image
                                </h4>
                            </div>
                            <div class="modal-body" style="overflow: hidden">
                                <div class="col-md-12">
                                    <div class="col-md-12 f-s-14 f-f-s">

                                        {!! Form::open(array('url'=>'image-update', 'role'=>'form', 'method'=>'POST', 'files'=>'true')) !!}
                                        <div class="form-horizontal">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="id" value="{{ $v->id }}">
                                            <input type="hidden" name="t_id" value="5555">

                                            <div class="form-group">
                                                <div class="col-sm-12" style="background: url({{ asset('ap/images/slider_image/'.$v->slider_image_url) }}) no-repeat center; height: 90px;">
                                                    <i class="fa">Slider Image</i>
                                                </div>
                                                <i class="fa text-danger-light m-t-10"><b>NB:</b> Your image size must be <b>width=1360 pixels & height=156</b> pixels</i>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputName2" class="col-sm-4 control-label m-t-mi-5">Change Picture:</label>
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
                <!--end add_header_image -->

                <!--start updte_information-->
                <div id="{{$v->id}}k" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!--start Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title text-success text-center">
                                    Update Slider Message
                                </h4>
                            </div>
                            <div class="modal-body" style="overflow: hidden">
                                <div class="col-md-12">
                                    <div class="col-md-12 f-s-14 f-f-s">

                                        {!! Form::open(array('url'=>'form-slider-save', 'role'=>'form', 'method'=>'POST', 'files'=>'true')) !!}
                                        <div class="form-horizontal">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="id" value="{{ $v->id }}">
                                            <input type="hidden" name="data_ud" value="slider_data_update">

                                            <div class="form-group">
                                                <div class="col-sm-12" style="background: url({{ asset('ap/images/slider_image/'.$v->slider_image_url) }}) no-repeat center; height: 90px;">
                                                    <i class="fa">Slider Image</i>
                                                </div>
                                                <i class="fa text-danger-light m-t-10"><b>NB:</b> Your image size must be <b>width=1360 pixels & height=156</b> pixels</i>
                                            </div>
                                            <hr>

                                            <div class="form-group">
                                                <label for="exampleInputName2" class="col-sm-4 control-label">Slider Message :</label>
                                                <div class="col-sm-8">
                                                    <textarea name="message" cols="10" rows="10" class="form-control">{{$v->slider_message}}</textarea>
                                                    <i class="fa text-danger-light m-t-10"><b>NB:</b> Write your message within  <b>80</b> characters</i>
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
                <!--end updte_information -->

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