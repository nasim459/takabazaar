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
            <a href="{{ url('insurance'.'/'.'life') }}" class="app-menu btn btn-default text-success-light">Life</a>
            <a href="{{ url('insurance'.'/'.'motor-car') }}" class="app-menu btn btn-default text-success-light">Motor Car</a>
            <a href="{{ url('insurance'.'/'.'motor-bike') }}" class="app-menu btn btn-default text-success-light">Motor Bike</a>
            <a href="{{ url('insurance'.'/'.'marine') }}" class="app-menu btn btn-default text-success-light">Marine</a>
            <a href="{{ url('insurance'.'/'.'fire') }}" class="app-menu btn btn-default text-success-light">Fire</a>
            <a href="{{ url('insurance'.'/'.'accident') }}" class="app-menu btn btn-default text-success-light">Accident</a>
            <a href="{{ url('insurance'.'/'.'health') }}" class="app-menu btn btn-default text-success-light">Health</a>
        </div>
        <!--end Single button-->
    </div>
    <!--end col-md-12-->

</div>
<!--end container-fluid-->