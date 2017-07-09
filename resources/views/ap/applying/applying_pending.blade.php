@section('maincontent')
    @include('ap.applying.include_applying_menu')
    <!--start container-fluid-->
    <div class="container-fluid content-change-fixed" ng-controller="homeController">

        <div class="panel panel-default m-b-0">
            <div class="table-h-t">
                <div class="col-md-3 m-t-5">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search here...">
                    </div>
                </div>
                <div class="col-md-3 m-t-10 text-success"><b>Applying Pending</b></div>
                <div class="col-md-4 m-t-10">
                    <i class="fa text-success">{{ Session::get('msg_apply') }} {{ Session::put('msg_apply', '') }}</i>
                </div>
                <div class="col-md-2 text-right m-t-10">
                    {{--<a class="btn btn-default btn-xs text-success width-100" title="Add Customer"><i class="fa fa-eye"> Report</i></a>--}}
                </div>
            </div>

            <table class="table table-fixed">
                <thead>
                <tr class="success">
                    <th class="col-sm-1">No Bank</th>
                    <th class="col-sm-4">Client Name</th>
                    <th class="col-sm-2">Phone</th>
                    <th class="col-sm-2">Offering Type</th>
                    <th class="col-sm-1">Status</th>
                    <th class="col-sm-2">Action</th>
                </tr>
                </thead>
                <tbody>

                @php $number = 0; $suc = 0; $reqs = 1; $pending = 2; $table = 66; @endphp
                @foreach($bank_view as $v)
                    <tr>
                        <td class="col-xs-12 col-sm-1 text-success">
                            <a class="btn btn-default btn-xs"><i class="fa">{{$number = $number+1}}</i></a>
                            <a data-toggle="modal" data-target="#{{$v->id}}kkk" title="{{$v->bank_name}}">
                                <img src="{{ asset($v->bank_image_url) }}" height="20px" width="30px" alt="pic">
                            </a>
                        </td>
                        <td class="col-xs-12 col-sm-4">Yamin Alam Sarker</td>
                        <td class="col-xs-12 col-sm-2">01777888757</td>
                        <td class="col-xs-12 col-sm-2">Loan</td>
                        <td class="col-xs-12 col-sm-1">
                            @if($v->aply_status==2)
                                <a href="{{URL::to('publication-alert/'.$v->id.'/'.$pending.'/'.$table)}}" class="btn btn-default btn-xs m-l-20" title="Applying Request"><i class="text-danger-light fa fa-warning"></i></a>
                            @endif
                        </td>
                        <td class="col-xs-12 col-sm-2">
                            <a class="btn btn-default btn-xs" data-toggle="modal" data-target="#{{$v->id}}" title="Details Information"><i class="fa fa-list"> Details</i></a>
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
                                        <img src="{{ asset($v->bank_image_url) }}" height="20px" width="30px" alt="pic">&nbsp;
                                        {{$v->bank_name}}
                                    </h4>
                                </div>
                                <div class="modal-body" style="overflow: hidden">
                                    <div class="col-md-12">
                                        <div class="col-md-10 col-md-offset-1 f-s-14 f-f-s">
                                            <dl class="dl-horizontal">
                                                <dt>Client Name :</dt>
                                                <dd>Kamrul Hassan</dd>
                                                <dt>Phone Number :</dt>
                                                <dd>017777888</dd>
                                                <dt>Email Address :</dt>
                                                <dd>nasimvirus@gmail.com</dd>
                                                <dt>Location :</dt>
                                                <dd>Dhanmondi</dd>
                                                <dt>Address :</dt>
                                                <dd>Dhanmondi, Dhaka - 1207 </dd>
                                            </dl>
                                            <hr>
                                            <dl class="dl-horizontal">
                                                <dt>Offering Type :</dt>
                                                <dd>Loan</dd>
                                                <dt>Person Type :</dt>
                                                <dd>Salaried Person</dd>
                                                <dt>Category :</dt>
                                                <dd>Car</dd>
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
                <span class="text-success f-s-12">Showing {{ Session::get('count') }} Entries</span>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-1 col-md-offset-2"></div>
        </div>


    </div>
    <!--end container-fluid-->
@endsection