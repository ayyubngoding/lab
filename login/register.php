<?php
require 'functions.php';
if (isset($_POST['register'])) {
    global $koneksi;
    if (registrasi($_POST) > 0) {
        echo "<script>
        alert('data berhasil disimpan');
        </script>";
    } else {
        echo mysqli_error($conn);
    }
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
<body style=" background-image: url(../image/bg1.svg);">
  <div class="container">
      <form action="" method="post">
          <h2>Registrasi</h2>
          <h3>Enter your Credentials</h3>
          <center>
          <input type="text" name="username"  placeholder="Username">
          </center>
          <center>
          <input type="password" name="password"  placeholder="Password">
          </center>
          <center>
          <input type="password" name="password2"  placeholder="Ualngi Password">
          </center>
          <button type="submit" name="register">Register</button>
          <center><p>Sudah Punya Akun?</p><a href="login.php">Login</a></center>
        </form>
    </div>
  
</body>
</html>