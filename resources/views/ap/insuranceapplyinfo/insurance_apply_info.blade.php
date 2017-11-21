@section('maincontent')
    @include('ap.insuranceapplyinfo.insurance_apply_info_menu')
    <!--start container-fluid-->
    <div class="container-fluid content-change-fixed" ng-controller="LoanController">

        <div class="panel panel-default m-b-0">
            <div class="table-h-t">
                <div class="col-md-3 m-t-5">
                    <div class="form-group">
                        <input type="text" value="Insurance Apply Information" readonly class="form-control" placeholder="Search here...">
                    </div>
                </div>
                <div class="col-md-3 m-t-10 text-success"></div>
                <div class="col-md-4">
                    <i class="fa text-success"></i>
                    <i class="fa text-danger"></i>
                </div>
                <div class="col-md-2 text-right m-t-10">
                    <a href="#" class="btn btn-default btn-xs text-success width-100" title="Assign Banner"><i class="fa"> {{ Session::get('count') }} Applying</i></a>
                </div>
            </div>

            <table class="table table-fixed">
                <thead>
                <tr class="success">
                    <th class="col-sm-2">No</th>
                    <th class="col-sm-4">Inturance Type</th>
                    <th class="col-sm-4">Submitted Date</th>
                    <th class="col-sm-1">Details</th>
                    <th class="col-sm-1">Action</th>
                </tr>
                </thead>
                <tbody>

                @php $number = 0; $off = 0; $on = 1; $table = 6666; @endphp
                @foreach($insurance_apply_view as $v)
                <tr>
                    <td class="col-xs-12 col-sm-2 text-success">
                        <a class="btn btn-default btn-xs"><i class="fa">{{$number = $number+1}}</i></a>
                    </td>
                    <td class="col-xs-12 col-sm-4">
                        @if($v->type == 1)
                            <span class="text-success"> Life Insurance</span>
                        @elseif($v->type == 2)
                            <span class="text-success"> Marine Insurance</span>
                        @elseif($v->type == 3)
                            <span class="text-success"> fire Insurance</span>
                        @elseif($v->type == 4)
                            <span class="text-success"> Accident Insurance</span>
                        @elseif($v->type == 5)
                            <span class="text-success"> Car Insurance</span>
                        @elseif($v->type == 6)
                            <span class="text-success"> Bike Insurance</span>
                        @elseif($v->type == 7)
                            <span class="text-success"> Health Insurance</span>
                        @endif
                    </td>
                    <td class="col-xs-12 col-sm-4">
                        <a class="btn btn-default btn-xs" title="From Submitted Date"><i class="fa fa-calendar-times-o"></i></a>
                        &nbsp; {{$v->created_at}}</span>
                    </td>
                    <td class="col-xs-12 col-sm-1">
                        <a class="btn btn-default btn-xs" data-toggle="modal" data-target="#{{$v->id}}" title="View Details Information"><i class="fa fa-filter"> View</i></a>
                    </td>
                    <td class="col-xs-12 col-sm-1">
                        @if($v->status==1)
                            <a href="{{URL::to('publication/'.$v->id.'/'.$off.'/'.$table)}}" class="btn btn-default btn-xs" title="Information Seen"><i class="text-success-light fa fa-check"></i></a>
                        @else
                            <a href="{{URL::to('publication/'.$v->id.'/'.$on.'/'.$table)}}" class="btn btn-default btn-xs" title="Not Seen Yet">&nbsp;<i class="text-danger-light fa fa-arrow-down"> </i></a>
                        @endif
                    </td>
                </tr>

                <!--start details_information-->
                <div id="{{$v->id}}" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!--start Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title text-success text-center">&nbsp;
                                    @if($v->type == 1)
                                        <span class="text-success"> Life Insurance</span>
                                    @elseif($v->type == 2)
                                        <span class="text-success"> Marine Insurance</span>
                                    @elseif($v->type == 3)
                                        <span class="text-success"> Fire Insurance</span>
                                    @elseif($v->type == 4)
                                        <span class="text-success"> Accident Insurance</span>
                                    @elseif($v->type == 5)
                                        <span class="text-success"> Car Insurance</span>
                                    @elseif($v->type == 6)
                                        <span class="text-success"> Bike Insurance</span>
                                    @elseif($v->type == 7)
                                        <span class="text-success"> Health Insurance</span>
                                    @endif
                                </h4>
                            </div>
                            <div class="modal-body" style="overflow: hidden">
                                <div class="col-md-12">
                                    <div class="col-md-12 m-t-15 f-s-14 f-f-s">

                                        @if(($v->type == 1) || ($v->type == 7))
                                            <dl class="dl-horizontal">
                                                <dt>Name :</dt>
                                                <dd>{{$v->p_name}}</dd>
                                                <dt>Occupation :</dt>
                                                <dd>{{$v->p_occupation}}</dd>
                                                <dt>Age :</dt>
                                                <dd>{{$v->p_age}}</dd>
                                                <dt>Smoking habit :</dt>
                                                <dd>
                                                    @if($v->p_smoking_habit==1)
                                                        <span class="text-success"><i class="fa fa-check"></i> Yes</span>
                                                    @else
                                                        <span class="text-danger"><i class="fa fa-remove"></i> No</span>
                                                    @endif
                                                </dd>
                                                <dt>Mobile Number :</dt>
                                                <dd>{{$v->p_mobile_number}}</dd>
                                            </dl>

                                        @elseif(($v->type == 5) || ($v->type == 6))
                                            <dl class="dl-horizontal">
                                                <dt>Number :</dt>
                                                <dd>{{$v->v_number}}</dd>
                                                <dt>Model :</dt>
                                                <dd>{{$v->v_model}}</dd>

                                                @if($v->v_expire_date != NULL)
                                                    <dt title="Expiry Date of Previous Insurance">Expiry Date :</dt>
                                                    <dd>{{$v->v_expire_date}}</dd>
                                                @else
                                                    <dt>Vehicles :</dt>
                                                    <dd><span class="text-success"> New Vehicles</span></dd>
                                                @endif

                                                <dt>Mobile Number :</dt>
                                                <dd>{{$v->p_mobile_number}}</dd>

                                            </dl>
                                        @endif

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
                <!--end details_information-->
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