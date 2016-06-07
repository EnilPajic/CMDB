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

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">


  </head>
<!-- NAVBAR
================================================== -->
  <body>
                      <div id="RegistrujSe" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">

                          <div class="modal-dialog modal-sm">
                              <div class="modal-content" id="MsgCnt">
                                  ...
                              </div>
                          </div>
                      </div>
      <nav class="navbar navbar-inverse navbar-fixed-top" ng-controller="translateCtr">
              <div class="container">

                <div class="navbar-header">


                  <!-- Dodao CMDB logo-->
                  <img style="max-width:50px; margin-top: 0px;"
                                     src="{{ asset('css/background/logo.jpg') }}">
                </div>

                <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="about" translate="ABOUT">About</a></li>


                  </ul>
                  <ul class="nav navbar-nav navbar-right">

                    <form onsubmit="return false;" id="register_form" class="navbar-form navbar-right" method="post" action="/login" ng-controller="loginCTRL">

                      <div class="form-group">
                        <input type="text" name="email" id="main_form_email" placeholder="Email" class="form-control">
                      </div>
                      <div class="form-group">
                        <input type="password" name="password" id="main_form_pass" placeholder="Password" class="form-control">
                      </div>
                      <button type="submit" class="btn btn-success" ng-click="LogujSe();">Sign in</button>
                      <button id="register" onclick="location.href='/auth/register'" class="btn btn-info">Regiser</button>
                      <button id="register" onclick="location.href='/password/email'" class="btn btn-warning">Reset</button>
                        <!--Translate buttons-->

                        <button class="btn" ng-click="changeLanguage('bs-Latn-BA')">BA</button>
                        <button class="btn" ng-click="changeLanguage('en-US')" >ENG</button>

                    </form>


                  </ul>
                </div><!--/.nav-collapse -->
              </div>
            </nav>



    <div ng-view=""></div>
    <div id="Kontejner_wrappera">
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="{{ asset('css/background/Posteri/transformers.jpg') }}" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
             <!-- <h1>Example headline.</h1>
              <!--<p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p> -->
              <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>-->
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="{{ asset('css/background/Posteri/avengers.jpg') }}" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">

            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="{{ asset('css/background/Posteri/hobbit.jpg') }}" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">

            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->


<div class="container marketing" >

      <!-- START THE FEATURETTES -->
       <div class="row featurette" >
             <div class="col-md-12">
                 <h1 class="featurette-heading">What is an CMDB?</h1>
                  <p class="lead">CMDb is the world's largest collection of movie, TV, and celebrity info. We aim to list every detail about every movie and TV show ever made, including who was in it, who made it, the plot, user ratings, trailers, photos, reviews, quotes, goofs, trivia and much more.</p>
                  <hr class="featurette-divider">
                  <h1 class="featurette-heading">How much is an CMDB Pro account?</h1>
                  <p class="lead">
                      CMDbPro subscriptions will increase to $149.99 per year or $19.99 per month, up from the previous pricing of $124.95 per year or $15.95 per month. Customers will be billed the new price starting on April 10, 2014, a rep said.</p>
                <hr class="featurette-divider">
                </div>
        </div>


      <!-- /END THE FEATURETTES -->



      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="about" translate="NA_VRH">Back to top</a></p>
        <p>&copy; 2015 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->
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
