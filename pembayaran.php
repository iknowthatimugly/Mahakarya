<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chaldea Store</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
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
<!-- Pembayaran -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">Kembalian</div>
                    <div class="card-body">
                    <?php
                        if (isset($_POST['submit'])) {
                    $byr = $_POST['bayar'];
                    $total = $_POST['total'];

                    $kembali = $byr - $total;

                    Echo "Total Kembalian : ".$kembali;

                        }
                    ?>
                    <hr>
                    <div class="form-group">
                    <label for="">Apakah anda ingin pesan lagi?</label>
                    <br>
                    <a href="formbook.php"><button type="submit" class="btn btn-outline-primary">Pesan lagi</button></a> 
                    <form action="" method="get" class="form-group">                  
                    <button type="submit" class="btn btn-outline-primary" name="udah">Udahan</button>
                    <?php 
                    if (isset($_GET['udah'])) {
                        echo "<br>";
                        echo "Terima kasih :)";
                    }
                    ?>
                    </form>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</body>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.bundle.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
</html>