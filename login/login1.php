<?php
session_start();
if (isset($_SESSION['login'])) {
    header('Location:../index.php');
    exit();
}
require 'functions.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query(
        $koneksi,
        "SELECT * FROM user WHERE username='$username'"
    );
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION['login'] = true;
            header('Location:../index.php');
            exit();
        }
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
    <title>Register</title>
   <style>
    body{
        width: 100vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .container{
        text-align: center;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        width: 400px;
        height: 500px;
        background-color: steelblue;
    }
    input{
        display: block;
        width: 250px;
        height: 46px;
        margin-top: 5px;
        border-radius: 5px;
        border: none;
        padding: 1px 5px;
    }
    button{
        margin-top: 5px;
        height: 46px;
        width: 250px;
    }
   </style>
   
</head>
  <div class="container">
      <form action="" method="post">
          <h2>Registrasi</h2>
          <center>
          <input type="text" name="username"  placeholder="Username">
          </center>
          <center>
          <input type="password" name="password"  placeholder="Password">
          </center>
          <button type="submit" name="login">login</button>
          <center><p>Login</p><a href="register.php">Register</a></center>
        </form>
    </div>
  
</body>
</html>