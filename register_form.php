<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Waver</title>
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- font awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <!--Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    
        <?php require 'utils/scripts.php'; ?>
      
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
  </head>
  <body>
    <div class="nav_bg"></div>
    <div class="container">

        <nav class="navbar">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Waver</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse header" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <?php require 'utils/toolbar.php'; ?>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        <div class="row row1">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pageHeader">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <h1>Register</h1>
                    <p>Create one central account which then links all your social media together</p>
                    <form class="form-inline" action="register.php" method="POST">
                        <!--Login form-->
                        <!--username-->
                        <div class="form-group">
                            <input type="text" 
                                   name="username"
                                   id="username"
                                   placeholder="Username" 
                                   class="form-control" 
                                   align="left" 
                                   value="<?php if (isset($username)) echo $username; ?>"/>
                        </div>
                            <!--error message for invalid input-->
                            <span class="error">
                                <?php if (isset($errors['username'])) echo $errors['username']; ?>
                            </span>
                            
                        <!--Email-->
                        <div class="form-group">
                            <input type="email" 
                                   name="email"
                                   id="email"
                                   placeholder="Email" 
                                   class="form-control" 
                                   align="left" 
                                   value="<?php if (isset($email)) echo $email; ?>"/>
                        </div>
                        <span class="error">
                            <?php if (isset($errors['email'])) echo $errors['email']; ?>
                        </span>
                        
                        <!--password-->
                        <div class="form-group">
                            <input type="password"
                                   class="form-control"
                                   name="password" 
                                   id="password"
                                   placeholder="Password" 
                                   align="left" value=""/>
                        </div>
                            
                            <!--error message for invalid input-->
                        <span class="error">
                            <?php if (isset($errors['password'])) echo $errors['password']; ?>
                        </span>  
                        
                        <!--confirm password-->
                        <div class="form-group">
                            <input type="password"
                                   class="form-control"
                                   name="cpassword" 
                                   id="cpassword"
                                   placeholder="Confirm password" 
                                   align="left" value=""/>
                        </div>
                            
                            <!--error message for invalid input-->
                        <span class="error">
                            <?php if (isset($errors['cpassword'])) echo $errors['cpassword']; ?>
                        </span> 
                        
                        
                        
                        
                            <button type="submit" class="hp_button">Register</button>
                        
                    </form>
                    <!--/login form-->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no_padding register">
                        <p>Already have an account? Login <a href="index.php">here</a>.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <img src="img/waver.png" class="img-responsive">
                </div>
            </div>
        </div>
      </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>