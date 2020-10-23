<?php 

require 'transaksi_functions.php';

$id_transaksi = $_GET["id_transaksi"];

if (hapus($id_transaksi) >0) {
	echo "<script>
              alert('data berhasil dihapus!');
              document.location.href = 'transaksi_view.php'
		      </script>";
}else{
	echo "<script>
              alert('data gagal dihapus!');
              document.location.href = 'transaksi_view.php'
		      </script>";
}

?>
