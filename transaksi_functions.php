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
	$no_faktur    = htmlspecialchars($data["no_faktur"]);
	$Tgl    = htmlspecialchars($data["Tgl"]);
	$kode_pelanggan    = htmlspecialchars($data["kode_pelanggan"]);
	 $query = "INSERT INTO transaksi VALUES ('', '$no_faktur', '$Tgl', '$kode_pelanggan')";
 mysqli_query($conn, $query);
 return mysqli_affected_rows($conn);
}


function hapus($id_transaksi){
	global $conn;
	mysqli_query($conn, "DELETE FROM transaksi WHERE id_transaksi = $id_transaksi");
	 return mysqli_affected_rows($conn);
}


function ubah($data){
	global $conn;
 $id_transaksi           = $data["id_transaksi"];
 $no_faktur = htmlspecialchars($data["no_faktur"]);
 $Tgl = htmlspecialchars($data["Tgl"]);
 $kode_pelanggan    = htmlspecialchars($data["kode_pelanggan"]);

   $query = "UPDATE transaksi SET
    no_faktur           = '$no_faktur',
    Tgl           = '$Tgl',
             kode_pelanggan           = '$kode_pelanggan'
             WHERE id_transaksi = $id_transaksi ";
 mysqli_query($conn, $query);
 return mysqli_affected_rows($conn);
}


function cari($keyword){
	$query = "SELECT * FROM transaksi
	           WHERE
	           no_faktur LIKE '%$keyword%' OR
	           Tgl LIKE '%$keyword%' OR
	           kode_pelanggan LIKE '%$keyword%'
	           ";
	           return query($query);
}
?>