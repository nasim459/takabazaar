@section('maincontent')
    {{--    @include('ap.form.include_form')--}}
    <!--start container-fluid-->
    <div class="container-fluid content-change-fixed m-t-19" ng-controller="LoanController">

        <div class="panel panel-default m-b-0">

            <div class="col-md-12 p-10 border-bottom-1">
                <div class="col-md-4"><i class="fa"> Assing Insurance Information</i></div>
                <div class="col-md-4">
                    <i class="fa text-success">
                        {{ Session::get('msg_suc') }} {{ Session::put('msg_suc', '') }}
                        {{ Session::get('msg_error') }} {{ Session::put('msg_error', '') }}
                    </i>
                </div>
                <div class="col-md-4 text-right">
                    <a href="{{ url('bank'.'/'.'list') }}" class="btn btn-default btn-xs text-success" title="View Bank Information"><i class="fa fa-eye"> View Bank</i></a>
                    <a href="{{ url('cardcategory'.'/'.'list') }}" class="btn btn-default btn-xs text-success" title="View Card Category Information"><i class="fa fa-eye">Card Category</i></a>
                </div>
            </div>

            <div class="panel-body secondscreen" style="overflow: hidden; overflow-y: scroll;">

                <div class="col-sm-12 m-t-20" style="overflow: hidden;">

                    {!! Form::open(array('url'=>'form-bank-save', 'role'=>'form', 'method'=>'POST', 'files'=>'true')) !!}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="col-sm-6" style="border-right: 1px solid #d9d9d9;">
                        <div class="form-horizontal">
                            <a href="{{ url('bank'.'/'.'list') }}" class="text-success" title="View Bank Information"><i class="fa fa-eye text-center m-b-20"> Enter Bank Name</i></a>

                            <div class="form-group">
                                <label for="exampleInputName2" class="col-sm-4 control-label">Bank Name : </label>
                                <div class="col-sm-8">
                                    <input type="text" name="b_name" class="form-control" id="exampleInputName2" placeholder="Enter bank name..." required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName2" class="col-sm-4 control-label">Logo :</label>
                                <div class="col-sm-6">
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


                     {{----here include bank_form & card_category_form----}}


                    {!! Form::open(array('url'=>'form-cardcategory-save', 'role'=>'form', 'method'=>'POST', 'files'=>'true')) !!}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="col-sm-6">
                        <div class="form-horizontal">
                            <a href="{{ url('bank'.'/'.'list') }}" class="text-success" title="View Bank Information"><i class="fa fa-eye text-center m-b-20"> Enter Card Category</i></a>

                            <div class="form-group">
                                <label for="exampleInputName2" class="col-sm-4 control-label">Card Category : </label>
                                <div class="col-sm-8">
                                    <input type="text" name="cc_name" class="form-control" id="exampleInputName2" placeholder="Write Card Category name..." required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName2" class="col-sm-4 control-label">Logo :</label>
                                <div class="col-sm-6">
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

    </div>
    <!--end container-fluid-->
@endsection