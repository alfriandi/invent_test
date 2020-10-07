<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tampilan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--CSS/Style-->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
	<!--datatable-->
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

</head>
<body>
<div class="container">
	<table id="example" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nama Barang</th>
				<th>Kode Barang</th>
				<th>Jumlah Barang</th>
				<th>Tanggal</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				include 'auth.php';
				$ujianonline = mysqli_query($conn, "select * from produk");
				while ($row = mysqli_fetch_array($ujianonline)) {
					echo "<tr>
						<td>".$row['id']."</td>
						<td>".$row['nama_barang']."</td>
						<td>".$row['kode_barang']."</td>
						<td>".$row['jumlah_barang']."</td>
						<td>".$row['tanggal']."</td>
						</tr>";
					}
		 	?>
		 </tbody>
	</table>
</div>
<script>
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>
</html>