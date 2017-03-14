<html>
    <head>
        <title>Waver: Youtube</title>        
        <meta name="google-signin-client_id" content="253617064312-g44bqh9e0ic3e987qsmcctu32apa75nh.apps.googleusercontent.com">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- font awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <!--Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <?php require 'utils/scripts.php'; ?>
<!--        <script type="text/javascript" src="https://apis.google.com/js/client.js?onload=onJSClientLoad"></script>-->
        
    </head>
<body class="dashboard_body">
        <script>
            function renderButton() {
                gapi.signin2.render('mySignin2', {
                    'scope': 'profile email https://www.googleapis.com/auth/yt-analytics.readonly https://www.googleapis.com/auth/youtube.readonly',
                    'width': 200,
                    'height': 40,
                    'theme': 'light',
                    'onsuccess': displayYT,
                    'onfailure': onFailure
                });
            }
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
                    <li><a href="facebook.php">Facebook<span style="font-size:16px;" class="pull-right hidden-xs showopacity"><i class="fa fa-facebook-official" aria-hidden="true"></i></span></a></li>
                    <li class="active"><a href="youtube.php">YouTube<span style="font-size:16px;" class="pull-right hidden-xs showopacity"><i class="fa fa-youtube-play" aria-hidden="true"></i></span></a></li>
                </ul>
                <ul class="nav navbar-nav navFunctions">
                    <?php require 'utils/toolbar_dashboard.php'; ?>
                </ul>
            </div>
        </div>
    </nav>
    <!--SIDEBAR END--> 
    
<div class="main container-fluid">
<!-- content here -->
    
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="col-lg-5 fbLoginBox">
                <div class="col-lg-12">
                    <h1>Click the button below to link your Facebook Page</h1>
                    <div class="col-lg-6">
                        <p>If you are an admin of a Facebook page and have it linked to your personal profile, use the button below to generate social analytics for that page</p>
                    </div>
                    <div class="col-lg-6">
                        <div id="mySignin2"></div>
                    </div>
                </div>
            </div>
        </div>
    
    
        <div id = "analytics">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sumYT">
            <!-- Video lists and Analytics -->
            <div id="message"></div>
            <h1>Videos on channel</h1>
            <p>Click on a video to view analytics</p>
            <ul id="video-list" class="video-list"></ul>
            <div id="chartsTitle">Analytics Report from January 1st 2014 - Present Date</div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sumFb">
            <div class="pageFans col-lg-2">
                <p>Video Total Views:</p>
                <div id="totalViews" class="sumResult"></div>
            </div>
            <div class="pageFansBefore col-lg-2">
                <p>Likes:</p>
                <div id="likes" class="sumResult"></div>
            </div>
            <div class="pageViews col-lg-2">
                <p>Dislikes:</p>
                <div id="dislikes" class="sumResult"></div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="geoGraph col-lg-6 fbGraphItem">
                <h1>Geographic Viewers:</h1>
                <div id="geoGraphicView"></div>
            </div>
            
            <div class="ageGroup col-lg-6 fbGraphItem">
                <h1>Demographic Viewers:</h1>
                <div id="demographics"></div>
            </div>
        </div>
    </div>
</div>
    <main id="page-content-wrapper" role="main">
    </main>
    </div>
        
<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
<script src="https://apis.google.com/js/client.js?onload=googleApiClientReady"></script>
</body>
</html>