@section('maincontent')
    {{--    @include('ap.form.include_form')--}}
    <!--start container-fluid-->
    <div class="container-fluid content-change-fixed m-t-19" ng-controller="LoanController">

        <div class="panel panel-default m-b-0">

            <div class="col-md-12 p-10 border-bottom-1">
                <div class="col-md-4"><i class="fa"> Assing Investment Information</i></div>
                <div class="col-md-6"><i class="fa text-success"> {{ Session::get('insert_suc') }} {{ Session::put('insert_suc', '') }}</i></div>
                <div class="col-md-2 text-right">
                    <a href="{{ URL::to('investment-saving') }}" class="btn btn-default btn-xs text-success" title="View Investment"><i class="fa fa-eye"> View Investment</i></a>
                </div>
            </div>

            <div class="panel-body secondscreen" style="overflow: hidden; overflow-y: scroll;">
                {!! Form::open(array('url'=>'form-investment', 'role'=>'form', 'method'=>'POST')) !!}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="insert" value="data_insert">

                <div class="col-sm-10 m-t-20 col-sm-offset-1" style="overflow: hidden;">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <div class="col-sm-4">
                                <select class="form-control" name="bank_id" required>
                                    <option>Select Bank</option>
                                    @foreach($bank_view as $v)
                                        <option value="{{$v->id}}">{{$v->bank_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-sm-4">
                                <select class="form-control" name="invst_type" required>
                                    <option value="">Select Investment Type</option>
                                    <option value="1">Save Accounts</option>
                                    <option value="2">Fixed Accounts</option>
                                    <option value="3">Mutual Accounts</option>
                                </select>
                            </div>

                            <div class="col-sm-4">
                                <select class="form-control" name="invst_person" required>
                                    <option value="">Select Investment Person</option>
                                    <option value="1">Salaried Person</option>
                                    <option value="2">Business Person</option>
                                    <option value="3">Others</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName2" class="col-sm-4 control-label">Investment Amount UpTo:</label>
                            <div class="col-sm-4">
                                <input type="number" name="invst_amount" class="form-control" id="exampleInputName2" placeholder="Ex. 200000 TK" required>
                            </div>
                            <div class="col-sm-4">
                                <select class="form-control" name="invst_period" required>
                                    <option value="">Select Loan Period</option>
                                    <option value="1">1 Year</option>
                                    <option value="2">2 Year</option>
                                    <option value="3">3 Year</option>
                                    <option value="4">4 Year</option>
                                    <option value="5">5 Year</option>
                                    <option value="6">6 Year</option>
                                    <option value="7">7 Year</option>
                                    <option value="8">8 Year</option>
                                    <option value="9">9 Year</option>
                                    <option value="10">10 Year</option>
                                </select>
                            </div>
                        </div>

                        {{--<div class="form-group">--}}
                            {{--<label for="exampleInputName2" class="col-sm-4 control-label">Investment Interest Rate % :</label>--}}
                            {{--<div class="col-sm-4">--}}
                                {{--<input type="text" name="invst_interest_rate" class="form-control" id="exampleInputName2" placeholder="EX. 11%" required>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="form-group">
                            <label for="exampleInputName2" class="col-sm-4 control-label">Investment Interest Rate % :</label>
                            <div class="col-sm-2">
                                <input type="number" step="0.01" name="invst_rate_from" class="form-control" id="exampleInputName2" placeholder="EX. 0%">
                            </div>
                            <div class="col-sm-2">
                                <input type="number" step="0.01" name="invst_rate_to" class="form-control" id="exampleInputName2" placeholder="EX. 20%">
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>

                <div class="col-sm-12" style="overflow: hidden;">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <div class="col-sm-4">
                                <span class="text-success"><b>Investment Requirements</b></span>
                                <textarea name="data_req" class="ckeditor" cols="30" rows="10"></textarea>
                            </div>
                            <div class="col-sm-4">
                                <span class="text-success"><b>Investment Features</b></span>
                                <textarea name="data_fsr" class="ckeditor" cols="30" rows="10"></textarea>
                            </div>
                            <div class="col-sm-4">
                                <span class="text-success"><b>Investment Eligibility</b></span>
                                <textarea name="data_elig" class="ckeditor" cols="30" rows="10"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-10">
                                <input type="submit" value="Save" class="btn btn-success col-sm-4">
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>

        </div>

    </div>
    <!--end container-fluid-->
@endsection