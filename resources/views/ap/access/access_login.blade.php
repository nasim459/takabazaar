<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>
      <link rel="shortcut icon" href="{{ asset('fe/img/logo.ico') }}" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="ap/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- App -->
    <link href="ap/app/app.css" rel="stylesheet">
    <!-- Plugins font-awesome -->
    <link href="ap/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  </head>
  <body>
  <!--start container-fluid-->
  <div class="container-fluid main-content">

  	<!--start row-1-->
  	<div class="row" style="margin: 0 auto; margin-top: 100px">
            
            <div class="col-md-12">
                <div class="col-md-6 col-md-offset-3">
                    
                    <!--start login panel-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title text-primary text-center">Login Panel</h3>
                        </div>
                        <div class="panel-body">
                            {!! Form::open(array('url'=>'login', 'role'=>'form', 'method'=>'POST')) !!}
                            <div class="form-horizontal m-b-30">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label"></label>
                                    <div class="col-xs-12 col-sm-6 m-t-10">
                                        <a href=""><img src="{{ asset('fe/img/logo.ico') }}" style="width: 150px; margin-left: 25px;" alt="Dizzy Bangla" title="FinFoBD"></a>
                                    </div>
                                </div>

                                <div class="form-group m-t-30">
                                    <label for="inputEmail3" class="col-sm-3 control-label">User Name</label>
                                    <div class="col-sm-7">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                                    <div class="col-sm-7">
                                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-7">
                                        <a href="{{URL::to('dboard')}}" class="btn btn-primary col-sm-12">Sign in</a>
                                    </div>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <!--end login panel-->
                    
                </div>
            </div>
            
  	</div>
  	<!--end row-1-->
  	
  </div>
  <!--end container-fluid-->
  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="ap/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>