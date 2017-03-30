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
    <!--MAIN BODY START-->
    
        <!-- Content Here -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dashHome1">
            <div class="col-lg-3 col-lg-offset-1">
                <img src="img/waver_cropped.png" class="img-responsive">
            </div>
            <div class="col-lg-6">
                <h1>All your analytics, all in one place..</h1>
                <p>
                    Use this dashboard to link up all your Socail Media Accounts to see...
                </p> 
                <ul>
                    <li>What effect you online content is making on your audience</li>
                    <li>Where is your target market</li>
                    <li>Where/what age is your demographic</li>
                    <li>And much more...</li>
                </ul>
            </div>
        </div>
        <!--MAIN BODY END-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/javascript.js"></script>
</body>

</html>