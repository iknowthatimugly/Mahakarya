<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chaldea</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css"></head>
<body>
<?php
session_start();
if (isset($_POST['login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if ($user == "skylake" && $pass == "123") {
        $_SESSION['login'] = $user;
        header("location:formbook.php");
    }
    else {
        die ("Password/Username anda salah :) <a href='formlogin.php'><button type='submit'>LOGIN KEMBALI</button></a>");
    }
} 
if (isset($_SESSION['login'])) { ?>
<!-- Header -->
<nav class="navbar navbar-light" style="background:white">
  <a class="navbar-brand" href="#">
    <img src="/assets/image/Chaldea.png" width="120" height="100" class="d-inline-block align-content-center">
    <font class="font-italic">Chaldea</font>
  </a>
  <form action="logout.php" class="form-inline my-2 my-lg-0">
      <label>Skylake</label>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Log out</button>
    </form>
</nav>
<!--  -->
<div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header text-center">Attention</div>
                    <div class="card-body">
                        <label class="text-center">Anda sudah login :D</label><br>
                        <a href="formbook.php"><button class="btn btn-danger" type="submit">Masuk ke halaman utama</button></a>
            </div>
        </div>
    </div>
    <?php } 
else {    
?>
<!-- Header -->
<nav class="navbar navbar-light" style="background:white">
  <a class="navbar-brand" href="#">
    <img src="/assets/image/Chaldea.png" width="120" height="100" class="d-inline-block align-content-center">
    <font class="font-italic">Chaldea</font>
  </a>
</nav>
<!--  -->
<div class="container">
<div class="row justify-content-center">
    <div class="col-4">
        <div class="card">
            <div class="card-header text-center">Chaldea store</div>
                <div class="card-body">
                <form action="" class="form-group" method="post">
                    <label>Username :</label>
                    <input type="text" name="user" min="1" class="form-control" required>
                    <label>Password :</label>
                    <input type="password" name="pass" min="1" class="form-control" required>
                    <input type="submit" value="Log in" class="btn btn-outline-info" name="login">
                </form>
                </div>
        </div>
    </div>
</div>
</body>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.bundle.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
</html>
<?php } ?>