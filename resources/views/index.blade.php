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

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Dodao CMDB logo-->
            <a class="navbar-brand" rel="home" href="#" translate="HOME" title="Cloud Movie Database">
              <img style="max-width:50px; margin-top: -15px;"
                   src="{{ asset('css/background/Logo.jpg') }}">
            </a>
            <a class="navbar-brand" href="#">CMDB</a>
          </div>

          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about" translate="ABOUT">About</a></li>
              <li><a href="#contact" translate="CONTACT">Contact</a></li>

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
                  <!--Translate buttons-->
                  <span translate="TITLE">test</span>
                  <button class="btn" ng-click="changeLanguage('bs-Latn-BA')">BA</button>
                  <button class="btn" ng-click="changeLanguage('en-US')" >ENG</button>

              </form>


            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>


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
          <img class="second-slide" src="{{ asset('css/background/Posteri/transformers.jpg') }}" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="{{ asset('css/background/Posteri/hobbit.jpg') }}" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
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

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row" id="mijenjanje">

        <div class="col-lg-4">
              <img class="img-circle" src="{{ asset('css/background/Posteri/transformerslogo.jpg') }}" alt="Generic placeholder image" width="140" height="140">
          <h2 >Transformers</h2>
          <p translate="VIEW_MORE1">An ancient struggle between two Cybertronian races, the heroic Autobots and the evil Decepticons, comes to Earth, with a clue to the ultimate power held by a teenager.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="{{ asset('css/background/Posteri/avengerslogo.jpg') }}" alt="Generic placeholder image" width="140" height="140">
          <h2>Avengers</h2>
          <p translate="VIEW_MORE2">Earth's mightiest heroes must come together and learn to fight as a team if they are to stop the mischievous Loki and his alien army from enslaving humanity..</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="{{ asset('css/background/Posteri/Spiderman.jpg') }}" alt="Generic placeholder image" width="140" height="140">
          <h2>Spiderman</h2>
          <p translate="VIEW_MORE3">When bitten by a genetically modified spider, a nerdy, shy, and awkward high school student gains spider-like abilities that he eventually must use to fight evil as a superhero after tragedy befalls his family.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading" translate="FEATURETE_HEADER1">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead" translate="FEATURETE_CONTENT1">The fictional character Batman, a comic book superhero featured in DC Comics publications and created by Bob Kane and Bill Finger, has appeared in various films since his inception. </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="{{ asset('css/background/Posteri/Batman.jpg') }}" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading" translate="FEATURETE_HEADER2">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead" translate="FEATURETE_CONTENT2">Transformers is a 2007 American science fiction action film based on the Transformers toy line. The film, which combines computer animation with live-action, is directed by Michael Bay, with Steven Spielberg serving as executive producer.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="{{ asset('css/background/Posteri/transformers.jpg') }}" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading" translate="FEATURETE_HEADER3">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead" translate="FEATURETE_CONTENT3">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="{{ asset('css/background/Posteri/LifeOfPi.jpg') }}" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->



      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#" translate="NA_VRH">Back to top</a></p>
        <p>&copy; 2015 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <!--Angular JS and Angular Translate-->
      <script src="{{ asset('js/angular.min.js') }}"></script>
      <script src="{{ asset('js/ui-bootstrap-custom-tpls-1.3.3.js') }}"></script>


      <script src="{{ asset('js/angular-translate.min.js') }}"></script>
      <script src="{{ asset('js/app.js') }}"></script>



  </body>
</html>
