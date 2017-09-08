@section('maincontent')
    @include('ap.blog.include_blog_menu')
    <!--start container-fluid-->
    <div class="container-fluid content-change-fixed" ng-controller="homeController">

        <div class="panel panel-default m-b-0">
            <div class="table-h-t">
                <div class="col-md-3 m-t-5">
                    <div class="form-group">
                        <input type="text"value="Subscribers User" readonly class="form-control" placeholder="Search here...">
                    </div>
                </div>
                <div class="col-md-3 m-t-10 text-success">
                    {{--<b>Subscribers User</b>--}}
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-4 text-right m-t-10">
                    <a href="{{ url('blog-write') }}" class="btn btn-default btn-xs text-success width-100" title="Create A Blog For Publishing"><i class="fa fa-plus"> Write Blog</i></a>
                </div>
            </div>

            <table class="table table-fixed">
                <thead>
                <tr class="success">
                    <th class="col-sm-2">No</th>
                    <th class="col-sm-4">Email Address</th>
                    <th class="col-sm-2">Joined Date</th>
                    <th class="col-sm-4">Status</th>
                </tr>
                </thead>
                <tbody>

                @php $number = 0; $off = 0; $on = 1; $table = 11; @endphp
                @foreach($data_view as $v)
                    <tr>
                        <td class="col-xs-12 col-sm-2 text-success">
                            <a class="btn btn-default btn-xs"><i class="fa">{{$number = $number+1}}</i></a>
                        </td>
                        <td class="col-xs-12 col-sm-4">{{$v->subscriber_eamil}}</td>
                        <td class="col-xs-12 col-sm-2">{{$v->updated_at}}</td>
                        <td class="col-xs-12 col-sm-4">
                            @if($v->status == 1)
                                <a class="btn btn-success btn-xs" title="Publish"><i class="fa fa-check"></i></a>
                            @else
                                <a class="btn btn-danger btn-xs" title="This Article is unPublish by User"><i class="fa fa-lock"> &nbsp;</i></a>
                            @endif
                        </td>
                    </tr>
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