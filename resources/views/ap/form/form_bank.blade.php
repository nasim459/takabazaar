@section('maincontent')
    {{--    @include('ap.form.include_form')--}}
    <!--start container-fluid-->
    <div class="container-fluid content-change-fixed m-t-19" ng-controller="LoanController">

        <div class="panel panel-default m-b-0">

            <div class="col-md-12 p-10 border-bottom-1">
                <div class="col-md-4"><i class="fa"> Assing Insurance Information</i></div>
                <div class="col-md-6">
                    <i class="fa text-success">
                        {{ Session::get('msg_suc') }} {{ Session::put('msg_suc', '') }}
                        {{ Session::get('msg_error') }} {{ Session::put('msg_error', '') }}
                    </i>
                </div>
                <div class="col-md-2 text-right">
                    <a href="{{ url('bank'.'/'.'list') }}" class="btn btn-default btn-xs text-success" title="View Bank Information"><i class="fa fa-eye"> View Bank</i></a>
                </div>
            </div>

            <div class="panel-body secondscreen" style="overflow: hidden; overflow-y: scroll;">
                {!! Form::open(array('url'=>'form-bank-save', 'role'=>'form', 'method'=>'POST', 'files'=>'true')) !!}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="col-sm-10 m-t-20 col-sm-offset-1" style="overflow: hidden;">
                    <div class="form-horizontal">

                        <div class="form-group">
                            <label for="exampleInputName2" class="col-sm-4 control-label">Bank Name : </label>
                            <div class="col-sm-4">
                                <input type="text" name="b_name" class="form-control" id="exampleInputName2" placeholder="Enter bank name..." required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName2" class="col-sm-4 control-label">Logo :</label>
                            <div class="col-sm-4">
                                <input type="file" name="image" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName2" class="col-sm-4 control-label"></label>
                            <div class="col-sm-4">
                                <input type="submit" value="Save" class="form-control btn btn-success" id="exampleInputName2">
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
                {!! Form::close() !!}
            </div>

        </div>

    </div>
    <!--end container-fluid-->
@endsection