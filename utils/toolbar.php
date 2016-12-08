<ul>
<?php
require_once 'utils/functions.php';

echo '<li><a href="index.php">Home</a></li>';
if (!is_logged_in()) {
    echo '<li><a href="login_form.php">Login</a></li>';
    echo '<li><a href="register_form.php">Register</a></li>';
}
else {
    echo '<li><a href="logout.php">Logout</a></li>';
    echo '<div class="fb-login-button" data-max-rows="1" data-size="medium" data-show-faces="false" data-auto-logout-link="true" data-scope="public_profile, email">Connect with Facebook</div>';
}
?>
</ul>