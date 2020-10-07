<?php 
	include 'auth.php';

	$output = array();
	$query = "select id, nama_barang, kode_barang, jumlah_barang, tanggal from produk";
	$result = mysqli_query($conn, $query);
	if(mysqli_num_rows($result) > 0){
		while($obj = mysqli_fetch_object($result)){
			$output[] = $obj;
		}
	}

	header('Content-Type: text/javascript');
	echo json_encode($output);
	$conn->close();
 ?>