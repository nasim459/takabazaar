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
            <a href="{{ url('blog-posting') }}" class="app-menu btn btn-default text-success-light">Posting</a>
            <a href="{{ url('blog-subscribers') }}" class="app-menu btn btn-default text-success-light">Subscribers</a>
            <a href="{{ url('blog-settings') }}" class="app-menu btn btn-default text-success-light">Settings</a>
        </div>
        <!--end Single button-->
    </div>
    <!--end col-md-12-->

</div>
<!--end container-fluid-->