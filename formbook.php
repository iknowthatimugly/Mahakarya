<?php
session_start(); 
if (isset($_SESSION['login'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chaldea Store</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="popup.css">
</head>
<body>
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
    <!-- Dead End -->

    <!-- Assalaam Book store -->
<div class="container">
    <div class="row justify-content-center" style="padding:20px">
        <div class="col-md-12">
            <div class="font-weight-bold text-center"><h2>Chaldea Book Store</h2></div>
            <div class="card">
                <div class="card-header" style="background:black ; color:white">
                Pembelian Buku
                </div>
                <div class="card-body">
                    <div class="form-group">
                    <form action="probook.php" method="post">
                        <!-- Nama -->
                        <div class="form-group">
                            <label>Nama :</label>
                            <input type="text" name="nama" class="form-control" placeholder="masukkan nama anda disini" min="1" style="color:black" required>
                        </div>
                        <!-- Alamat -->
                        <div class="form-group">
                            <label>Alamat :</label>
                            <input type="text" name="alamat" class="form-control" placeholder="masukkan alamat anda disini" min="1" style="color:black" required>
                        </div>
                        <!-- Jenis Kelamin -->
                        <div class="form-group">
                            <label>Jenis kelamin :</label>
                            <input type="radio" name="jk" value="Laki Laki" class="custom-radio">Laki - Laki
                            <input type="radio" name="jk" value="Perempuan" class="custom-radio">Perempuan
                        </div>
                        <!-- Tanggal Pembelian -->
                        <div class="form-group">
                            <label>Tanggal Pembelian</label>
                            <input type="Date" name="date" class="form-control col-5">
                        </div>
                        <!-- Jumlah Buku -->
                        <div class="form-group">
                            <label>Jumlah Pembelian buku :</label>
                            <input type="number" name="jpb" class="form-control" min="1" style="color:black" placeholder="masukkan jumlah pembelian buku anda disini"required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-outline-dark">Pesan</button>
                        <button type="reset" name="reset" class="btn btn-outline-warning">Reset</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
    <!-- Dead End -->


</body>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.bundle.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
</html>
<?php }else {
    die ("Silahkan login Dlu :) <a href='formlogin.php'><br>LOGIN DISINI</a>");
}?>