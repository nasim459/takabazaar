@section('maincontent')
    @include('ap.video.include_video_menu')
    <!--start container-fluid-->
    <div class="container-fluid content-change-fixed" ng-controller="LoanController">

        <div class="panel panel-default m-b-0">
            <div class="panel panel-title"></div>
            <div class="panel panel-body" style="height: 400px; overflow-y: scroll; overflow-x: hidden">

                @php $number = 0; $off = 0; $on = 1; $table = 11; @endphp
                @foreach($video_view as $v)
                <div class="col-xs-12 col-sm-4 m-t-12">
                    {!! $v->v_embed_code !!}
                    <a class="btn btn-default btn-xs" title="{{ $v->v_name }}"><i class="fa">{{$number = $number+1}}</i></a>
                    <span title="{{ $v->v_name }}">{{str_limit($v->v_name, 35, '...')}}</span>
                </div>
                @endforeach

            </div>
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