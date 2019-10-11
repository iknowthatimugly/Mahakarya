<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chaldea</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css"></head>
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
<?php
session_start();
if (isset($_SESSION['login'])) {
    if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $date = $_POST['date'];
    $jpb = $_POST['jpb']; ?>
     <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <div class="container">
    <div class="col justify-content-center" style="padding:30px">
     <div class="card">
         <div class="card-body">
                <form action="bayarbuku.php" method="post">
               <?php for ($i=0; $i < $jpb; $i++) { ?>
                <div class="form-group">   
                <label for="">Judul Buku</label>
                   <input style="color:black" type="text" name="jb[]" class="form-control col-md-12"> 
                    </div>
                    <div class="form-group">
                   <label for="">Kode Buku</label>
                   <input type="text" name="kb[]" style="color:black" max="6" class="form-control col-md-12"> 
                    </div>
                    <div class="form-group">
                   <label style="color:black">Jenis Buku</label>
                   <select name="jeb[]" class="custom-select">
                       <option value="Sci-fi" style="color:black">Sci-fi</option>
                       <option value="Romance" style="color:black">Romance</option>
                       <option value="Action"  style="color:black">Fiksi</option>
                       <option value="Horror" style="color:black">Horror</option>
                       <option value="Manga/Manhwa/Comic" style="color:black">Manga/Manhwa/Comic</option>
                   </select>
                    </div>
                <div class="form-group">
                   <label for="">Harga buku</label>
                   <input style="color:black" type="number" name="hb[]" class="form-control col-md-12"> 
                </div>
                <div class="form-group">
                    <label>Banyak buku</label>
                    <input type="number" name="bb[]" class="form-control col-md-12">
                </div>
                <hr style="background:black ; border-width:20px">
                <?php } ?>
                <input type="hidden" name="nama" value="<?php echo $nama; ?>" >
                <input type="hidden" name="alamat" value="<?php echo $alamat; ?>" >
                <input type="hidden" name="jk" value="<?php echo $jk; ?>" >
                <input type="hidden" name="date" value="<?php echo $date; ?>" >
                <input type="hidden" name="jpb" value="<?php echo $jpb; ?>" >
                <button type="submit" name="submit" class="btn btn-outline-dark">Pesan</button>
                </form>
          </div>
      </div> 
      </div>                     
    </div>
    

<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.bundle.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<?php } }
else {
die ("Silahkan login Dlu :) <a href='formlogin.php'><button type='submit'>LOGIN DISINI</button></a>");
}
?>
</body>
</html>