<?php include('../Server/authenticate.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in Form</title>
    <!--css start-->
    <link rel="stylesheet" href="../css/style.css">
    
    <!--css end-->
</head>

<body>
    <div class="form-container">
        <form action="" method="POST">
            <h3>Log in</h3>
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="error-msg">' . $error . '</span>';
                };
            };
            ?>
            <input type="text" name="username" required placeholder="enter your username">
            <input type="password" name="password" required placeholder="enter your password">
            <input type="submit" name="login" value="Log in" class="form-btn">
            <p>Don't have an account? <a href="form_register.php">Register now</a></p>
        </form>
    </div>
</body>

</html>