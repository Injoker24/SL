<?php
    session_start();
    include('config/config.php');
    $str_query = 'select * from user';
    $query = mysqli_query($connection, $str_query);
    $row = mysqli_fetch_array($query);

    if (isset($_POST['register'])) 
    {   
        $nama_depan = $_POST['nama-depan'];
        $nama_tengah = $_POST['nama-tengah'];
        $nama_belakang = $_POST['nama-belakang'];
        $tempat_lahir = $_POST['tempat-lahir'];
        $tgl_lahir = $_POST['tgl-lahir'];
        $nik = $_POST['nik'];
        $warga_negara = $_POST['warga-negara'];
        $email = $_POST['email'];
        $no_hp = $_POST['no-hp'];
        $alamat = $_POST['alamat'];
        $username = $_POST['username'];
        $kp = $_POST['kode-pos'];
        $pass1 = $_POST['password1'];
        $pass2 = $_POST['password2'];

        $_SESSION['warn'] = '';
        if (strlen($nik) != 16) 
        {
            $_SESSION['warn'] .= 'NIK must consists of 16 digits <br/>';
        } 
        
        if (strlen($kp) != 5) 
        {
            $_SESSION['warn'] .= 'Kode Pos must consists of 5 digits <br/>';
        } 

        if ($pass1 != $pass2) 
        {
            $_SESSION['warn'] .= 'Password must be the same <br/>';
        } 

        if (!is_null($row)) 
        {
            do 
            {
                if ($username == $row['username']) 
                {
                    $_SESSION['warn'] .= 'Username already exists <br/>';
                }
                if ($email == $row['email']) 
                {
                    $_SESSION['warn'] .= 'E-mail already exists <br/>';
                }
                if ($nik == $row['nik']) 
                {
                    $_SESSION['warn'] .= 'NIK already exists <br/>';
                }
            } 
            while ($row = mysqli_fetch_array($query));
        }

        $_SESSION['nama-depan'] = $nama_depan;
        $_SESSION['nama-tengah'] = $nama_tengah;
        $_SESSION['nama-belakang'] = $nama_belakang;
        $_SESSION['tempat-lahir'] = $tempat_lahir;
        $_SESSION['tgl-lahir'] = $tgl_lahir;
        $_SESSION['warga-negara'] = $warga_negara;
        $_SESSION['no-hp'] = $no_hp;
        $_SESSION['alamat'] = $alamat;
        $_SESSION['nik'] = $nik;
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['kode-pos'] = $kp;
        $_SESSION['password'] = $pass2;

        if(strlen($_SESSION['warn']) > 1) 
        {
            header('Location: register.php');
        }
        else 
        {
            $fileName = $_FILES['foto-profil']['name'];
            $tmpName = $_FILES['foto-profil']['tmp_name'];

            $dirUpload = 'profile/';
            $uploaded = move_uploaded_file($tmpName, $dirUpload.$fileName);
            
            $_SESSION['foto-profil'] = $fileName;
            $_SESSION['registered'] = true;

            $str_query = 'INSERT INTO user VALUES("'
                            .$username.
                            '","'
                            .$pass2.
                            '","'
                            .$nama_depan.
                            '","'
                            .$nama_tengah.
                            '","'
                            .$nama_belakang.
                            '","'
                            .$tempat_lahir.
                            '","'
                            .$tgl_lahir.
                            '","'
                            .$nik.
                            '","'
                            .$warga_negara.
                            '","'
                            .$email.
                            '","'
                            .$no_hp.
                            '","'
                            .$alamat.
                            '","'
                            .$kp.
                            '","'
                            .$fileName.
                            '")';
            if(mysqli_query($connection, $str_query)) 
            {
                header('Location: welcome.php');
            } 
            else 
            {
                echo 'Failed to register <br/>'.mysqli_error($connection);
            }
        } 
    }
?>