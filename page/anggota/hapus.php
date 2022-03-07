<?php
	
	$nosis = $_GET ['id'];

	$koneksi->query("delete from tb_anggota where nosis ='$nosis'");

?>


<script type="text/javascript">
		window.location.href="?page=anggota";
</script>