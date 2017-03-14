<?php
    require_once 'utils/functions.php';

    echo '<li><a href="index.php">Home</a></li>';
    if (!is_logged_in()) {
        echo '<li><a href="login_form.php">Login</a></li>';
    }
    else {
        //echo '<li><div class="fb-login-button" data-max-rows="1" data-size="medium" data-show-faces="false" data-auto-logout-link="true" data-scope="public_profile, email">Connect with Facebook</div></li>';
        //echo '<div class="g-signin2" data-onsuccess="onSignIn"></div>';
        echo '<li><a href="dashboard.php">Dashboard</a></li>';
        //echo '<li><a href="youtube.php">Youtube</a></li>';
        //echo '<li><a href="facebook.php">Facebook</a></li>';
        echo '<li><a href="logout.php">Logout</a></li>';
    }
    echo '<li><a href="#">Contact</a></li>';
?>