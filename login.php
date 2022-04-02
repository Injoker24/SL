<?php
    session_start();

    if (isset($_SESSION['loggedin'])) 
    {
        header('Location: home.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/login.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="left-container">
            Log In
        </div>

        <form action="./loginProcess.php" method="POST" class="form-container">
            <div class="input-container">
                <div class="input-title">
                    Username
                </div>
                <div class="input">
                    <input type="text" name="username-login" required class="input-box">
                </div>  
            </div>
            <div class="input-container">
                <div class="input-title">
                    Password
                </div>
                <div class="input">
                    <input type="password" name="password-login" required class="input-box">
                </div>  
            </div>

            <div class="button-container">
                <div class="buttons">
                    <a href="./welcome.php" class="back">
                        Kembali
                    </a>
                    <input type="submit" value="Login" name="login" class="login">
                </div>
            </div>

            <div class="warning">
                <?= isset($_SESSION['login-warn']) ? $_SESSION['login-warn'] : '';?>
                <?= $_SESSION['login-warn'] = ''; ?>
            </div>
        </form>
    </div>
</body>
</html>
