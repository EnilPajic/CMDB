<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Signin Template for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/signinImage.css') }}" rel="stylesheet">
        <link href="{{ asset('css/signin.css') }}" rel="stylesheet">
        {{--<link href="/public/css/bootstrap.min.css" rel="stylesheet">--}}
        {{--<link href="/public/css" rel="stylesheet">--}}

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/signin.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
      </head>

      <body>

        <div class="container">

          <div class="row">
            <div class="col-md-6">

              <form class="form-horizontal" action="register" method="POST">
                <fieldset>
                  <div id="legend">
                    <legend class="text-info" >Register</legend>
                  </div>
                  <div class="control-group">
                    <label class="text-info" for="name">Username</label>
                    <div class="controls">
                      <input type="text" id="name" name="name" placeholder="" class="form-control input-lg">
                      <p class="help-block">Username can contain any letters or numbers, without spaces</p>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="text-info" for="email">E-mail</label>
                    <div class="controls">
                      <input type="email" id="email" name="email" placeholder="" class="form-control input-lg">
                      <p class="help-block">Please provide your E-mail</p>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="text-info" for="password">Password</label>
                    <div class="controls">
                      <input type="password" id="password" name="password" placeholder="" class="form-control input-lg">
                      <p class="help-block">Password should be at least 6 characters</p>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="text-info" for="password_confirmation">Password (Confirm)</label>
                    <div class="controls">
                      <input type="password" id="password_confirmation" name="password_confirmation" placeholder="" class="form-control input-lg">
                      <p class="help-block">Please confirm password</p>
                    </div>
                  </div>

                  <div class="control-group">
                    <!-- Button -->
                    <div class="controls">
                      <button class="btn btn-success">Register</button>
                    </div>
                  </div>
                </fieldset>
              </form>

            </div>
          </div>

        </div> <!-- /container -->


        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="js/ie10-viewport-bug-workaround.js"></script>
      </body>
    </html>
