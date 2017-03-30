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
    
   

<!-- content here -->
    
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="col-lg-5 fbLoginBox">
                <div class="col-lg-12">
                    <h1>Click the button below to link your YouTube Channel</h1>
                    <div class="col-lg-6">
                        <p>Use the button below to generate social analytics for your channel</p>
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

    <main id="page-content-wrapper" role="main">
    </main>
    </div>
        
<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
<script src="https://apis.google.com/js/client.js?onload=googleApiClientReady"></script>
</body>
</html>