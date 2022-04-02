<?php
    session_start();
    include('config/config.php');
    $str_query = 'SELECT * FROM user';
    $query = mysqli_query($connection, $str_query);
    $row = mysqli_fetch_array($query);

    if (isset($_POST['edit'])) 
    {   
        $str_query3 = 'UPDATE user SET ';
        $str_query3 .= 'namaDepan = "'.$_POST['nama-depan'].'", ';
        $str_query3 .= 'namaTengah = "'.$_POST['nama-tengah'].'", ';
        $str_query3 .= 'namaBelakang = "'.$_POST['nama-belakang'].'", ';
        $str_query3 .= 'tempatLahir = "'.$_POST['tempat-lahir'].'", ';
        $str_query3 .= 'tanggalLahir = "'.$_POST['tgl-lahir'].'", ';
        $str_query3 .= 'wargaNegara = "'.$_POST['warga-negara'].'", ';
        $str_query3 .= 'noHP = "'.$_POST['no-hp'].'", ';
        $str_query3 .= 'alamat = "'.$_POST['alamat'].'", ';

        $nik = $_POST['nik'];
        $email = $_POST['email'];
        $kp = $_POST['kode-pos'];

        $_SESSION['warnEdit'] = '';
        if (strlen($nik) != 16) 
        {
            $_SESSION['warnEdit'] .= 'NIK must consists of 16 digits <br/>';
        } 
        
        if (strlen($kp) != 5) 
        {
            $_SESSION['warnEdit'] .= 'Kode Pos must consists of 5 digits <br/>';
        } 
        else 
        {
            $str_query3 .= 'kodePos = "'.$kp.'", ';
        }

        $str_query2 = 'SELECT * FROM user WHERE username = "'.$_SESSION['loggedin'].'"';
        $query2 = mysqli_query($connection, $str_query2);
        $row2 = mysqli_fetch_array($query2);
        do 
        {
            if ($email == $row['email'] && $row['email'] != $row2['email']) 
            {
                $_SESSION['warnEdit'] .= 'E-mail already exists <br/>';
            }
            if ($nik == $row['nik'] && $row['nik'] != $row2['nik']) 
            {
                $_SESSION['warnEdit'] .= 'NIK already exists <br/>';
            }
        }
        while ($row = mysqli_fetch_array($query));

        if(strlen($_SESSION['warnEdit']) > 1) 
        {
            header('Location: editProfile.php');
        }
        else 
        {
            $str_query3 .= 'email = "'.$email.'", ';
            $str_query3 .= 'nik = "'.$nik.'"';
            if ($_FILES['foto-profil']['size'] > 0)
            {
                $fileName = $_FILES['foto-profil']['name'];
                $tmpName = $_FILES['foto-profil']['tmp_name'];

                $dirUpload = 'profile/';
                $uploaded = move_uploaded_file($tmpName, $dirUpload.$fileName);

                $files = glob('profile/*');
                foreach ($files as $file) 
                {
                    if ($file == 'profile/'.$row2['fotoProfil']) 
                    {
                        unlink($file);
                    }
                }
                $str_query3 .= ', fotoProfil = "'.$fileName.'"';
            }

            $str_query3 .= 'WHERE username = "'.$_SESSION['loggedin'].'"';

            if(mysqli_query($connection, $str_query3)) 
            {
                header('Location: profile.php');
            } 
            else 
            {
                echo 'Failed to register <br/>'.mysqli_error($connection);
            }
        } 
    }
?>