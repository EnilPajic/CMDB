{{--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    --}}{{--<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">--}}{{--

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--Angular JS and Angular Translate-->
          <script src="{{ asset('js/angular.min.js') }}"></script>
          <script src="{{ asset('js/ui-bootstrap-custom-tpls-1.3.3.js') }}"></script>


          <script src="{{ asset('js/angular-translate.min.js') }}"></script>
          <script src="{{ asset('js/app.js') }}"></script>

    <!-- Custom styles for this template -->

        --}}{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>--}}{{--
        --}}{{--<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>--}}{{--
        --}}{{--<script src="../../dist/js/bootstrap.min.js"></script>--}}{{--
        --}}{{--<!-- Just to make our placeholder images work. Don't actually copy the next line! -->--}}{{--
        --}}{{--<script src="../../assets/js/vendor/holder.min.js"></script>--}}{{--
        --}}{{--<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->--}}{{--
        --}}{{--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>--}}{{--
        --}}{{--<!--Angular JS and Angular Translate-->--}}{{--
          --}}{{--<script src="{{ asset('js/angular.min.js') }}"></script>--}}{{--
          --}}{{--<script src="{{ asset('js/angular-translate.min.js') }}"></script>--}}{{--
          --}}{{--<script src="{{ asset('js/angular-route.min.js') }}"></script>--}}{{--
          --}}{{--<script src="{{ asset('js/app.js') }}"></script>--}}{{--

</head>
<!-- NAVBAR
================================================== -->
<body>--}}
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">

        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Dodao CMDB logo-->
            <a class="navbar-brand" rel="home" href="#" title="Cloud Movie Database">
                <img style="max-width:50px; margin-top: -15px;"
                     src=".{{ asset('css/background/Logo.jpg') }}css/background/Logo.jpg">
            </a>
            <a class="navbar-brand" href="#">CMDB</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">

                <form class="navbar-form navbar-right">
                    <span class="label label-info">Welcome</span>
                    <input type="text" class="form-control" placeholder="Search...">
                    <button class="btn btn-warning" onclick="location.href='/'">Logout</button>

                </form>


            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>





<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->




<!-- START THE FEATURETTES -->

<hr class="featurette-divider">


<div ng-controller="filmoviCtrl">

    <div ng-film-tabela></div>

</div>




{{--<div class="row featurette">--}}

    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-xs-12 col-sm-6 col-md-6">--}}
                {{--<div class="well well-sm">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-sm-6 col-md-4">--}}
                            {{--<img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" />--}}
                        {{--</div>--}}
                        {{--<div class="col-sm-6 col-md-8">--}}
                            {{--<h4>--}}
                                {{--Bhaumik Patel</h4>--}}
                            {{--<small><cite title="San Francisco, USA">San Francisco, USA <i class="glyphicon glyphicon-map-marker">--}}
                            {{--</i></cite></small>--}}
                            {{--<p>--}}
                                {{--<i class="glyphicon glyphicon-envelope"></i>email@example.com--}}
                                {{--<br />--}}
                                {{--<i class="glyphicon glyphicon-globe"></i><a href="http://www.jquery2dotnet.com">www.jquery2dotnet.com</a>--}}
                                {{--<br />--}}
                                {{--<i class="glyphicon glyphicon-gift"></i>June 02, 1988</p>--}}
                            {{--<!-- Split button -->--}}
                            {{--<div class="btn-group">--}}
                                {{--<button type="button" class="btn btn-primary">--}}
                                    {{--Social</button>--}}
                                {{--<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">--}}
                                    {{--<span class="caret"></span><span class="sr-only">Social</span>--}}
                                {{--</button>--}}
                                {{--<ul class="dropdown-menu" role="menu">--}}
                                    {{--<li><a href="#">Twitter</a></li>--}}
                                    {{--<li><a href="https://plus.google.com/+Jquery2dotnet/posts">Google +</a></li>--}}
                                    {{--<li><a href="https://www.facebook.com/jquery2dotnet">Facebook</a></li>--}}
                                    {{--<li class="divider"></li>--}}
                                    {{--<li><a href="#">Github</a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

    {{--</div>--}}
{{--</div>--}}

<hr class="featurette-divider">



{{--<script src="{{ asset('js/angular.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/ui-bootstrap-custom-tpls-1.3.3.js') }}"></script>--}}


{{--<script src="{{ asset('js/angular-translate.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/app.js') }}"></script>--}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="{{ asset('js/holder.min.js') }}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    {{--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>--}}


{{--</body>
</html>--}}
