<?php
	

	$nosis = $_GET['id'];

	$sql = $koneksi->query("select * from tb_anggota where nosis = '$nosis'");

	$tampil = $sql->fetch_assoc();

    $jkl = $tampil['jk'];
    $jabatan = $tampil['jabatan'];


?>

<div class="panel panel-default">
<div class="panel-heading">
		Ubah Data
 </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" >
                <div class="form-group">
                    <label>nosis</label>
                    <input class="form-control" name="nosis" value="<?php echo $tampil['nosis']?>" readonly/>
                    
                </div>

                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" name="nama" value="<?php echo $tampil['nama']?>"/>
                    
                </div>

                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input class="form-control" name="tmpt_lahir" value="<?php echo $tampil['tempat_lahir']?>" />
                    
                </div>

                  <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" type="date" name="tgl_lahir" value="<?php echo $tampil['tgl_lahir']?>"  />
                    
                </div>

                <div class="form-group">
                    <label>Jenosis Kelamin</label><br/>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="l" name="jk" <?php echo($jkl==l)?"checked":"";?> /> Laki-laki
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="p" name="jk" <?php echo($jkl==p)?"checked":""; ?> /> Perempuan
                    </label>
                    
                    
                </div>

                <div class="form-group">
                <label> jabatan</label>
                <select class="form-control" name="jabatan">
                    <option value="I" <?php if ($jabatan=='I') {echo "selected";} ?>>I</option>
                    <option value="II"<?php if ($jabatan=='II') {echo "selected";} ?>>II</option>
                    <option value="III"<?php if ($jabatan=='III') {echo "selected";} ?>>III</option>
                    <option value="IV" <?php if ($jabatan=='IV') {echo "selected";} ?>>IV</option>
                    <option value="V"<?php if ($jabatan=='V') {echo "selected";} ?>>V</option>
                    <option value="VI"<?php if ($jabatan=='VI') {echo "selected";} ?>>VI</option>
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

 	$nosis = $_POST ['nosis'];
 	$nama = $_POST ['nama'];
 	$tmpt_lahir = $_POST ['tmpt_lahir'];
 	$tgl_lahir = $_POST ['tgl_lahir'];
 	$jk = $_POST ['jk'];
 	$jabatan = $_POST ['jabatan'];
 	
 	$simpan = $_POST ['simpan'];


 	if ($simpan) {
 		
 		$sql = $koneksi->query("update  tb_anggota set nama='$nama', tempat_lahir='$tmpt_lahir', tgl_lahir='$tgl_lahir', jk='$jk', jabatan='$jabatan' where nosis='$nosis' ");
 		if ($sql) {
 			?>
 				<script type="text/javascript">
 					
 					alert ("Data Berhasil Disimpan");
 					window.location.href="?page=anggota";

 				</script>
 			<?php
 		}
 	}

 ?>
                             
                             

