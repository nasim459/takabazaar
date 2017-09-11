@section('maincontent')
    @include('ap.info.include_info_menu')
    <!--start container-fluid-->
    <div class="container-fluid content-change-fixed" ng-controller="homeController">

        <div class="panel panel-default m-b-0">
            <div class="table-h-t">
                <div class="col-md-3 m-t-5">
                    <div class="form-group">
                        <input type="text" value="Contact Information" readonly class="form-control" placeholder="Search here...">
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
                    <a data-toggle="modal" data-target="#aboutTeam" class="btn btn-default btn-xs text-success width-100" title="Create A Member"><i class="fa fa-plus"> Add Member</i></a>
                </div>
            </div>

            <table class="table table-fixed">
                <thead>
                <tr class="success">
                    <th class="col-sm-1">No</th>
                    <th class="col-sm-2">Contact Name</th>
                    <th class="col-sm-2">Title Name</th>
                    <th class="col-sm-2">Email Address</th>
                    <th class="col-sm-3">Message</th>
                    <th class="col-sm-2">Date</th>
                </tr>
                </thead>
                <tbody>

                @php $number = 0; $off = 0; $on = 1; $table = 111; @endphp
                @foreach($info_view as $v)
                    <tr>
                        <td class="col-xs-12 col-sm-1 text-success">
                            <a class="btn btn-default btn-xs"><i class="fa">{{$number = $number+1}}</i></a>
                        </td>
                        <td class="col-xs-12 col-sm-2">
                            {{str_limit($v->contact_name, 25, '...')}}
                        </td>
                        <td class="col-xs-12 col-sm-2" title="{{$v->about_name}}">
                            {{str_limit($v->contact_title, 25, '...')}}
                        </td>
                        <td class="col-xs-12 col-sm-2">
                            {{str_limit($v->contact_email, 25, '...')}}
                        </td>
                        <td class="col-xs-12 col-sm-3">
                            {{str_limit($v->contact_message, 30, '...')}}
                            <i data-toggle="modal" data-target="#{{$v->id}}p" class="fa" title="Click To Details">details</i>
                        </td>
                        <td class="col-xs-12 col-sm-2">
                            <a data-toggle="modal" data-target="#{{$v->id}}p" class="btn btn-default btn-xs" title="Click To Details"><i class="fa fa-list"></i></a>
                            {{$v->created_at}}
                        </td>
                    </tr>


                    <!--start about_add_team_member -->
                    <div id="{{$v->id}}p" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!--start Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title text-success text-center">User Message Information</h4>
                                </div>
                                <div class="modal-body" style="overflow: hidden">
                                    <div class="col-md-12">
                                        <div class="col-md-12 f-s-14 f-f-s">

                                            <div class="form-horizontal m-t-10">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                {{--<input type="hidden" name="insert_save" value="insert_save">--}}

                                                <div class="form-group">
                                                    <label class="col-sm-4" style="text-align: right;" for="usr">Contact Name:</label>
                                                    <div class="col-sm-6">
                                                        <i class="fa">{{$v->contact_name}}</i>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-4" style="text-align: right;" for="usr">Contact Email :</label>
                                                    <div class="col-sm-6">
                                                        <i class="fa">{{$v->contact_email}}</i>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-4" style="text-align: right;" for="usr">Message Title :</label>
                                                    <div class="col-sm-6">
                                                        <i class="fa">{{$v->contact_title}}</i>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-4" style="text-align: right;" for="usr">Message Query :</label>
                                                    <div class="col-sm-6">
                                                        <i class="fa">{{$v->contact_message}}</i>
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
                    <!--end about_add_team_member -->
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