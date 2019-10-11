<?php
session_start();
if (isset($_SESSION['login'])) {
if (isset($_POST['submit'])) { 
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $date = $_POST['date'];
    $jpb = $_POST['jpb'];
    $jb = $_POST['jb']; 
    $kb = $_POST['kb'];
    $pg = $_POST['pg'];
    $jeb = $_POST['jeb'];
    $hb = $_POST['hb'];
    $bb = $_POST['bb'];
?>
<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
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
<!-- Form Harga -->
<div class="container">
    <div class="row justify-content-center" style="padding:40px">
    <div class="col-10">
        <div class="card">
            <div class="card-header text-center">Data Pembeli</div>
            <form action="pembayaran.php" method="post">
                <table class="table">
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Pembelian</th>
                        <th>Jumlah Buku</th>
                    </tr>
                    <tr>
                        <td><?php echo $nama; ?></td>
                        <td><?php echo $alamat; ?></td>
                        <td><?php echo $jk; ?></td>
                        <td><?php echo $date; ?></td>
                        <td><?php echo $jpb; ?></td>
                    </tr>
                </table>
                <div class="card-header text-center">Daftar buku yang dibeli</div>
                <table class="table">
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Kode buku</th>
                    <th>Jenis Buku</th>
                    <th>Harga Buku</th>
                    <th>Banyak Buku</th>
                    <th>Total Harga</th>
                </tr>
                <tr>

                <?php foreach ($jb as $key => $value) { 
                 $lol[$key] = $hb[$key]*$bb[$key];?>
                <th><?php echo $key+1; ?></th>
                <th><?php echo $jb[$key]; ?></th>
                <th><?php echo $kb[$key]; ?></th>
                <th><?php echo $jeb[$key]; ?></th>
                <th><?php echo $hb[$key]; ?></th>
                <th><?php echo $bb[$key]; ?></th>   
                <th><?php echo $lol[$key]; ?></th>   
                </tr>
                <?php }$jay = array_sum($lol); ?>
                <table class="table">
                <tr>
                    <th>Jumlah harga :</th>
                    <td align="right">Rp <?php echo $jay; ?></td>
                </tr>
                <tr>
    <?php if ($jay >= 150000) {
        $diskon = ($jay*5)/100;
    }
    elseif ($jay >= 250000) {
        $diskon = ($jay*10)/100;
    }
    elseif ($jay >= 500000) {
        $diskon = ($jay*20)/100;
    }
    else {
        $diskon = "-";
    } 
    $total = $jay-$diskon;
    ?>
                    <th>Diskon :</th>
                    <td align="right">Rp <?php echo $diskon; ?></td>
                </tr>
                <tr>
                    <th>Total harga :</th>
                    <td align="right">Rp <?php echo $total; ?></td>
                    <input type="hidden" name="total" value="<?php echo $total; ?>">
                </tr>
                </table>
                <div class="card-header text-dark text-center">Pembayaran</div>
                <input type="number" name="bayar" class="form-control" min="<?php echo $total; ?>" required>
                <button type="submit" class="btn btn-outline-primary" name="submit">Bayar</button>
            </form>
            </div>
        </div>
    </div>
</div>
<!-- dead end -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.bundle.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<?php } } 
else {
die ("Silahkan login Dlu :) <a href='formlogin.php'><button type='submit'>LOGIN DISINI</button></a>");
}
?>