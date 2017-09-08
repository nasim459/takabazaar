@section('maincontent')
    @include('ap.blog.include_blog_menu')
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
                    <a class="btn btn-default btn-xs text-success width-100" title="Create A Blog For Publishing"><i class="fa fa-user"> <b>{{Session::get('count')}}</b> Users</i></a>
                </div>
            </div>

            <table class="table table-fixed">
                <thead>
                <tr class="success">
                    <th class="col-sm-2">No</th>
                    <th class="col-sm-2">Picture</th>
                    <th class="col-sm-2">User Name</th>
                    <th class="col-sm-2">Email Address</th>
                    <th class="col-sm-2">Created</th>
                    <th class="col-sm-2">Status</th>
                </tr>
                </thead>
                <tbody>

                @php $number = 0; $off = 0; $on = 1; $table = 888; @endphp
                @foreach($data_view as $v)
                    <tr>
                        <td class="col-xs-12 col-sm-2 text-success">
                            <a class="btn btn-default btn-xs"><i class="fa">{{$number = $number+1}}</i></a>
                        </td>
                        <td class="col-xs-12 col-sm-2">
                            <a class="btn btn-default btn-xs" data-toggle="modal" data-target="#{{$v->id}}kkk">
                                <img src="{{ asset($v->user_image) }}" height="16px" width="30px">
                            </a>
                        </td>
                        <td class="col-xs-12 col-sm-2" title="{{$v->user_name}}">
                            {{$v->user_name}}
                        </td>
                        <td class="col-xs-12 col-sm-2">
                            {{$v->user_email}}
                        </td>
                        <td class="col-xs-12 col-sm-2">
                            {{$v->updated_at}}
                        </td>
                        <td class="col-xs-12 col-sm-2">
                            @if($v->status == 1)
                                <a href="{{URL::to('publication/'.$v->id.'/'.$off.'/'.$table)}}" class="btn btn-default btn-xs text-success" title="Publish"><i class="fa fa-check">&nbsp;Publish&nbsp; &nbsp;</i></a>
                            @else
                                <a href="{{URL::to('publication/'.$v->id.'/'.$on.'/'.$table)}}" class="btn btn-default btn-xs text-danger" title="unPublish"><i class="fa fa-lock"> unPublish</i></a>
                            @endif
                        </td>
                    </tr>


                    <!--start user_image_show-->
                    <div id="{{$v->id}}kkk" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!--start Modal content-->
                            <div class="modal-content">
                                {{--<div class="modal-header">--}}
                                    {{--<button type="button" class="close" data-dismiss="modal">&times;</button>--}}
                                    {{--<h4 class="modal-title text-success text-center">--}}
                                        {{--User Picture--}}
                                    {{--</h4>--}}
                                {{--</div>--}}
                                <div class="modal-body" style="overflow: hidden">
                                    <div class="col-md-12 f-s-14 f-f-s">
                                            <div class="form-horizontal">
                                                <div class="form-group">
                                                    <div class="col-sm-4 text-center m-t-30">
                                                        <i class="fa">
                                                            {{ $v->user_name }}<br>
                                                            {{ $v->user_email }}
                                                        </i>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <img src="{{ asset($v->user_image) }}" class="img-thumbnail" alt="ব্যবহারকারীর ছবি তাড়াতাড়ি আসতেছে" width="304" height="236">
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                {{--<div class="modal-footer">--}}
                                    {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                                {{--</div>--}}
                            </div>
                            <!--end Modal content-->

                        </div>
                    </div>
                    <!--end user_image_show -->
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