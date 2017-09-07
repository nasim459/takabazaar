@section('maincontent')
    @include('ap.blog.include_blog_menu')
    <!--start container-fluid-->
    <div class="container-fluid content-change-fixed" ng-controller="homeController">

        <div class="panel panel-default m-b-0">
            <div class="table-h-t">
                <div class="col-md-3 m-t-5">
                    <div class="form-group">
                        <input type="text" value="Blog Category" readonly class="form-control" placeholder="Search here...">
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
                    <a data-toggle="modal" data-target="#category" class="btn btn-default btn-xs text-success width-100" title="Create A Blog For Publishing"><i class="fa fa-plus"> Write Blog</i></a>
                </div>
            </div>

            <table class="table table-fixed">
                <thead>
                <tr class="success">
                    <th class="col-sm-2">No</th>
                    <th class="col-sm-4">Category Name</th>
                    <th class="col-sm-2">Created</th>
                    <th class="col-sm-2">Status</th>
                    <th class="col-sm-2">Action</th>
                </tr>
                </thead>
                <tbody>

                @php $number = 0; $off = 0; $on = 1; $table = 555; @endphp
                @foreach($data_view as $v)
                    <tr>
                        <td class="col-xs-12 col-sm-2 text-success">
                            <a class="btn btn-default btn-xs"><i class="fa">{{$number = $number+1}}</i></a>
                        </td>
                        <td class="col-xs-12 col-sm-4" title="{{$v->category_name}}">
                            {{$v->category_name}}
                        </td>
                        <td class="col-xs-12 col-sm-2">
                            {{$v->updated_at}}
                        </td>
                        <td class="col-xs-12 col-sm-2">
                            @if($v->category_status == 1)
                                <a href="{{URL::to('publication/'.$v->id.'/'.$off.'/'.$table)}}" class="btn btn-default btn-xs text-success" title="Publish"><i class="fa fa-check">&nbsp;Publish&nbsp; &nbsp;</i></a>
                            @else
                                <a href="{{URL::to('publication/'.$v->id.'/'.$on.'/'.$table)}}" class="btn btn-default btn-xs text-danger" title="unPublish"><i class="fa fa-lock"> unPublish</i></a>
                            @endif
                        </td>
                        <td class="col-xs-12 col-sm-2">
                            <a data-toggle="modal" data-target="#{{$v->id}}kk" class="btn btn-default btn-xs text-success" title="Click To Edit"><i class="fa fa-edit"> Edit&nbsp;</i></a>
                        </td>
                    </tr>


                    <!--start category -->
                    <div id="category" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!--start Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title text-success text-center">
                                        Create Your Create
                                    </h4>
                                </div>
                                <div class="modal-body" style="overflow: hidden">
                                    <div class="col-md-12">
                                        <div class="col-md-12 f-s-14 f-f-s">

                                            {!! Form::open(array('url'=>'blog-category-insert', 'role'=>'form', 'method'=>'POST')) !!}
                                            <div class="form-horizontal m-t-10">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="hidden" name="insert_save" value="insert_save">

                                                <div class="form-group">
                                                    <label class="col-sm-4" for="email">Category Name:</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="category_name" class="form-control" id="email" placeholder="Write category name..." required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-4" for="email"></label>
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
                    <!--end detailsInfo -->

                    <!--start category_update-->
                    <div id="{{$v->id}}kk" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!--start Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title text-success text-center">
                                        Update Category
                                    </h4>
                                </div>
                                <div class="modal-body" style="overflow: hidden">
                                    <div class="col-md-12">
                                        <div class="col-md-12 f-s-14 f-f-s">

                                            {!! Form::open(array('url'=>'blog-category-insert', 'role'=>'form', 'method'=>'POST')) !!}
                                            <div class="form-horizontal">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                                <input type="hidden" name="c_id" value="{{ $v->id }}">

                                                <div class="form-group">
                                                    <div class="col-sm-12 m-t-10">
                                                        <label class="col-sm-4" for="email">Category Name:</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" value="{{ $v->category_name }}" name="category_name" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-12 m-t-15">
                                                        <label class="col-sm-4" for="email"></label>
                                                        <div class="col-sm-6">
                                                            <input type="submit" value="Update" class="btn btn-success col-sm-12">
                                                        </div>
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
                    <!--end category_update-->

                    <!--start detailsInfo -->
                    <div id="{{$v->id}}" class="modal fade" role="dialog">
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
                                        <div class="col-md-5 col-md-offset-1 f-s-14 f-f-s">
                                            <dl class="dl-horizontal">
                                                <dt>Patient Name :</dt>
                                                <dd>Md Nasim</dd>
                                                <dt>Phone :</dt>
                                                <dd>01777888757</dd>
                                                <dt>Gender :</dt>
                                                <dd>Male</dd>
                                                <dt>Age :</dt>
                                                <dd>24</dd>
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