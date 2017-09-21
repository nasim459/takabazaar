@section('fe_maincontent')
    <div class="j-menu-container"></div>

    <div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">
        <div class="b-inner-page-header__content">
            <div class="container">
                <div class="pull-left">
                    <h1 class="f-primary-l c-default"><i class="fa fa-home"> Blog Information</i></h1>
                    <div class="f-primary-l f-inner-page-header_title-add c-senary"><i class="fa">What's on your mind & Read your blog here </i></div>
                </div>

                @if(Session::get('fe_error_msg') != NULL)
                    <div class="col-xs-12 col-md-6 m-l-5 alert alert-danger" style="font-size: 20px;">
                        <a href="#" class="pull-right" data-dismiss="alert">&times;</a>
                        {{Session::get('fe_error_msg')}} {{Session::put('fe_error_msg', '')}}
                    </div>
                @endif

                @if(Session::get('fe_msg') != NULL)
                    <div class="col-xs-12 col-md-6 m-l-5 alert alert-success" style="font-size: 20px;">
                        <a href="#" class="pull-right" data-dismiss="alert">&times;</a>
                        {{Session::get('fe_msg')}} {{Session::put('fe_msg', '')}}
                    </div>
                @endif

                <div class="pull-right">
                    <div class="t-a-c">
                        <i class="fa f-s-25 m-b-10">Hotline</i><br>
                        <i class="fa f-s-16 c-red m-b-5">01 777 888 757</i><br>
                        <i class="fa f-s-14">info@finFObd.com</i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="l-main-container">

        <div class="b-breadcrumbs f-breadcrumbs">
            <div class="container">
                <ul>
                    <li><a href=""><i class="fa fa-home"></i>Home</a></li>
                    <li><i class="fa fa-angle-right"></i><span>User Panel</span></li>
                    {{--<li><i class="fa fa-angle-right"></i><span>Three Columns Right Sidebar v2</span></li>--}}
                </ul>
            </div>
        </div>

        <div class="l-inner-page-container">
            <div class="container">
                <div class="b-shortcode-example">
                    <div class="b-tabs-vertical f-tabs-vertical j-tabs-vertical b-tabs-reset row b-tabs-vertical--secondary">
                        <div class="col-md-3 col-sm-4 b-tabs-vertical__nav">
                            <ul>
                                <li><a class="f-primary-l" href="#tabs-11"><i class="fa fa-suitcase"></i> My Profile</a></li>
                                <li><a class="f-primary-l" href="#tabs-12"><i class="fa fa-pencil-square-o"></i> Write Blog</a></li>
                                <li><a class="f-primary-l" href="#tabs-13"><i class="fa fa-eye"></i> View Blog</a></li>
                                <li><a class="f-primary-l" href="#tabs-14"><i class="fa fa-list"></i> Total Blog</a></li>
                            </ul>
                        </div>
                        <div class="col-md-9 col-sm-8 b-tabs-vertical__content">
                            <div id="tabs-11">
                                <div class="b-tabs-vertical__content-text">
                                    <h3 class="f-tabs-vertical__title f-primary-b"><i class="fa">Personal Information</i></h3>
                                    <div class="col-md-8 well">
                                        <dl class="dl-horizontal">
                                            <dt>Name :</dt>
                                            <dd>Nasim Ralit Soft</dd>
                                            <dt>Email Address :</dt>
                                            <dd>ralitsoft@gmail.com</dd>
                                        </dl>
                                        <br>
                                        <a data-toggle="modal" data-target="#infoUpdate" class="btn btn-default btn-sm m-t-5 pull-right"><i class="fa fa-edit"> Edit</i></a>
                                    </div>
                                    <div class="col-md-3">
                                        {{--<img src="{{ url('fe/img/blog_users/nasim.jpg') }}" class="img-thumbnail" alt="Cinque Terre" height="150">--}}
                                        <img src="{{ url('fe/img/blog_users/img_blank.jpg') }}" class="img-thumbnail" alt="Cinque Terre" height="150">
                                        <br>
                                        <a data-toggle="modal" data-target="#personPic" class="btn btn-default btn-sm m-t-5"><i class="fa fa-edit"> Picture Edit</i></a>
                                    </div>

                                    <!--start information_update -->
                                    <div id="infoUpdate" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!--start Modal content-->
                                            <div class="modal-content m-t-80">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title text-success text-center">
                                                        Update Information
                                                    </h4>
                                                </div>
                                                <div class="modal-body" style="overflow: hidden">
                                                    <div class="col-md-12">
                                                        <div class="col-md-12 f-s-14 f-f-s" style="overflow: hidden;">

                                                            {!! Form::open(array('url'=>'blog-user-insert', 'role'=>'form', 'method'=>'POST')) !!}
                                                            <div class="form-horizontal m-t-10">
                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                <input type="hidden" name="insert_save" value="insert_save">

                                                                <div class="form-group">
                                                                    <label class="col-sm-4 m-t-8 text-right" for="username">Full Name :</label>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" name="name" class="form-control" id="username">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-sm-4 m-t-8 text-right" for="email">Email Address :</label>
                                                                    <div class="col-sm-6">
                                                                        <input type="email" name="email" class="form-control" id="email">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="col-sm-4" for="email"></label>
                                                                    <div class="col-sm-6 m-t-15">
                                                                        <button type="submit" class="btn btn-success col-sm-12">Update</button>
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
                                    <!--end information_update -->

                                    <!--start person_picture_update-->
                                    <div id="personPic" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!--start Modal content-->
                                            <div class="modal-content m-t-80">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title text-success text-center">
                                                        Update Picture
                                                    </h4>
                                                </div>
                                                <div class="modal-body" style="overflow: hidden">
                                                    <div class="col-md-12">
                                                        <div class="col-md-12 f-s-14 f-f-s">

                                                            {!! Form::open(array('url'=>'image-update', 'role'=>'form', 'method'=>'POST', 'files'=>'true')) !!}
                                                            <div class="form-horizontal">
                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                <input type="hidden" name="id" value="2">
                                                                <input type="hidden" name="user_id" value="2">
                                                                <input type="hidden" name="t_id" value="444">

                                                                <div class="form-group">
                                                                    <label for="exampleInputName2" class="col-sm-4 control-label">Change Picture:</label>
                                                                    <div class="col-sm-6 m-t-5">
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
                                    <!--end person_picture_update -->
                                </div>
                            </div>

                            <div id="tabs-12">
                                <div class="b-tabs-vertical__content-text">
                                    <h3 class="f-tabs-vertical__title f-primary-b"><i class="fa">Write your blog here</i></h3>
                                    <div class="col-md-12 f-s-14 f-f-s" style="overflow: hidden;">

                                        {!! Form::open(array('url'=>'blog-user-post-insert', 'role'=>'form', 'method'=>'POST', 'files'=>'true')) !!}
                                        <div class="form-horizontal">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                            <input type="hidden" name="l_id">

                                            <div class="form-group">
                                                <label for="exampleInputName2" class="col-sm-4 control-label">Category Select:</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="category_id" required>
                                                        <option value="">Choose Categoy</option>

                                                        @foreach($blog_category as $v)
                                                            <option value="{{$v->id}}">{{$v->category_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputName2" class="col-sm-4 control-label">Blog Title:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="b_title" class="form-control" id="exampleInputName2" placeholder="Write title..." required>
                                                </div>

                                                <div class="col-sm-4">
                                                    <input type="file" class="m-t-5" name="image">
                                                </div>
                                            </div>
                                            <hr>

                                            {{--<div class="form-horizontal">--}}
                                            <div class="form-group">
                                                <div class="col-sm-10 col-sm-offset-1">
                                                    <span class="text-success"><b>Short Description</b></span>
                                                    <textarea name="s_desc" class="ckeditor" cols="30" rows="10"></textarea>
                                                </div>
                                                <div class="col-sm-10 col-sm-offset-1 m-t-15">
                                                    <span class="text-success"><b>Loan Description</b></span>
                                                    <textarea name="l_desc" class="ckeditor" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <div class="col-sm-offset-4 col-sm-10 m-t-15">
                                                    <input type="submit" value="Post" class="btn btn-success col-sm-4">
                                                </div>
                                            </div>
                                        </div>
                                        {!! Form::close() !!}
                                    </div>

                                    <i class="fa m-b-5"></i>


                                </div>
                            </div>

                            <div id="tabs-13">
                                <div class="b-tabs-vertical__content-text">
                                    <h3 class="f-tabs-vertical__title f-primary-b"><i class="fa">View Blog At A Glance</i></h3>
                                    <div class="row">

                                        <div class="col-md-12">
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @php $number = 0; $off = 0; $on = 1; $table = 444; @endphp
                                                @foreach($data_view as $v)
                                                <tr>
                                                    <th scope="row">
                                                        <a class="btn btn-default btn-xs"><i class="fa">{{$number = $number+1}}</i></a>
                                                        <i class="fa c-pointer" data-toggle="modal" data-target="#{{$v->id}}k" title="{{ $v->category['category_name'] }} Category"><b>{{ $v->category['category_name'] }}</b></i><br>
                                                        <i class="fa m-l-20">{{ str_limit($v->blog_title, 40, '...') }} </i>
                                                    </th>
                                                    <td>
                                                        <i class="fa">{!! str_limit($v->blog_short_desc, 45, '...') !!}</i>
                                                        <a class="btn btn-default btn-xs" data-toggle="modal" data-target="#{{$v->id}}kkk" title="Click To Edit">
                                                            <img src="{{ asset('fe/img/blog_pic/'.$v->blog_image) }}" height="16px" width="30px" alt="pic">
                                                        </a>
                                                        <a class="c-pointer" data-toggle="modal" data-target="#{{$v->id}}k" title="Click To Details"><i class="fa"> details</i></a>
                                                    </td>
                                                    <td>
                                                        @if($v->blog_control == 1)
                                                            @if($v->blog_status == 1)
                                                                <a href="{{URL::to('publication/'.$v->id.'/'.$off.'/'.$table)}}" class="btn btn-default text-success btn-xs" title="Publish"><i class="fa fa-check"></i></a>
                                                            @else
                                                                <a href="{{URL::to('publication/'.$v->id.'/'.$on.'/'.$table)}}" class="btn btn-danger text-success btn-xs" title="unPublish"><i class="fa fa-lock"> &nbsp;</i></a>
                                                            @endif

                                                            <a class="btn btn-default btn-xs text-success" data-toggle="modal" data-target="#{{$v->id}}kk" title="Click To Edit"><i class="fa fa-edit">&nbsp;</i></a>

                                                        @else
                                                            <a class="btn btn-warning btn-xs" title="Wait For Admin Permission"><i class="fa fa-lock"> Pending</i></a>
                                                        @endif
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
                                                                                    <img src="{{ asset('fe/img/blog_pic/'.$v->blog_image) }}" class="img-thumbnail" alt="Cinque Terre" height="150">
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

                                                <!--start image_update-->
                                                <div id="{{$v->id}}kkk" class="modal fade" role="dialog">
                                                    <div class="modal-dialog">

                                                        <!--start Modal content-->
                                                        <div class="modal-content m-t-80">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <h4 class="modal-title text-success text-center">
                                                                    Update Picture
                                                                </h4>
                                                            </div>
                                                            <div class="modal-body" style="overflow: hidden">
                                                                <div class="col-md-12">
                                                                    <div class="col-md-12 f-s-14 f-f-s">

                                                                        {!! Form::open(array('url'=>'image-update', 'role'=>'form', 'method'=>'POST', 'files'=>'true')) !!}
                                                                        <div class="form-horizontal">
                                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                            <input type="hidden" name="id" value="{{ $v->id }}">
                                                                            <input type="hidden" name="t_id" value="444">

                                                                            <div class="form-group">
                                                                                <label for="exampleInputName2" class="col-sm-4 control-label m-t-20">Image :</label>
                                                                                <div class="col-sm-6">
                                                                                    <img src="{{ asset('fe/img/blog_pic/'.$v->blog_image) }}" height="60px" width="90px" alt="pic">
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
                                                <!--end image_update -->

                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div id="tabs-14">
                                <div class="b-tabs-vertical__content-text">
                                    <h3 class="f-tabs-vertical__title f-primary-b"><i class="fa">Total Blog</i></h3>
                                    <div class="col-md-8 well">
                                        <a href="" class="btn btn-default btn-sm m-t-5"><i class="fa fa-hand-o-right"> Total blog {{ Session::get('count') }}</i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="b-hr-light"/>
            </div>
        </div>



    </div>
@endsection