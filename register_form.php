<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Register Form</title>
        <style>
            span.error{
                color: red;
            }            
        </style>
    </head>
    <body>
        <div>
            <form action="register.php" method="POST">
                <div>
                    <label for="username">Username: </label>
                    <input type="text"
                           id="username"
                           name="username"
                           value="<?php if (isset($username)) echo $username; ?>"
                           >
                    <span class="error">
                        <?php if (isset($errors['username'])) echo $errors['username']; ?>
                    </span>
                </div>
                <div>
                    <label for="password">Password: </label>
                    <input type="password"
                           id="password"
                           name="password"
                           value=""
                           >
                    <span class="error">
                        <?php if (isset($errors['password'])) echo $errors['password']; ?>
                    </span>
                </div>
                <div>
                    <label for="cpassword">Confirm Password: </label>
                    <input type="password"
                           id="cpassword"
                           name="cpassword"
                           value=""
                           >
                    <span class="error">
                        <?php if (isset($errors['cpassword'])) echo $errors['cpassword']; ?>
                    </span>
                </div>
                <div>
                    <label for="email">Email Address: </label>
                    <input type="text"
                           id="email"
                           name="email"
                           value="<?php if (isset($email)) echo $email; ?>"
                           >
                    <span class="error">
                        <?php if (isset($errors['email'])) echo $errors['email']; ?>
                    </span>
                </div>
                <button type="submit">Register</button>
            </form>
            <li><a href="index.php">Home</a></li>
        </div>
    </body>
</html>
