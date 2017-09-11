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
                <a href="{{ url('bank'.'/'.'list') }}" class="app btn btn-default">
                    <i class="fa fa-bank text-success fa-2x fa-3y"></i><br/>
                    <small>Bank</small>
                </a>

                <a href="{{ url('form'.'/'.'investment') }}" class="app btn btn-default">
                    <i class="fa fa-plus text-success fa-2x fa-3y"></i><br/>
                    <small>Investment</small>
                </a>

                <a href="{{ url('form'.'/'.'insurance') }}" class="app btn btn-default">
                    <i class="fa fa-plus text-success fa-2x fa-3y"></i><br/>
                    <small>Insurance</small>
                </a>

                <a href="{{ url('/') }}" target="_blank" class="app btn btn-default" title="Go To Your Website">
                    <i class="fa fa-sitemap text-success fa-2x fa-3y"></i><br/>
                    <small>View Website</small>
                </a>
            </div>
        </div>

        <div class="col-md-8 col-md-offset-2">
            <div class="btn-group m-b-20" role="group" aria-label="...">

                <a href="{{ url('card'.'/'.'debit') }}" class="app btn btn-default">
                    <i class="fa fa-credit-card text-success fa-2x fa-3y"></i><br/>
                    <small>Card</small>
                </a>

                <a class="app btn btn-default" data-toggle="modal" data-target="#addInfo">
                    <i class="fa fa-info-circle text-success fa-2x fa-3y"></i><br/>
                    <small>All Information</small>
                </a>

                <a href="{{ url('form'.'/'.'blog') }}" class="app btn btn-default">
                    <i class="fa fa-plus text-success fa-2x fa-3y"></i><br/>
                    <small>Blog</small>
                </a>

                <a class="app btn btn-default" data-toggle="modal" data-target="#aboutTeam">
                    <i class="fa fa-plus text-success fa-2x fa-3y"></i><br/>
                    <small>Team Member</small>
                </a>

            </div>
        </div>

        <div class="col-md-8 col-md-offset-2">
            <div class="btn-group m-b-20" role="group" aria-label="...">
                <a href="{{ url('advertise') }}" class="app btn btn-default">
                    <i class="fa fa-book text-success fa-2x fa-3y"></i><br/>
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

                <a href="{{ url('info'.'/'.'team-member') }}" class="app btn btn-default">
                    <i class="fa fa-users text-success fa-2x fa-3y"></i><br/>
                    <small>Team Member</small>
                </a>
            </div>
        </div>

        <div class="col-md-8 col-md-offset-2">
            <div class="btn-group m-b-20" role="group" aria-label="...">
                <a href="{{ url('apply'.'/'.'info') }}" class="app btn btn-default">
                    <i class="fa fa-book text-success fa-2x fa-3y"></i><br/>
                    <small>Applying</small>
                </a>

                <a href="{{ url('cardcategory'.'/'.'list') }}" class="app btn btn-default">
                    <i class="fa fa-creative-commons text-success fa-2x fa-3y"></i><br/>
                    <small>Card Category</small>
                </a>

                <a href="{{ url('form'.'/'.'bank') }}" class="app btn btn-default">
                    <i class="fa fa-plus text-success fa-2x fa-3y"></i><br/>
                    <small>Card Category</small>
                </a>

                <a href="{{ url('bank'.'/'.'list') }}" class="app btn btn-default">
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

                                <a href="{{ url('form'.'/'.'loan') }}" class="b-r-s width-130 m-t-5 btn btn-success" style="margin-left: 5px">
                                    <i class="fa fa-plus fa-2x fa-3y"><br/><small class="f-s-18">Loan</small></i>
                                </a>

                                <a href="{{ url('form'.'/'.'investment') }}" class="b-r-s width-130 m-t-5 btn btn-success" style="margin-left: 5px">
                                    <i class="fa fa-plus fa-2x fa-3y"><br/><small class="f-s-18">Investment</small></i>
                                </a>

                                <a href="{{ url('form'.'/'.'insurance') }}" class="b-r-s width-130 m-t-5 btn btn-success" style="margin-left: 5px">
                                    <i class="fa fa-plus fa-2x fa-3y"><br/><small class="f-s-18">Insurance</small></i>
                                </a>

                                <a href="{{ url('form'.'/'.'card') }}" class="b-r-s width-130 m-t-5 btn btn-success" style="margin-left: 5px">
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

    <!--start about_add_team_member -->
    <div id="aboutTeam" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!--start Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-success text-center">Assign Your Team Member</h4>
                </div>
                <div class="modal-body" style="overflow: hidden">
                    <div class="col-md-12">
                        <div class="col-md-12 f-s-14 f-f-s">

                            {!! Form::open(array('url'=>'form-info', 'role'=>'form', 'method'=>'POST', 'files'=>'true')) !!}
                            <div class="form-horizontal m-t-10">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                {{--<input type="hidden" name="insert_save" value="insert_save">--}}

                                <div class="form-group">
                                    <label class="col-sm-4" style="text-align: right;" for="usr">Full Name:</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="name" class="form-control" id="usr" placeholder="Write full name..." required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4" style="text-align: right;" for="usr">Designation :</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="designation" class="form-control" id="usr" placeholder="Write category name..." required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4" style="text-align: right;" for="usr">Facebook Link :</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="fb_link" class="form-control" id="usr" placeholder="Facebook  profile link..." required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4" style="text-align: right;" for="usr">Google Link :</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="google_link" class="form-control" id="usr" placeholder="Google profile link..." required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4" style="text-align: right;" for="usr">Twitter Link :</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="twitter_link" class="form-control" id="usr" placeholder="Twitter profile link..." required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4" style="text-align: right;" for="usr">Picture :</label>
                                    <div class="col-sm-6">
                                        <input type="file" class="m-t-5" name="image">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4" for="usr"></label>
                                    <div class="col-sm-6 m-t-15">
                                        <button type="submit" class="btn btn-success col-sm-12">Save</button>
                                    </div>
                                </div>

                            </div>
                            {!! Form::close() !!}
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

</div>
<!--end container-fluid-->
@endsection