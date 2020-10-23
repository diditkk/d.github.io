<?php 

require 'pelanggan_functions.php';

if (isset($_POST["submit"])) {

	if (tambah($_POST) >0) {
		echo "<script>
              alert('data berhasil ditambahkan!');
              document.location.href = 'pelanggan_view.php'
		      </script>";
	}else{
		echo "<script>
              alert('data gagal ditambahkan!');
              document.location.href = 'pelanggan_view.php'
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

  <title>Tambah Data Pelanggan</title>

  <!-- Bootstrap core CSS -->
  <link href="build/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/homepage.css" rel="stylesheet">

</head>
<body>

 <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="kendaraan-view.php">Toko Saka Jaya</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
        </div>
    </nav>
<!-- akhir Navbar -->

<!-- content -->
<div class="row mx-5">
        <div class="col-3">

        </div>

        <div class="col-6">
            <div class="container">
                <h1 class="font-weight-bold mt-5 text-center mb-4">Tambah Data Pelanggan</h1>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="kode_pelanggan">Kode Pelanggan</label>
                        <input type="text" class="form-control" id="kode_pelanggan" name="kode_pelanggan" placeholder="Masukkan kode pelanggan" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Anda" required>
                    </div>
                    <div class="row mx-5 mb-4">
                        <div class="col-3 ml-4">

                        </div>

                        <div class="col-6 mt-3">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg">Tambah Data</button>
                        </div>

                        <div class="col-3">

                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
    <!-- /.row -->
    <!-- /.container -->
<!-- akhir content -->

 <!-- Bootstrap core JavaScript -->
  <script src="bahan/jquery/jquery.min.js"></script>
  <script src="bahan/bootstrap/js/bootstrap.bundle.min.js"></script>


 </body>
 </html>