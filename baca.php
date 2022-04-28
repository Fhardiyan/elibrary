<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Elibrary SPN POLDA JATIM</title>
	<!-- W3 STYLES-->
   <link href="assets/css/w3.css"rel="stylesheet">
</head>
<body>
<?php
	$koneksi = new mysqli("localhost", "root", "", "db_perpustakaan");
?>
<?php
	if (isset($_GET['id_buku']))
	{
		$sql = $koneksi->query("select * from tb_buku where id_buku = ".$_GET['id_buku']);
		$data_buku = $sql->fetch_assoc();
	}
?>
<div class="containerbaca">
 <iframe class="responsive-iframe" src="buku/<?= $data_buku['buku'] ?>" width="90%" height="500px">	
</div>

</body>
</html>