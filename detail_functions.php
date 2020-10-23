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
	$kode_barang    = htmlspecialchars($data["kode_barang"]);
	$Qty    = htmlspecialchars($data["Qty"]);
	 $query = "INSERT INTO detail VALUES ('', '$no_faktur', '$kode_barang', '$Qty')";
 mysqli_query($conn, $query);
 return mysqli_affected_rows($conn);
}


function hapus($id_detail){
	global $conn;
	mysqli_query($conn, "DELETE FROM detail WHERE id_detail = $id_detail");
	 return mysqli_affected_rows($conn);
}


function ubah($data){
	global $conn;
 $id_detail           = $data["id_detail"];
 $no_faktur = htmlspecialchars($data["no_faktur"]);
 $kode_barang = htmlspecialchars($data["kode_barang"]);
 $Qty    = htmlspecialchars($data["Qty"]);

   $query = "UPDATE detail SET
    no_faktur           = '$no_faktur',
    kode_barang           = '$kode_barang',
             Qty           = '$Qty'
             WHERE id_detail = $id_detail ";
 mysqli_query($conn, $query);
 return mysqli_affected_rows($conn);
}


function cari($keyword){
	$query = "SELECT * FROM detail
	           WHERE
	           no_faktur LIKE '%$keyword%' OR
	           kode_barang LIKE '%$keyword%' OR
	           Qty LIKE '%$keyword%'
	           ";
	           return query($query);
}
?>