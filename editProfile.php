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
    <title>Edit Profile</title>
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
        <form action="./editProfileProcess.php" method="POST" enctype="multipart/form-data">
            <div class="content-title">
                Edit Profil Pribadi
                <div class="button-container">
                    <div class="buttons">
                        <a href="./profile.php" class="back">
                            Kembali
                        </a>
                        <input type="submit" value="Save" name="edit" class="save">
                    </div>
                </div>
                <div class="warning">
                    <?= isset($_SESSION['warnEdit']) ? $_SESSION['warnEdit'] : '';?>
                </div>
            </div> 
            <div class="profile-container">
                <div class="data">
                    <div class="data-label">
                        Nama Depan
                    </div>
                    <div class="input">
                        <input type="text" name="nama-depan" value="<?= $row['namaDepan'] ?>" required class="input-box">
                    </div> 
                </div>
                <div class="data">
                    <div class="data-label">
                        Nama Tengah
                    </div>
                    <div class="input">
                        <input type="text" name="nama-tengah" value="<?= $row['namaTengah'] ?>" required class="input-box">
                    </div> 
                </div>
                <div class="data">
                    <div class="data-label">
                        Nama Belakang
                    </div>
                    <div class="input">
                        <input type="text" name="nama-belakang" value="<?= $row['namaBelakang'] ?>" required class="input-box">
                    </div> 
                </div>
                <div class="data">
                    <div class="data-label">
                        Tempat Lahir
                    </div>
                    <div class="input">
                        <input type="text" name="tempat-lahir" value="<?= $row['tempatLahir'] ?>" required class="input-box">
                    </div> 
                </div>
                <div class="data">
                    <div class="data-label">
                        Tgl Lahir
                    </div>
                    <div class="input">
                    <input type="date" name="tgl-lahir" value="<?= $row['tanggalLahir'] ?>" required class="input-box">
                </div>  
                </div>
                <div class="data">
                    <div class="data-label">
                        NIK
                    </div>
                    <div class="input">
                        <input type="number" name="nik" value="<?= $row['nik'] ?>" required class="input-box">
                    </div> 
                </div>
                <div class="data">
                    <div class="data-label">
                        Warga Negara
                    </div>
                    <div class="input">
                        <input type="text" name="warga-negara" value="<?= $row['wargaNegara'] ?>" required class="input-box">
                    </div> 
                </div>
                <div class="data">
                    <div class="data-label">
                        Email
                    </div>
                    <div class="input">
                        <input type="text" name="email" value="<?= $row['email'] ?>" required class="input-box">
                    </div> 
                </div>
                <div class="data">
                    <div class="data-label">
                        No HP
                    </div>
                    <div class="input">
                        <input type="number" name="no-hp" value="<?= $row['noHP'] ?>" required class="input-box">
                    </div> 
                </div>
                <div class="data">
                    <div class="data-label">
                        Alamat
                    </div>
                    <div class="input">
                        <textarea name="alamat" required class="alamat"><?= $row['alamat'] ?></textarea>
                    </div> 
                </div>
                <div class="data">
                    <div class="data-label">
                        Kode Pos
                    </div>
                    <div class="input">
                        <input type="number" name="kode-pos" value="<?= $row['kodePos'] ?>" required class="input-box">
                    </div> 
                </div>
                <div class="data">
                    <div class="data-label">
                        Foto Profil
                    </div>
                    <img src="./profile/<?= $row['fotoProfil'] ?>" alt="foto-profil" class="foto">
                </div>
                <div class="data">
                    <div class="data-label">
                        Ganti Profil
                    </div>
                    <div class="input">
                        <input type="file" name="foto-profil" accept="image/*">
                    </div> 
                </div>
            </div>
        </div>
    </div>
</body>
</html>