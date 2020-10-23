<?php 

require 'pelanggan_functions.php';

$id_pelanggan = $_GET["id_pelanggan"];

if (hapus($id_pelanggan) >0) {
	echo "<script>
              alert('data berhasil dihapus!');
              document.location.href = 'pelanggan_view.php'
		      </script>";
}else{
	echo "<script>
              alert('data gagal dihapus!');
              document.location.href = 'pelanggan_view.php'
		      </script>";
}

?>
