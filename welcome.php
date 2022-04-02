<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/welcome.css">
    <title>Welcome</title>
</head>
<body>
    <div class="header-container">
        <div class="header"> 
            Aplikasi Pengelola Keuangan
        </div>
    </div>

    <div class="title">
        Selamat Datang di Aplikasi Pengelola Keuangan
    </div>

    <div class="button-container">
        <div class="buttons">
            <a href="./login.php" class="login">Login</a>
            <a href="./register.php" class="register">Register</a>
        </div>
    </div>

    <div class="notif">
        <?php
        if (isset($_SESSION['loggedin']))
        {
            echo "Successfully Logged In!"; 
        }
        else 
        {
            echo "";
        }
        ?>
    </div>
</body>
</html>