@section('maincontent')
    {{--    @include('ap.form.include_form')--}}
    <!--start container-fluid-->
    <div class="container-fluid content-change-fixed m-t-19" ng-controller="LoanController">

        <div class="panel panel-default m-b-0">

            <div class="col-md-12 p-10 border-bottom-1">
                <div class="col-md-4"><i class="fa"> Assing Devit Card Information</i></div>
                <div class="col-md-6"><i class="fa text-success"> {{ Session::get('insert_suc') }} {{ Session::put('insert_suc', '') }}</i></div>
                <div class="col-md-2 text-right">
                    <a href="{{ url('card'.'/'.'debit') }}" class="btn btn-default btn-xs text-success" title="View Card"><i class="fa fa-eye"> View Card</i></a>
                </div>
            </div>

            <div class="panel-body secondscreen" style="overflow: hidden; overflow-y: scroll;">
                {!! Form::open(array('url'=>'form-card-debit-save', 'role'=>'form', 'method'=>'POST')) !!}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="col-sm-10 m-t-20 col-sm-offset-1" style="overflow: hidden;">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <div class="col-sm-4">
                                <select class="form-control" name="b_id" required>
                                    <option value="">Select Bank</option>
                                    @foreach($bank_view as $v)
                                        <option value="{{$v->id}}">{{$v->bank_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-sm-4">
                                <select class="form-control" name="cc_id_old" required>
                                    <option value="">Select Card Type</option>
                                    @foreach($cardcategorie_view as $v)
                                        <option value="{{$v->id}}">{{$v->cc_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="exampleInputName2" class="col-sm-4 control-label">Yearly Limit :</label>
                            <div class="col-sm-4">
                                <input type="number" name="y_limit" step="0.01" class="form-control" id="exampleInputName2" placeholder="Ex. 10000000 ৳" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName2" class="col-sm-4 control-label">Activation Deposit :</label>
                            <div class="col-sm-4">
                                <input type="number" name="a_deposit" step="0.01" class="form-control" id="exampleInputName2" placeholder="Ex. 50000 ৳" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName2" class="col-sm-4 control-label">Minimum Balance :</label>
                            <div class="col-sm-4">
                                <input type="number" name="m_balance" step="0.01" class="form-control" id="exampleInputName2" placeholder="Ex. 100000 ৳" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName2" class="col-sm-4 control-label">Daily Limit ATM :</label>
                            <div class="col-sm-4">
                                <input type="number" name="d_limit_atm" step="0.01" class="form-control" id="exampleInputName2" placeholder="Ex. 50000 ৳" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName2" class="col-sm-4 control-label">Daily Limit Purchase :</label>
                            <div class="col-sm-4">
                                <input type="number" name="d_limit_purchase" step="0.01" class="form-control" id="exampleInputName2" placeholder="Ex. 50000 ৳" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName2" class="col-sm-4 control-label">Reward & Installment :</label>
                            <div class="col-sm-4">
                                <input type="number" name="r_installment" step="0.01" class="form-control" id="exampleInputName2" placeholder="Ex. 500 ৳" required>
                            </div>
                        </div>

                    </div>
                    <hr>
                </div>

                <div class="col-sm-12" style="overflow: hidden;">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <div class="col-sm-4">
                                <span class="text-success"><b>Debit Card Requirements</b></span>
                                <textarea name="data_req" class="ckeditor" cols="30" rows="10"></textarea>
                            </div>
                            <div class="col-sm-4">
                                <span class="text-success"><b>Debit Card Features</b></span>
                                <textarea name="data_fsr" class="ckeditor" cols="30" rows="10"></textarea>
                            </div>
                            <div class="col-sm-4">
                                <span class="text-success"><b>Debit Card Eligibility</b></span>
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