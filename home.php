<?php
    session_start();
    if (!isset($_SESSION['loggedin'])) 
    {
        header('Location: login.php');
    }

    include('config/config.php');
    $str_query = 'select namaDepan, namaTengah, namaBelakang from user where username = "'.$_SESSION['loggedin'].'"';
    $query = mysqli_query($connection, $str_query);
    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/home.css">
    <title>Home</title>
</head>
<body>
    <div class="header">
        <div class="left-container">
            <div class="title">
                Aplikasi Pengelola Keuangan
            </div>
            <a href="./home.php" class="nav-button" style="border-bottom: 2px solid azure">Home</a>
            <a href="./profile.php" class="nav-button">Profile</a>
        </div>
        <div class="right-container">
            <div class="logout-button">
                <a href="./logoutProcess.php">Log Out</a>
            </div> 
        </div>
    </div>

    <div class="content">
        <div class="welcoming">
            Halo 
            <span class="bold-name"> 
                <?= $row['namaDepan'].' '.$row['namaTengah'].' '.$row['namaBelakang']; ?>
            </span>
            , Selamat datang di Aplikasi Pengelolaan Keuangan
        </div>
    </div>
    
</body>
</html>