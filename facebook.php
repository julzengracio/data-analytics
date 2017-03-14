<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- font awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <title>Waver</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <!-- load php scripts from utils folder -->
    <?php require 'utils/scripts.php'; ?>
</head>

<body class="dashboard_body">
    <!-- Javascript SDK for Facebook Developer App -->
    <div id="fb-root"></div>
    <script>
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: '1357198360959969'
                , xfbml: true
                , version: 'v2.8'
            });
            FB.AppEvents.logPageView();
        };
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!--TOP NAVBAR START-->
    <nav class="navbar topNav">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="#">Waver</a> </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse header" id="bs-example-navbar-collapse-1">
                <!--
              <ul class="nav navbar-nav navbar-right">
                <?php require 'utils/toolbar_dashboard.php'; ?>
              </ul>
-->
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!--TOP NAVBAR END-->
    <!--SIDEBAR START-->
    <nav class="navbar navbar-inverse sidebar" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                <ul class="nav navbar-nav ">
                    <li>
                        <div class="col-lg-12 profileSum no_padding">
                            <div class="col-lg-4 no_padding"> <img src="http://www.wheretotonight.com/melbourne/images/empty_profile.png" class="img-responsive img-circle"> </div>
                            <div class="col-lg-8 no_padding">
                                <h1>Welcome,</h1>
                                <p>Irish National Sailing & Powerboat School</p>
                            </div>
                        </div>
                    </li>
                    <li><a href="dashboard.php">Dashboard Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity"><i class="fa fa-tachometer" aria-hidden="true"></i></span></a></li>
                    <li class="active"><a href="facebook.php">Facebook<span style="font-size:16px;" class="pull-right hidden-xs showopacity"><i class="fa fa-facebook-official" aria-hidden="true"></i></span></a></li>
                    <li><a href="youtube.php">YouTube<span style="font-size:16px;" class="pull-right hidden-xs showopacity"><i class="fa fa-youtube-play" aria-hidden="true"></i></span></a></li>
                </ul>
                <ul class="nav navbar-nav navFunctions">
                    <?php require 'utils/toolbar_dashboard.php'; ?>
                </ul>
            </div>
        </div>
    </nav>
    <!--SIDEBAR END-->  
    <!--MAIN BODY START-->    
    <div class="main container-fluid">
        <!-- Content Here -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="col-lg-5 fbLoginBox">
                <div class="col-lg-12">
                    <h1>Click the button below to link your Facebook Page</h1>
                    <div class="col-lg-6">
                        <p>If you are an admin of a Facebook page and have it linked to your personal profile, use the button below to generate social analytics for that page</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="fb-login-button" onlogin="displayFB()" scope="manage_pages" data-max-rows="1" data-size="large" data-show-faces="false" data-auto-logout-link="true"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="analytics">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sumFb">
                <div class="pageFans col-lg-2">
                    <p>Page Fans Today:</p>
                <div id="pageFansB" class="sumResult"></div>
                </div>
                <div class="pageFansBefore col-lg-2">
                    <p>Page Fans Yesterday:</p>
                    <div id="pageFansA" class="sumResult"></div>
                </div>
                <div class="pageViews col-lg-2">
                    <p>Page Views(Week):</p>
                    <div id="pageViews" class="sumResult"></div>
                </div>
                <div class="pageViews col-lg-2">
                    <p>Page Impressions(Week):</p>
                    <div id="pageImpressions" class="sumResult"></div>
                </div>
                <div class="pageViews col-lg-2">
                    <p>Page Video Views(Week):</p>
                    <div id="pageVideoViews" class="sumResult"></div>
                </div>
                <div class="pageViews col-lg-2">
                    <p>Page Views(Week):</p>
                    <div id="pageViews" class="sumResult"></div>
                </div>
            </div>
            <!--Start of graph items-->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="geoGraph col-lg-6 fbGraphItem">
                    <h1>Geographic Views of Fans:</h1>
                    <div id="geograph"></div>
                </div>
                <div class="demoGraph col-lg-6 fbGraphItem"> 
                    <h1>Demographic Views of Fans:</h1>                
                    <div id="demograph"></div>
                </div>
            </div>
        </div>
    </div>
    <!--MAIN BODY END-->    
    <main id="page-content-wrapper" role="main">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> </div>
    </main>
    </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/javascript.js"></script>
</body>

</html>