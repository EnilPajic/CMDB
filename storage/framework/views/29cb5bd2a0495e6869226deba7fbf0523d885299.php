<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../public/../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../public/css/signinImage.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../../public/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../../public/css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../../public/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../../public/js/ie-emulation-modes-warning.js"></script>

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

          <form class="form-horizontal" action="/public/auth/register" method="POST">
            <?php echo csrf_field(); ?>

            <fieldset>
              <div id="legend">
                <legend class="text-info">Register</legend>
              </div>
              <div class="control-group">
                <label class="text-info" for="name">Username</label>
                <div class="controls">
                  <input type="text" id="name" value="<?php echo e(old('name')); ?>" name="name" placeholder="" class="form-control input-lg">
                  <p class="help-block">Username can contain any letters or numbers, without spaces</p>
                </div>
              </div>

              <div class="control-group">
                <label class="text-info" for="email">E-mail</label>
                <div class="controls">
                  <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="" class="form-control input-lg">
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
                  <input type="password" id="password_confirmation" name="password_confirm" placeholder="" class="form-control input-lg">
                  <p class="help-block">Please confirm password</p>
                </div>
              </div>

              <div class="control-group">
                <!-- Button -->
                <div class="controls">
                  <button class="btn btn-success" type="submit">Register</button>
                </div>
              </div>
            </fieldset>
          </form>

        </div>
      </div>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../../public/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
