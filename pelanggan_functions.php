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
	$kode_pelanggan    = htmlspecialchars($data["kode_pelanggan"]);
	$nama = htmlspecialchars($data["nama"]);

	 $query = "INSERT INTO pelanggan VALUES ('', '$kode_pelanggan', '$nama')";
 mysqli_query($conn, $query);
 return mysqli_affected_rows($conn);
}


function hapus($id_pelanggan){
	global $conn;
	mysqli_query($conn, "DELETE FROM pelanggan WHERE id_pelanggan = $id_pelanggan");
	 return mysqli_affected_rows($conn);
}


function ubah($data){
	global $conn;
 $id_pelanggan           = $data["id_pelanggan"];
 $kode_pelanggan    = htmlspecialchars($data["kode_pelanggan"]);
 $nama = htmlspecialchars($data["nama"]);

   $query = "UPDATE pelanggan SET
             kode_pelanggan           = '$kode_pelanggan',
             nama         = '$nama'
             WHERE id_pelanggan = $id_pelanggan ";
 mysqli_query($conn, $query);
 return mysqli_affected_rows($conn);
}


function cari($keyword){
	$query = "SELECT * FROM pelanggan
	           WHERE
	           kode_pelanggan LIKE '%$keyword%' OR
	           nama LIKE '%$keyword%'
	           ";
	           return query($query);
}
?>