<!--start container-fluid-->
<div class="container-fluid content-change no-border">

    <!--start col-md-12-->
    <div class="col-md-12">
        <!--start Home button-->
    <!--<div class="col-md-1 no-border m-t-mi-6">
            <a href="{{URL::to('dboard')}}" class="btn btn-default btn-xs m-t-10 text-success-light" title="Go Home"><i class="fa fa-home"></i></a>
        </div>-->
        <!--end Home button-->

        <!--start Single button-->
        <div class="col-md-12 text-center m-t-mi-6">
            <a href="{{ url('info'.'/'.'team-member') }}" class="app-menu btn btn-default text-success-light">Team Member</a>
            <a data-toggle="modal" data-target="#aboutTeam" class="app-menu btn btn-default text-success-light">Add Member</a>
            <a href="{{ url('info'.'/'.'contact-us') }}" class="app-menu btn btn-default text-success-light">Contact Us</a>
        </div>
        <!--end Single button-->
    </div>
    <!--end col-md-12-->

</div>
<!--end container-fluid-->