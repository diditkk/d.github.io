<?php 
$conn = mysqli_connect("localhost", "root", "", "kontrol");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows [] = $row;
    }
    return $rows;
}

function tambah($data){
	global $conn;
	$kode_barang    = htmlspecialchars($data["kode_barang"]);
	$nama_barang    = htmlspecialchars($data["nama_barang"]);
	$harga = htmlspecialchars($data["harga"]);

	 $query = "INSERT INTO barang VALUES ('', '$kode_barang', '$nama_barang', '$harga')";
 mysqli_query($conn, $query);
 return mysqli_affected_rows($conn);
}


function hapus($id_barang){
	global $conn;
	mysqli_query($conn, "DELETE FROM barang WHERE id_barang = $id_barang");
	 return mysqli_affected_rows($conn);
}


function ubah($data){
	global $conn;
 $id_barang           = $data["id_barang"];
 $kode_barang    = htmlspecialchars($data["kode_barang"]);
 $nama_barang   = htmlspecialchars($data["nama_barang"]);
 $harga = htmlspecialchars($data["harga"]);

   $query = "UPDATE barang SET
             kode_barang           = '$kode_barang',
             nama_barang           = '$nama_barang',
             harga         = '$harga'
             WHERE id_barang = $id_barang ";
 mysqli_query($conn, $query);
 return mysqli_affected_rows($conn);
}


function cari($keyword){
	$query = "SELECT * FROM barang
	           WHERE
	           kode_barang LIKE '%$keyword%' OR
	           nama_barang LIKE '%$keyword%' OR
	           harga LIKE '%$keyword%'
	           ";
	           return query($query);
}
?>