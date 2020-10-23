<?php
require 'pelanggan_functions.php';
$pelanggan = query("SELECT * FROM pelanggan");

if (isset($_POST["cari"]) ) {
  $pelanggan = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Data Pelanggan</title>
  <link rel="stylesheet" type="text/css" href="fontawesome5/css/all.min.css">

  <!-- Bootstrap css -->
  <link href="build/bootstrap/css/bootstrap.min.css" rel="stylesheet">


   <!-- Navbar -->
  <nav class="navbar fived-top navbar-expand-lg navbar-light bg-warning">
  <a class="navbar-brand" href="#">Selamat Datang Admin | <b>TOKO SAKA JAYA</b></a>
    <form class="form-inline my-2 my-lg-0 ml-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <div class="icon ml-4">
      <h5>
        <i class="fas fa-bell mr-3"></i>
        <i class="fas fa-envelope mr-3"></i>
        <i class="fas fa-user mr-3"></i>
      </h5>
    </div>
  </div>
</nav>
<div class="row no-guters">
  <div class="col-md-2 bg-dark pt-4">
    <ul class="nav flex-column ml-3 mb-5">
   <li class="nav-item">
    <a class="nav-link text-white" href="index.php"><i class="fas fa-tachometer-alt"></i>  Dashboard</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link active text-white" href="pelanggan_view.php"><i class="fas fa-address-card"></i>  Data Pelanggan </a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="barang_view.php"><i class="fas fa-archive"></i>  Data Barang</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="transaksi_view.php"><i class="fas fa-balance-scale"></i>  Data Transaksi</a><hr class="bg-secondary">
  </li>
   <li class="nav-item">
    <a class="nav-link text-white" href="detail_view.php"><i class="fas fa-info"></i>  Detail</a><hr class="bg-secondary">
  </li>
</ul>
  </div>
  <div class="col-md-10">
<div class="row">
    <div class="col-lg-12 mt-2">
    <div class="mx-5">
      <h1 class="font-weight-bold mt-1"><i class="fas fa-address-card"></i> DATA PELANGGAN</h1>
      <a href="pelanggan_tambah.php"><button type="button" class="btn btn-info text-decoration-none float-xl-right mb-3 mr-4"> + Tambah Data</button></a>
      <br>

<table class="table mt-3 mb-5">
        <thead class="table-dark">
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Aksi</th>
            <th scope="col">Kode Pelanggan</th>
            <th scope="col">Nama</th>
          </tr>
          </thead>
        <tbody>
<?php $i = 1; ?>
<?php foreach($pelanggan as $row) : ?>

<tr>
 <td><?= $i; ?></td>
  <td><a href="pelanggan_ubah.php?id_pelanggan=<?= $row["id_pelanggan"];?> "><button type="button" class="btn btn-primary btn-sm">Ubah</button></a> 
    <a href="pelanggan_hapus.php?id_pelanggan=<?= $row["id_pelanggan"]; ?>" onclick = "return confirm('Anda yakin untuk menghapus data?')"><button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
  </td>
  <td> <?=$row["kode_pelanggan"];  ?> </td>
  <td> <?=$row["nama"];  ?> </td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
</tbody>
</table>
</tbody>
    </div>
    </div>
      <!--col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
</div>
<!-- akhir navbar -->

<!-- content -->
 

<!-- Bootstrap core JavaScript -->
  <script src="bahan/jquery/jquery.min.js"></script>
  <script src="bahan/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
