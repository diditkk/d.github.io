<?php 

require 'barang_functions.php';

$id_barang = $_GET["id_barang"];

$brg = query("SELECT * FROM barang WHERE id_barang = $id_barang")[0];

if (isset($_POST["submit"])) {
	
	if (ubah($_POST) >0) {
		echo "<script>
              alert('data berhasil diubah!');
              document.location.href = 'barang_view.php'
		      </script>";
	}else{
		echo "<script>
              alert('data gagal diubah!');
              document.location.href = 'barang_view.php'
		      </script>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ubah Data barang</title>

  <!-- Bootstrap core CSS -->
  <link href="build/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/homepage.css" rel="stylesheet">

</head>

<body>

<!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="pelanggan-view.php">Toko Saka Jaya</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
        </div>
    </nav>
<!-- Akhir Navbar -->

<!-- content -->
<div class="row mx-5">
        <div class="col-3">
        </div>
        <div class="col-6">
            <div class="container">
                <h1 class="font-weight-bold text-center mt-5">Ubah Data Barang</h1>

                <form action="" method="post">
                    <input type="hidden" name="id_barang" value="<?= $brg["id_barang"]; ?>">

                    <div class="form-group">
                        <label for="kode_barang">Kode Barang</label>
                        <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="<?= $brg["kode_barang"]; ?>">
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $brg["nama_barang"]; ?>">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga" value="<?= $brg["harga"]; ?>">
                    </div>
                    <div class="row mx-5 mb-4">
                        <div class="col-3 ml-4">

                        </div>

                        <div class="col-6 mt-3">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg">Ubah Data</button>
                        </div>

                        <div class="col-3">

                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
<!-- akhir content -->

 <!-- Bootstrap core JavaScript -->
  <script src="bahan/jquery/jquery.min.js"></script>
  <script src="bahan/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>