@section('maincontent')
    {{--    @include('ap.form.include_form')--}}
    <!--start container-fluid-->
    <div class="container-fluid content-change-fixed m-t-19" ng-controller="LoanController">

        <div class="panel panel-default m-b-0">

            <div class="col-md-12 p-10 border-bottom-1">
                <div class="col-md-4"><i class="fa"> Assing Card Information</i></div>
                <div class="col-md-6"><i class="fa text-success"> {{ Session::get('insert_suc') }} {{ Session::put('insert_suc', '') }}</i></div>
                <div class="col-md-2 text-right">
                    <a href="{{ url('card'.'/'.'debit') }}" class="btn btn-default btn-xs text-success" title="View Card"><i class="fa fa-eye"> View Card</i></a>
                </div>
            </div>

            <div class="panel-body secondscreen" style="overflow: hidden; overflow-y: scroll;">
                {!! Form::open(array('url'=>'form-card-save', 'role'=>'form', 'method'=>'POST')) !!}
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
                            <label for="exampleInputName2" class="col-sm-4 control-label">Interest Per Day :</label>
                            <div class="col-sm-4">
                                <input type="number" name="i_p_d" step="0.01" class="form-control" id="exampleInputName2" placeholder="Ex. 0.99 TK / thousand" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName2" class="col-sm-4 control-label">Interest Free Period :</label>
                            <div class="col-sm-4">
                                <input type="number" name="i_f_p" step="0.01" class="form-control" id="exampleInputName2" placeholder="Ex. 45" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName2" class="col-sm-4 control-label">Over Limit Fee :</label>
                            <div class="col-sm-4">
                                <input type="number" name="o_l_f" step="0.01" class="form-control" id="exampleInputName2" placeholder="Ex. 1500 TK" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName2" class="col-sm-4 control-label">Card Cheque Processing Fee % :</label>
                            <div class="col-sm-4">
                                <input type="number" name="c_c_p_f" step="0.01" class="form-control" id="exampleInputName2" placeholder="Ex. 0.75 %" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName2" class="col-sm-4 control-label">Late Payment Fee :</label>
                            <div class="col-sm-4">
                                <input type="number" name="l_p_f" step="0.01" class="form-control" id="exampleInputName2" placeholder="Ex. 1000 TK" required>
                            </div>
                        </div>

                    </div>
                    <hr>
                </div>

                <div class="col-sm-12" style="overflow: hidden;">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <div class="col-sm-4">
                                <span class="text-success"><b>Card Requirements</b></span>
                                <textarea name="data_req" class="ckeditor" cols="30" rows="10"></textarea>
                            </div>
                            <div class="col-sm-4">
                                <span class="text-success"><b>Card Features</b></span>
                                <textarea name="data_fsr" class="ckeditor" cols="30" rows="10"></textarea>
                            </div>
                            <div class="col-sm-4">
                                <span class="text-success"><b>Card Eligibility</b></span>
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