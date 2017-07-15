@section('maincontent')
    {{--    @include('ap.form.include_form')--}}
    <!--start container-fluid-->
    <div class="container-fluid content-change-fixed m-t-19" ng-controller="LoanController">

        <div class="panel panel-default m-b-0">

            <div class="col-md-12 p-10 border-bottom-1">
                <div class="col-md-4"><i class="fa"> Assing Insurance Information</i></div>
                <div class="col-md-6"><i class="fa text-success"> {{ Session::get('insert_suc') }} {{ Session::put('insert_suc', '') }}</i></div>
                <div class="col-md-2 text-right">
                    <a href="{{ url('insurance'.'/'.'life') }}" class="btn btn-default btn-xs text-success" title="View Insurance"><i class="fa fa-eye"> View Insurance</i></a>
                </div>
            </div>

            <div class="panel-body secondscreen" style="overflow: hidden; overflow-y: scroll;">
                {!! Form::open(array('url'=>'form-investment-save', 'role'=>'form', 'method'=>'POST')) !!}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">

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
                                <select class="form-control" name="insr_type" required>
                                    <option value="">Select Insurance Type</option>
                                    <option value="1">Life</option>
                                    <option value="2">Marine</option>
                                    <option value="3">Fire</option>
                                    <option value="4">Accident</option>
                                    <option value="5">Car</option>
                                    <option value="6">Bike</option>
                                </select>
                            </div>

                            <div class="col-sm-4">
                                <select class="form-control" name="insr_person" required>
                                    <option value="">Select Insurance Person</option>
                                    <option value="1">Salaried Person</option>
                                    <option value="2">Business Person</option>
                                    <option value="3">Others</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName2" class="col-sm-4 control-label">Sum Insured :</label>
                            <div class="col-sm-4">
                                <input type="number" name="insr_amount" class="form-control" id="exampleInputName2" placeholder="Ex. 200000 TK" required>
                            </div>
                            <div class="col-sm-4">
                                <select class="form-control" name="insr_period" required>
                                    <option value="">Select Insurance Period</option>
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

                        <div class="form-group">
                            <label for="exampleInputName2" class="col-sm-4 control-label">Types of Cover :</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="insr_period" required>
                                    <option value="">Select Insurance Cover</option>
                                    <option value="1">First Cover</option>
                                    <option value="2">Second Cover</option>
                                    <option value="3">Third Cover</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName2" class="col-sm-4 control-label">Insurance Interest Rate % :</label>
                            <div class="col-sm-2">
                                <input type="number" name="invst_rate_from" class="form-control" id="exampleInputName2" placeholder="EX. 0%">
                            </div>
                            <div class="col-sm-2">
                                <input type="number" name="invst_rate_to" class="form-control" id="exampleInputName2" placeholder="EX. 20%">
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>

                <div class="col-sm-12" style="overflow: hidden;">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <div class="col-sm-4">
                                <span class="text-success"><b>Insurance Requirements</b></span>
                                <textarea name="data_req" class="ckeditor" cols="30" rows="10"></textarea>
                            </div>
                            <div class="col-sm-4">
                                <span class="text-success"><b>Insurance Features</b></span>
                                <textarea name="data_fsr" class="ckeditor" cols="30" rows="10"></textarea>
                            </div>
                            <div class="col-sm-4">
                                <span class="text-success"><b>Insurance Eligibility</b></span>
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