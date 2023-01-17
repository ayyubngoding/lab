<?php
session_start();
require 'login/functions.php';

if (isset($_SESSION['login'])) {
    header('Location:index.php');
    exit();
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query(
        $koneksi,
        "SELECT * FROM user WHERE username='$username'"
    );
    if (mysqli_num_rows($result) === 1) {
        $_SESSION['login'] = true;
        header('Location:index.php');
        exit();
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h2>Form Login</h2>
    <h3>Masukkan Username & Password</h3>
    <form action="" method="post">
        <input type="text" name="username">
        <input type="text" name="password">
        <input type="submit" name="login">
    </form>
</head>
<body>
    
</body>
</html>