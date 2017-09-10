@section('maincontent')
    @include('ap.blog.include_blog_menu')
    <!--start container-fluid-->
    <div class="container-fluid content-change-fixed" ng-controller="homeController">

        <div class="panel panel-default m-b-0">
            <div class="table-h-t">
                <div class="col-md-3 m-t-5">
                    <div class="form-group">
                        <input type="text" value="Blog Posting Information" readonly class="form-control" placeholder="Search here...">
                    </div>
                </div>
                <div class="col-md-3 m-t-10 text-success">
                    {{--<b>Blog Posting Information</b>--}}
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-4 text-right m-t-10">
                    <a href="{{ url('blog') }}" target="_blank" class="btn btn-default btn-xs text-success width-100" title=""><i class="fa fa-arrow-up"> View Blog</i></a>
                </div>
            </div>

            <table class="table table-fixed">
                <thead>
                <tr class="success">
                    <th class="col-sm-1">No</th>
                    <th class="col-sm-3">Blog Title</th>
                    <th class="col-sm-2">Blog Description</th>
                    <th class="col-sm-2">Posted At</th>
                    <th class="col-sm-2">Blog Control</th>
                    <th class="col-sm-2">Action</th>
                </tr>
                </thead>
                <tbody>

                @php $number = 0; $off = 0; $on = 1; $table = '444_4'; @endphp
                @foreach($data_view as $v)
                    <tr>
                        <td class="col-xs-12 col-sm-1 text-success" title="{{ $v->category['category_name'] }} Category">
                            <a class="btn btn-default btn-xs"><i class="fa">{{$number = $number+1}}</i></a>
                        </td>

                        <td class="col-xs-12 col-sm-3" title="[ {{ $v->category['category_name'] }} ] {{ $v->blog_title }}">
                            {{str_limit($v->blog_title, 30, ' ...')}}
                        </td>

                        <td class="col-xs-12 col-sm-2">
                            <a class="btn btn-default btn-xs" data-toggle="modal" data-target="#{{$v->id}}k" title="Click To Details"><i class="fa"> Blog Details Info</i></a>
                        </td>

                        <td class="col-xs-12 col-sm-2">{{$v->updated_at}}</td>

                        <td class="col-xs-12 col-sm-2">
                            @if($v->blog_control == 1)
                                <a href="{{URL::to('publication/'.$v->id.'/'.$off.'/'.$table)}}" class="btn btn-default text-success btn-xs" title="Publish"><i class="fa fa-check"> Running</i></a>
                            @else
                                <a href="{{URL::to('publication/'.$v->id.'/'.$on.'/'.$table)}}" class="btn btn-warning btn-xs" title="Pending"><i class="fa fa-lock"> Pending</i></a>
                            @endif
                        </td>

                        <td class="col-xs-12 col-sm-2">
                            @if($v->blog_status == 1)
                                <a class="btn btn-default text-success btn-xs" title="Publish"><i class="fa fa-check"></i></a>
                            @else
                                <a class="btn btn-danger btn-xs" title="This Article is unPublish by User"><i class="fa fa-lock"> &nbsp;</i></a>
                            @endif
                                <a class="btn btn-default btn-xs text-success" data-toggle="modal" data-target="#{{$v->id}}kk" title="Click To Edit"><i class="fa fa-edit"> Edit&nbsp;</i></a>
                        </td>
                    </tr>


                    <!--start blog_description -->
                    <div id="{{$v->id}}k" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!--start Modal content-->
                            <div class="modal-content m-t-80">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title text-success text-center">
                                        Blog Description
                                    </h4>
                                </div>
                                <div class="modal-body" style="overflow: hidden">
                                    <div class="col-md-12">
                                        <div class="col-md-12 f-s-14 f-f-s" style="overflow: hidden;">

                                            <div class="form-horizontal">
                                                <div class="form-group">
                                                    <div class="col-sm-12 m-t-10 m-b-10">
                                                        <b class="text-center">{!! $v->blog_title !!}</b>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <img src="{{ asset($v->blog_image) }}" class="img-thumbnail" alt="Cinque Terre" height="150">
                                                    </div>

                                                    <div class="col-sm-12 m-t-10">
                                                        <i class="fa text-success">Short Description :</i><br>
                                                        {!! $v->blog_short_desc !!}
                                                    </div>

                                                    <div class="col-sm-12 m-t-10">
                                                        <i class="fa text-success">Long Description :</i><br>
                                                        {!! $v->blog_long_desc !!}
                                                    </div>
                                                </div>
                                            </div>

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
                    <!--end blog_description -->

                    <!--start insert_update -->
                    <div id="{{$v->id}}kk" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!--start Modal content-->
                            <div class="modal-content m-t-80">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title text-success text-center">
                                        Update Your Blog
                                    </h4>
                                </div>
                                <div class="modal-body" style="overflow: hidden">
                                    <div class="col-md-12">
                                        <div class="col-md-12 f-s-14 f-f-s" style="overflow: hidden;">

                                            {!! Form::open(array('url'=>'blog-user-post-insert', 'role'=>'form', 'method'=>'POST', 'files'=>'true')) !!}
                                            <div class="form-horizontal">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                                <input type="hidden" name="blog_id" value="{{$v->id}}">
                                                <input type="hidden" name="insert_update" value="insert_update">

                                                <div class="form-group">
                                                    <label for="exampleInputName2" class="col-sm-4 control-label">Blog Title:</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="b_title" value="{{$v->blog_title}}" class="form-control" id="exampleInputName2" required>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <input type="file" class="m-t-5" name="image">
                                                    </div>
                                                </div>
                                                <hr>

                                                <div class="form-group">
                                                    <div class="col-sm-10 col-sm-offset-1">
                                                        <span class="text-success"><b>Short Description</b></span>
                                                        <textarea name="s_desc" class="ckeditor" cols="30" rows="10">{{$v->blog_short_desc}}</textarea>
                                                    </div>
                                                    <div class="col-sm-10 col-sm-offset-1 m-t-15">
                                                        <span class="text-success"><b>Loan Description</b></span>
                                                        <textarea name="l_desc" class="ckeditor" cols="30" rows="10">{{$v->blog_long_desc}}</textarea>
                                                    </div>
                                                </div>

                                                {{--<div class="form-group">--}}
                                                {{--<label for="exampleInputName2" class="col-sm-4 control-label">Category :</label>--}}
                                                {{--<div class="col-sm-6">--}}
                                                {{--<select class="form-control" name="category_id" required>--}}
                                                {{--<option value="">Change Categoy</option>--}}

                                                {{--@foreach($blog_category as $v)--}}
                                                {{--<option value="{{$v->id}}">{{$v->category_name}}</option>--}}
                                                {{--@endforeach--}}
                                                {{--</select>--}}
                                                {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<hr>--}}


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
                    <!--end insert_update -->
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