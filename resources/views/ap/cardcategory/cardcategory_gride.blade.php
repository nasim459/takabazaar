@section('maincontent')
    @include('ap.cardcategory.include_cardcategory_menu')
    <!--start container-fluid-->
    <div class="container-fluid content-change-fixed" ng-controller="homeController">

        <!--start panel-->
        <div class="panel panel-default m-b-0">
            <!--start panel-heading-->
            <div class="panel-heading">
                <!--start panel-heading-row-->
                <div class="row" style="//background-color: red">
                    <!--start col-md-12 -->
                    <div class="col-md-12">
                        <div class="btn-group pull-left">
                            <a href="{{ url('form'.'/'.'bank') }}" class="btn btn-default btn-xs text-success-light" title="Go Home"><i class="fa fa-arrow-left"></i></a>
                        </div>
                        <div class="btn-group pull-right">
                            <button type="button" class="btn btn-default btn-xs">Action</button>
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#info-rental-picture" data-toggle="modal" title="Update Picture"><i class="fa fa-pencil"></i> Edit Picture</a></li>
                                <li><a href="#rental-bld-edit" data-toggle="modal" title="Edit Buinding-Floor-Unit"><i class="fa fa-pencil"></i> Edit Building</a></li>
                                <li><a href="{{URL::to('info-rental-edit/')}}"><i class="fa fa-edit"></i> Edit All Profile</a></li>
                                <li><a href="{{URL::to('dboard')}}"><i class="fa fa-home"></i> Go Dashboarde</a></li>
                                <li class="divider"></li>
                                <li><a href="{{URL::to('')}}"><i class="fa fa-power-off text-success-light"></i> SignOut</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--end col-md-12 -->

                    <!--start col-md-12 -->
                    <div class="col-md-12">
                        <div class="col-xs-12 col-sm-12 col-md-12 m-t-5" style="height: 350px; overflow-y: auto; width: 100%;">

                            @php $number = 0; @endphp
                            @foreach($bank_view as $v)
                            <div class="col-xs-10 col-sm-4 col-md-2">
                                <a href="#" class="thumbnail text-center" data-toggle="modal" data-target="#myModal" title="Md Nasim">
                                    <img class="img-info" src="{{ asset('ap/images/banks/b_51.png') }}" title="{{$v->bank_name}}" alt="...">
                                    <p class="m-t-10"><span>{{$v->bank_name}}</span></p>
                                </a>
                            </div>
                            @endforeach

                            <div class="col-xs-10 col-sm-4 col-md-2">
                                <a href="#" class="thumbnail text-center" title="Md Nasim">
                                    <img class="img-info" src="{{URL::asset('ap/images/img_nasim.jpg')}}" alt="...">
                                    <p class="m-t-10"><span>Md Nasim</span></p>
                                </a>
                            </div>
                            <div class="col-xs-10 col-sm-4 col-md-2">
                                <a href="#" class="thumbnail text-center" title="Md Nasim">
                                    <img class="img-info" src="{{URL::asset('ap/images/img_nasim.jpg')}}" alt="...">
                                    <p class="m-t-10"><span>Md Nasim</span></p>
                                </a>
                            </div>
                            <div class="col-xs-10 col-sm-4 col-md-2">
                                <a href="#" class="thumbnail text-center" title="Md Nasim">
                                    <img class="img-info" src="{{URL::asset('ap/images/img_nasim.jpg')}}" alt="...">
                                    <p class="m-t-10"><span>Md Nasim</span></p>
                                </a>
                            </div>
                            <div class="col-xs-10 col-sm-4 col-md-2">
                                <a href="#" class="thumbnail text-center" title="Md Nasim">
                                    <img class="img-info" src="{{URL::asset('ap/images/img_nasim.jpg')}}" alt="...">
                                    <p class="m-t-10"><span>Md Nasim</span></p>
                                </a>
                            </div>
                            <div class="col-xs-10 col-sm-4 col-md-2">
                                <a href="#" class="thumbnail text-center" data-toggle="modal" data-target="#myModal" title="Md Nasim">
                                    <img class="img-info" src="{{URL::asset('ap/images/img_nasim.jpg')}}" alt="...">
                                    <p class="m-t-10"><span>Md Nasim</span></p>
                                </a>
                            </div>
                            <div class="col-xs-10 col-sm-4 col-md-2">
                                <a href="#" class="thumbnail text-center" title="Md Nasim">
                                    <img class="img-info" src="{{URL::asset('ap/images/img_nasim.jpg')}}" alt="...">
                                    <p class="m-t-10"><span>Md Nasim</span></p>
                                </a>
                            </div>
                            <div class="col-xs-10 col-sm-4 col-md-2">
                                <a href="#" class="thumbnail text-center" title="Md Nasim">
                                    <img class="img-info" src="{{URL::asset('ap/images/img_nasim.jpg')}}" alt="...">
                                    <p class="m-t-10"><span>Md Nasim</span></p>
                                </a>
                            </div>
                            <div class="col-xs-10 col-sm-4 col-md-2">
                                <a href="#" class="thumbnail text-center" data-toggle="modal" data-target="#myModal" title="Md Nasim">
                                    <img class="img-info" src="{{URL::asset('ap/images/img_nasim.jpg')}}" alt="...">
                                    <p class="m-t-10"><span>Md Nasim</span></p>
                                </a>
                            </div>

                        </div>
                    </div>
                    <!--end col-md-12 -->

                </div>
                <!--end panel-heading-row-->
            </div>
            <!--start panel-heading-->

        </div>
        <!--end panel-->


    </div>
    <!--end container-fluid-->
@endsection