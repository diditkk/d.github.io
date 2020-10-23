<?php 

require 'detail_functions.php';

$id_detail = $_GET["id_detail"];

if (hapus($id_detail) >0) {
	echo "<script>
              alert('data berhasil dihapus!');
              document.location.href = 'detail_view.php'
		      </script>";
}else{
	echo "<script>
              alert('data gagal dihapus!');
              document.location.href = 'detail_view.php'
		      </script>";
}

?>
