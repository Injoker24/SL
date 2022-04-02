<?php
session_start();
include('config/config.php');

if (isset($_POST['login'])) 
{
    $_SESSION['login-warn'] = '';
    $str_query = 'SELECT username, password FROM user WHERE username = "'.$_POST['username-login'].'"';
    $query = mysqli_query($connection, $str_query);
    $row = mysqli_fetch_array($query);

    if ($row['username'] == $_POST['username-login'] && $row['password'] == $_POST['password-login']) 
    {
        $_SESSION['loggedin'] = $_POST['username-login'];
        header('Location: home.php');
    } 
    else if (is_null($row)) 
    {
        $_SESSION['login-warn'] = 'Username is not registered';
        header('Location: login.php');
    }
    else if ($row['username'] == $_POST['username-login'] && $row['password'] != $_POST['password-login'])
    {
        $_SESSION['login-warn'] = 'Username / Password does not match';
        header('Location: login.php');
    }
}
?>