<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/register.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="left-container">
            Register
        </div>

        <form action="./registerProcess.php" method="POST" enctype="multipart/form-data" class="form-container">
            <div class="input-container">
                <div class="input-title">
                    Nama Depan
                </div>
                <div class="input">
                    <input type="text" name="nama-depan" value="<?= isset($_SESSION['nama-depan']) ? $_SESSION['nama-depan'] : ''; ?>" required class="input-box">
                </div>  
            </div>
            <div class="input-container">
                <div class="input-title">
                    Nama Tengah
                </div>
                <div class="input">
                    <input type="text" name="nama-tengah" value="<?= isset($_SESSION['nama-tengah']) ? $_SESSION['nama-tengah'] : ''; ?>" required class="input-box">
                </div>  
            </div>
            <div class="input-container">
                <div class="input-title">
                    Nama Belakang
                </div>
                <div class="input">
                    <input type="text" name="nama-belakang" value="<?= isset($_SESSION['nama-belakang']) ? $_SESSION['nama-belakang'] : ''; ?>" required class="input-box">
                </div>  
            </div>
            <div class="input-container">
                <div class="input-title">
                    Tempat Lahir
                </div>
                <div class="input">
                    <input type="text" name="tempat-lahir" value="<?= isset($_SESSION['tempat-lahir']) ? $_SESSION['tempat-lahir'] : ''; ?>" required class="input-box">
                </div>  
            </div>
            <div class="input-container">
                <div class="input-title">
                    Tgl Lahir
                </div>
                <div class="input">
                    <input type="date" name="tgl-lahir" value="<?= isset($_SESSION['tgl-lahir']) ? $_SESSION['tgl-lahir'] : ''; ?>" required class="input-box">
                </div>  
            </div>
            <div class="input-container">
                <div class="input-title">
                    NIK
                </div>
                <div class="input">
                    <input type="number" name="nik" value="<?= isset($_SESSION['nik']) ? $_SESSION['nik'] : ''; ?>" required class="input-box">  
                </div>  
            </div>
            <div class="input-container">
                <div class="input-title">
                    Warga Negara
                </div>
                <div class="input">
                    <input type="text" name="warga-negara" value="<?= isset($_SESSION['warga-negara']) ? $_SESSION['warga-negara'] : ''; ?>" required class="input-box"> 
                </div>  
            </div>
            <div class="input-container">
                <div class="input-title">
                    E-Mail
                </div>
                <div class="input">
                    <input type="email" name="email" value="<?= isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>" required class="input-box">  
                </div>  
            </div>
            <div class="input-container">
                <div class="input-title">
                    No HP
                </div>
                <div class="input">
                    <input type="number" name="no-hp" value="<?= isset($_SESSION['no-hp']) ? $_SESSION['no-hp'] : ''; ?>" required class="input-box">
                </div>  
            </div>
            <div class="input-container">
                <div class="input-title">
                    Alamat
                </div>
                <div class="input">
                    <textarea name="alamat" required class="alamat"><?= isset($_SESSION['alamat']) ? $_SESSION['alamat'] : ''; ?></textarea>
                </div>  
            </div>
            <div class="input-container">
                <div class="input-title">
                    Kode Pos
                </div>
                <div class="input">
                    <input type="number" name="kode-pos" value="<?= isset($_SESSION['kode-pos']) ? $_SESSION['kode-pos'] : ''; ?>" required class="input-box">
                </div>  
            </div>
            <div class="input-container">
                <div class="input-title">
                    Foto Profil
                </div>
                <div class="input">
                    <input type="file" name="foto-profil" accept="image/*" required class="input-box">
                </div>  
            </div>
            <div class="input-container">
                <div class="input-title">
                    Username
                </div>
                <div class="input">
                    <input type="text" name="username" value="<?= isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>" required class="input-box">
                </div>  
            </div>
            <div class="input-container">
                <div class="input-title">
                    Password 1
                </div>
                <div class="input">
                    <input type="password" name="password1" required class="input-box">
                </div>  
            </div>
            <div class="input-container">
                <div class="input-title">
                    Password 2
                </div>
                <div class="input">
                    <input type="password" name="password2" required class="input-box">
                </div>  
            </div>

            <div class="button-container">
                <div class="buttons">
                    <a href="./welcome.php" class="back">
                        Kembali
                    </a>
                    <input type="submit" value="Register" name="register" class="register">
                </div>
            </div>

            <div class="warning">
                <?= isset($_SESSION['warn']) ? $_SESSION['warn'] : '';?>
            </div>
        </form>
    </div>
</body>
</html>