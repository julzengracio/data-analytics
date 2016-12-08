
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>
            span.error{
                color: red;
            }            
        </style>
    </head>
    <body>
        <div>
            <?php
            if (isset($errorMessage))
                echo "<p>$errorMessage</p>";
            ?>
            <form action="login.php" method="POST"><!--form-->
                <div class = "form-group">
                    <!--username field-->
                    <label for="username">Username: </label>
                    <input type="text"
                           name="username"
                           value="<?php if (isset($formdata['username'])) echo $formdata['username']; ?>"
                           />
                    <span class = "error"><!--error message for invalid input-->
                        <?php if (isset($errors['username'])) echo $errors['username']; ?>
                    </span>
                </div>
                <div class = "form-group">
                    <!--password field-->
                    <label for="password">Password: </label>
                    <input type="password"
                           name="password"
                           value=""
                           />
                    <span class = "error"><!--error message for invalid input-->
                        <?php if (isset($errors['password'])) echo $errors['password']; ?>
                    </span>
                </div>
                <button type="submit">Login</button>
            </form>
            <div>
            <a href="index.php">Home</a>
            </div>
        </div>
    </body>
</html>
