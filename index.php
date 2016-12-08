<html>
    <head>
        <title>Home</title>
        <?php require 'utils/scripts.php'; ?>
    </head>
    <body>
        <!--Facebook button SDK-->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=1357198360959969";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        
        <div>
            <h1>3rd Year Project</h1>
        </div>
        <div class="header">
            <?php require 'utils/toolbar.php'; ?>
        </div>
    </body>
</html>