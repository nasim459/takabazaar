@extends('ap_master')
@section('maincontent')
<!--start container-fluid-->
<div class="container-fluid content-change no-border">

    <!--start col-md-12-->
    <div class="col-md-12 text-center text-success m-b-20"><h3>
            <i class="fa fa-plus"></i> Registration Panel</h3>
    </div>
    <!--end col-md-12-->

    <!--start col-md-12-->
    <div class="col-sm-12 col-md-12">
        <div class="col-md-10 col-md-offset-1">
            <!--start login panel-->
            <div class="panel panel-default">
                <!--<div class="panel-heading">
                    <h3 class="panel-title text-primary text-center">Login Panel</h3>
                </div>-->
                <div class="panel-body" style="//padding-left: 10px; //padding-right: 10px;">

                    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                        <form class="form-horizontal">
                            <div class="form-group m-t-30">
                                <div class="col-sm-6">
                                    <a href="{{ url('patient-regi') }}" class="btn btn-success btn-lg col-sm-12 m-t-5">Patient</a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{URL::to('dboard')}}" class="btn btn-success btn-lg col-sm-12 m-t-5">Sign in</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <a href="{{URL::to('dboard')}}" class="btn btn-success btn-lg col-sm-12 m-t-5">Sign in</a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{URL::to('dboard')}}" class="btn btn-success btn-lg col-sm-12 m-t-5">Sign in</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1"><hr></div>
                        
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                        <form class="form-horizontal m-b-30">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <a href="{{ url('patient-regi') }}" class="btn btn-success btn-lg col-sm-12 m-t-5">Patient</a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{URL::to('dboard')}}" class="btn btn-success btn-lg col-sm-12 m-t-5">Sign in</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <!--end login panel-->
        </div>
    </div>
    <!--end col-md-12-->

</div>
<!--end container-fluid-->
@endsection