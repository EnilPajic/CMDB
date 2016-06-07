<!DOCTYPE html>
<html lang="en" ng-app="App" >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('favicon.ico') }}">


    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet"> -->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- <script src="js/ie-emulation-modes-warning.js"></script> ->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->




  </head>



<body>

<div class="container marketing">
    <div class="row">
      <hr class="featurette-divider">
        <div class="col-md-12">
                    <form  method="POST" action="/password/email">
                            {!! csrf_field() !!}

                            @if (count($errors) > 0)
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif

                            <div>
                                <p class="col-lg-2 text-info" >Email</p>
                                <input type="email" name="email" class="col-lg-10" value="{{ old('email') }}">
                            </div>

                            <div>
                                <button type="submit" class="btn btn-success col-lg-12">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </form>
             <hr class="featurette-divider">
        </div>



    </div>
</div>


 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="{{ asset('js/holder.min.js') }}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    {{--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>--}}
    <!--Angular JS and Angular Translate-->
      <script src="{{ asset('js/angular.min.js') }}"></script>
      <script src="{{ asset('js/angular-route.min.js') }}"></script>
      <script src="{{ asset('js/ui-bootstrap-custom-tpls-1.3.3.js') }}"></script>
      <script src="{{ asset('js/angular-translate.min.js') }}"></script>
      <script src="{{ asset('js/app.js') }}"></script>



</body>



</html>













