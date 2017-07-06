@section('maincontent')
    @include('ap.blog.include_blog_menu')
    <!--start container-fluid-->
    <div class="container-fluid content-change-fixed" ng-controller="homeController">

        <div class="panel panel-default m-b-0">
            <div class="table-h-t">
                <div class="col-md-3 m-t-5">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search here...">
                    </div>
                </div>
                <div class="col-md-3 m-t-10 text-success"><b>Subscribers User</b></div>
                <div class="col-md-2"></div>
                <div class="col-md-4 text-right m-t-10">
                    <a href="{{ url('blog-write') }}" class="btn btn-default btn-xs text-success width-100" title="Create A Blog For Publishing"><i class="fa fa-plus"> Write Blog</i></a>
                </div>
            </div>

            <table class="table table-fixed">
                <thead>
                <tr class="success">
                    <th class="col-sm-1">No</th>
                    <th class="col-sm-1">Picture</th>
                    <th class="col-sm-4">User Name</th>
                    <th class="col-sm-4">Email Address</th>
                    <th class="col-sm-2">Publication</th>
                </tr>
                </thead>
                <tbody>

                @php $number = 0; $off = 0; $on = 1; $table = 11; @endphp
                @foreach($bank_view as $v)
                    <tr>
                        <td class="col-xs-12 col-sm-1 text-success">
                            <a class="btn btn-default btn-xs"><i class="fa">{{$number = $number+1}}</i></a>
                        </td>
                        <td class="col-xs-12 col-sm-1">
                            <img src="{{ asset($v->bank_image_url) }}" height="20px" width="30px" alt="pic">
                        </td>
                        <td class="col-xs-12 col-sm-4">{{$v->bank_name}}</td>
                        <td class="col-xs-12 col-sm-4">{{$v->bank_name}}</td>
                        <td class="col-xs-12 col-sm-2">
                            {{--<a href="{{URL::to('publication/'.$v->id.'/'.$off.'/'.$table)}}" class="btn btn-default btn-xs text-success" title="Active"><i class="fa fa-check"> Active&nbsp;</i></a>--}}
                            <a class="btn btn-default btn-xs text-success" title="Active"><i class="fa fa-check"> Active&nbsp;</i></a>
                        </td>
                    </tr>


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
                <span class="text-success f-s-12">Showing 1 to 10 of 12 entries</span>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-1 col-md-offset-2"></div>
        </div>


    </div>
    <!--end container-fluid-->
@endsection