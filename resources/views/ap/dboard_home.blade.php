@extends('ap_master')
@section('maincontent')
<!--start container-fluid-->
<div class="container-fluid content-change no-border">

    <!--start col-md-12-->
    <div class="col-md-12 text-center text-success m-b-20"><h3>
            <i class="fa fa-home"></i> Dashboard</h3>
    </div>
    <!--end col-md-12-->

    <!--start col-md-12-->
    <div class="col-sm-12 col-md-12">
        <div class="col-md-8 col-md-offset-2">
            <div class="btn-group m-b-20" role="group" aria-label="...">
                <a href="{{ url('form-loan') }}" class="app btn btn-default">
                    <i class="fa fa-plus text-success text-success fa-2x fa-3y"></i><br/>
                    <small>Loan</small>
                </a>

                <a href="{{ url('form-investment') }}" class="app btn btn-default">
                    <i class="fa fa-plus text-success fa-2x fa-3y"></i><br/>
                    <small>Investment</small>
                </a>

                <a href="{{ url('form-insurance') }}" class="app btn btn-default">
                    <i class="fa fa-plus text-success fa-2x fa-3y"></i><br/>
                    <small>Insurance</small>
                </a>

                <a href="{{ url('form-card') }}" class="app btn btn-default">
                    <i class="fa fa-plus text-success fa-2x fa-3y"></i><br/>
                    <small>card</small>
                </a>
            </div>
        </div>

        <div class="col-md-8 col-md-offset-2">
            <div class="btn-group m-b-20" role="group" aria-label="...">

                <a href="{{ url('bank'.'/'.'list') }}" class="app btn btn-default">
                    <i class="fa fa-bank text-success fa-2x fa-3y"></i><br/>
                    <small>Bank</small>
                </a>

                <a class="app btn btn-default" data-toggle="modal" data-target="#addInfo">
                    <i class="fa fa-info-circle text-success fa-2x fa-3y"></i><br/>
                    <small>All Information</small>
                </a>

                <a href="{{ url('form-blog') }}" class="app btn btn-default">
                    <i class="fa fa-plus text-success fa-2x fa-3y"></i><br/>
                    <small>Blog</small>
                </a>

                <a href="{{URL::to('form-bank')}}" class="app btn btn-default" title="Add Your Bank">
                    <i class="fa fa-plus text-success fa-2x fa-3y"></i><br/>
                    <small>Bank</small>
                </a>

            </div>
        </div>

        <div class="col-md-8 col-md-offset-2">
            <div class="btn-group m-b-20" role="group" aria-label="...">
                <a href="{{ url('advertise') }}" class="app btn btn-default">
                    <i class="fa fa-plus text-success fa-2x fa-3y"></i><br/>
                    <small>Advertise</small>
                </a>

                <a href="{{URL::to('purchase-add-supplier')}}" class="app btn btn-default">
                    <i class="fa fa-plus text-success fa-2x fa-3y"></i><br/>
                    <small>Marine</small>
                </a>

                <a href="{{URL::to('people-profile-all')}}" class="app btn btn-default">
                    <i class="fa fa-users text-success fa-2x fa-3y"></i><br/>
                    <small>Profile</small>
                </a>

                <a href="{{URL::to('bank-list')}}" class="app btn btn-default">
                    <i class="fa fa-lock text-success fa-2x fa-3y"></i><br/>
                    <small>Bank</small>
                </a>
            </div>
        </div>
    </div>
    <!--end col-md-12-->

    <!--start detailsInfo -->
    <div id="addInfo" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!--start Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-success text-center">Select Your Information</h4>
                </div>
                <div class="modal-body" style="overflow: hidden">
                    <div class="col-md-12">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="btn-group m-b-20" role="group" aria-label="...">

                                <a href="{{ url('loan-sme') }}" class="b-r-s width-130 m-t-5 btn btn-success" style="margin-left: 5px">
                                    <i class="fa fa-plus fa-2x fa-3y"><br/><small class="f-s-18">Loan</small></i>
                                </a>

                                <a href="{{ url('loan-sme') }}" class="b-r-s width-130 m-t-5 btn btn-success" style="margin-left: 5px">
                                    <i class="fa fa-plus fa-2x fa-3y"><br/><small class="f-s-18">Investment</small></i>
                                </a>

                                <a href="{{ url('loan-sme') }}" class="b-r-s width-130 m-t-5 btn btn-success" style="margin-left: 5px">
                                    <i class="fa fa-plus fa-2x fa-3y"><br/><small class="f-s-18">Insurance</small></i>
                                </a>

                                <a href="{{ url('loan-sme') }}" class="b-r-s width-130 m-t-5 btn btn-success" style="margin-left: 5px">
                                    <i class="fa fa-plus fa-2x fa-3y"><br/><small class="f-s-18">Card</small></i>
                                </a>

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
    <!--end detailsInfo -->

</div>
<!--end container-fluid-->
@endsection