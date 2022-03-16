<?php

	$id_buku = $_GET['id_buku'];

	$sql = $koneksi->query("select * from tb_buku where id_buku='$id_buku'");

	$tampil = $sql->fetch_assoc();

?>

<div class="panel panel-default">
<div class="panel-heading">
		Ubah Data
 </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype="multipart/form-data" onsubmit="return validasi(this)" >
                <div class="form-group">
                    <label>Judul</label>
                    <input class="form-control" name="judul" value="<?php echo $tampil['judul'];?>" />
                    
                </div>

                <div class="form-group">
                    <label>Pengarang</label>
                    <input class="form-control" name="pengarang" value="<?php echo $tampil['pengarang'];?>" />
                    
                </div>

                <div class="form-group">
                    <label>Penerbit</label>
                    <input class="form-control" name="penerbit" value="<?php echo $tampil['penerbit'];?>" />
                    
                </div>

                 <div class="form-group">
                    <label>Kategori</label>
                    <input class="form-control" name="kategori" value="<?php echo $tampil['kategori'];?>" />
                </div>

                <div class="form-group">
                    <label>ISBN</label>
                    <input class="form-control" name="isbn" value="<?php echo $tampil['isbn'];?>" />
                    
                </div>

                <div class="form-group">
                    <label>Berkas Buku</label><br>
                      <label><a href='buku/<?php echo $tampil['buku'] ?>'><img src='buku/logopdf.png' width="90" height="75"></a></label>                   
                </div>
                <div class="form-group">
                     <label>Ganti Berkas Buku</label>
                     <input type="file" name="buku" id="buku" />
                </div>

                <div class="form-group">
                      <label>Foto Cover Buku</label><br>
                      <label><img src='upload/<?php echo $tampil['fotobuku'] ?>' width="100" height="75"></label>                           
                </div>
                <div class="form-group">
                     <label>Ganti Cover Buku</label>
                     <input type="file" name="fotobuku" id="fotobuku" />
                </div>

                <div class="form-group">
                    <label> Lokasi</label>
                    <select class="form-control" name="lokasi">
                        <?php
                            $query = $koneksi->query("SELECT * FROM tb_lokasi ORDER by id_lokasi");
                            
                            while ($lokasi=$query->fetch_assoc()) {
                                echo "<option value='$lokasi[lokasi]'>$lokasi[lokasi]</option>";
                            }
                        ?>
                    </select>
                </div>

                <div>
                	
                	<input type="submit" name="simpan" value="Ubah" class="btn btn-primary">
                </div>
         </div>

         </form>
      </div>
 </div>  
 </div>  
 </div>


 <?php

 	$judul = $_POST ['judul'];
 	$pengarang = $_POST ['pengarang'];
 	$penerbit = $_POST ['penerbit'];
 	$kategori = $_POST ['kategori'];
 	$isbn = $_POST ['isbn'];

//foto cover
    $fotobuku = $_FILES['fotobuku']['name'];
    $lokasicover = $_FILES['fotobuku']['tmp_name'];

//buku pdf
    $buku = $_FILES['buku']['name'];
    $lokasibuku = $_FILES['buku']['tmp_name'];

 	$lokasi = $_POST ['lokasi'];
 	$simpan = $_POST ['simpan'];


 if ($simpan) {
        if (!empty($lokasicover)) {
           
        $uploadfc = move_uploaded_file($lokasicover, "upload/".$fotobuku);
               
        if (!empty($lokasibuku)) {
          
        $uploadbk = move_uploaded_file($lokasibuku, "buku/".$buku);

            $sql = $koneksi->query("update tb_buku set judul='$judul', pengarang='$pengarang', penerbit='$penerbit', kategori='$kategori', isbn='$isbn', buku='$buku', fotobuku='$fotobuku', lokasi='$lokasi' where id_buku='$id_buku'");

        
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Diubah");
                    window.location.href="?page=buku";

                </script>
            <?php
        
    }
}

    else{
        $sql = $koneksi->query("update tb_buku set judul='$judul', pengarang='$pengarang', penerbit='$penerbit', kategori='$kategori', isbn='$isbn', lokasi='$lokasi' where id_buku='$id_buku'");

        
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Diubah");
                    window.location.href="?page=buku";

                </script>
            <?php
    }

     }

 ?>               

