@section('maincontent')
    {{--    @include('ap.form.include_form')--}}
    <!--start container-fluid-->
    <div class="container-fluid content-change-fixed m-t-19" ng-controller="LoanController">

        <div class="panel panel-default m-b-0">

            <div class="col-md-12 p-10 border-bottom-1">
                <div class="col-md-4"><i class="fa"> Assign Banner Information</i></div>
                <div class="col-md-6">
                    <i class="fa text-success">
                        {{ Session::get('msg_suc') }} {{ Session::put('msg_suc', '') }}
                        {{ Session::get('msg_error') }} {{ Session::put('msg_error', '') }}
                    </i>
                </div>
                <div class="col-md-2 text-right">
                    <a href="{{ URL::to('banner') }}" class="btn btn-default btn-xs text-success" title="View Insurance"><i class="fa fa-eye"> View Banner</i></a>
                </div>
            </div>

            <div class="panel-body secondscreen" style="overflow: hidden; overflow-y: scroll;">

                {!! Form::open(array('url'=>'form-banner-save', 'role'=>'form', 'method'=>'POST', 'files'=>'true')) !!}
                <div class="form-horizontal">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <label for="exampleInputName2" class="col-sm-4 control-label m-t-mi-5">Banner Image :</label>
                        <div class="col-sm-6">
                            <input type="file" name="image" required>
                        </div>
                    </div>
                    <hr>

                    <div class="form-group">
                        <label for="exampleInputName2" class="col-sm-4 control-label">Banner Name:</label>
                        <div class="col-sm-6">
                            <input type="text" name="a_name" class="form-control" id="exampleInputName2" placeholder="Banner name..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName2" class="col-sm-4 control-label">Website Link :</label>
                        <div class="col-sm-6">
                            <input type="text" name="a_link" class="form-control" id="exampleInputName2" placeholder="Ex. www.websitelink.com (don't use https://)" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName2" class="col-sm-4 control-label">Company Name :</label>
                        <div class="col-sm-6">
                            <input type="text" name="a_company_name" class="form-control" id="exampleInputName2" placeholder="Write company name">
                        </div>
                    </div>
                </div>

                <div class="form-horizontal">
                    <div class="form-group">
                        <label for="exampleInputName2" class="col-sm-4 control-label">Banner Description :</label>
                        <div class="col-sm-6">
                            <textarea name="a_desc" cols="4" rows="3" class="form-control" placeholder="Write description..."></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-10">
                            <input type="submit" value="Save" class="btn btn-success col-sm-4">
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}

            </div>

        </div>

    </div>
    <!--end container-fluid-->
@endsection