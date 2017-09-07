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
                    <a data-toggle="modal" data-target="#category" class="btn btn-default btn-xs text-success width-100" title="Create A Blog For Publishing"><i class="fa fa-plus"> Write Blog</i></a>
                </div>
            </div>

            <table class="table table-fixed">
                <thead>
                <tr class="success">
                    <th class="col-sm-2">No</th>
                    <th class="col-sm-2">User Name</th>
                    <th class="col-sm-4">Email Address</th>
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
                        <td class="col-xs-12 col-sm-2" title="{{$v->user_name}}">
                            {{$v->user_name}}
                        </td>
                        <td class="col-xs-12 col-sm-4">
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