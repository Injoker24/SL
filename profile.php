<?php
    session_start();
    if (!isset($_SESSION['loggedin'])) 
    {
        header('Location: login.php');
    }

    include('config/config.php');
    $str_query = 'select * from user where username = "'.$_SESSION['loggedin'].'"';
    $query = mysqli_query($connection, $str_query);
    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/profile.css">
    <title>Profile</title>
</head>
<body>
    <div class="header">
        <div class="left-container">
            <div class="title">
                Aplikasi Pengelola Keuangan
            </div>
            <a href="./home.php" class="nav-button">Home</a>
            <a href="./profile.php" class="nav-button" style="border-bottom: 2px solid azure">Profile</a>
        </div>
        <div class="right-container">
            <div class="logout-button">
                <a href="./logoutProcess.php">Log Out</a>
            </div> 
        </div>
    </div>

    <div class="content">
        <div class="content-title">
            Profil Pribadi
            <a href="./editProfile.php" class="edit-button">Edit</a>
        </div>  

        <div class="profile-container">
            <div class="data">
                <div class="data-label">
                    Nama Depan
                </div>
                <span class="data-bold">
                    <?= $row['namaDepan'] ?>
                </span>
            </div>
            <div class="data">
                <div class="data-label">
                    Nama Tengah
                </div>
                <span class="data-bold">
                    <?= $row['namaTengah'] ?>
                </span>
            </div>
            <div class="data">
                <div class="data-label">
                    Nama Belakang
                </div>
                <span class="data-bold">
                    <?= $row['namaBelakang'] ?>
                </span>
            </div>
            <div class="data">
                <div class="data-label">
                    Tempat Lahir
                </div>
                <span class="data-bold">
                    <?= $row['tempatLahir'] ?>
                </span>
            </div>
            <div class="data">
                <div class="data-label">
                    Tgl Lahir
                </div>
                <span class="data-bold">
                    <?= $row['tanggalLahir'] ?>
                </span>
            </div>
            <div class="data">
                <div class="data-label">
                    NIK
                </div>
                <span class="data-bold">
                    <?= $row['nik'] ?>
                </span>
            </div>
            <div class="data">
                <div class="data-label">
                    Warga Negara
                </div>
                <span class="data-bold">
                    <?= $row['wargaNegara'] ?>
                </span>
            </div>
            <div class="data">
                <div class="data-label">
                    Email
                </div>
                <span class="data-bold">
                    <?= $row['email'] ?>
                </span>
            </div>
            <div class="data">
                <div class="data-label">
                    No HP
                </div>
                <span class="data-bold">
                    <?= $row['noHP'] ?>
                </span>
            </div>
            <div class="data">
                <div class="data-label">
                    Alamat
                </div>
                <span class="data-bold">
                    <?= $row['alamat'] ?>
                </span>
            </div>
            <div class="data">
                <div class="data-label">
                    Kode Pos
                </div>
                <span class="data-bold">
                    <?= $row['kodePos'] ?>
                </span>
            </div>
            <div class="data">
                <div class="data-label">
                    Foto Profil
                </div>
                <img src="./profile/<?= $row['fotoProfil'] ?>" alt="foto-profil" class="foto">
            </div>
        </div>

    </div>
</body>
</html>