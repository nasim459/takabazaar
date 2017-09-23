<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>

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
                        <div class="row">
                            <div class="col-md-12">
                                @if(Session::has('message_error'))
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <h4><i class="icon fa fa-check"></i> Alert!</h4>
                                        <span id="alert-message-error">{{ Session::get('message_error') }}</span>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="panel-body">
                            <form action="{{route('postSignIn')}}" method="POST" class="form-horizontal m-b-30">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label"></label>
                                    <div class="col-xs-12 text-center m-t-20  m-b-20">
                                    	<i class="fa text-success" style="font-size: 23px"> Taka Bazaar Software</i>
                                    </div>
                                </div>

                                <div class="form-group m-t-30{{ $errors->has('email') ? ' has-error' : '' }}">
                                    {{csrf_field()}}
                                    <label for="inputEmail3" class="col-sm-3 control-label">User Name</label>
                                    <div class="col-sm-7">
                                        <input type="email" name="email" value="{{old('email')}}" class="form-control" id="inputEmail3" placeholder="Email">
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                                    <div class="col-sm-7">
                                        <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-7">
                                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                                    </div>
                                </div>
                            </form>
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