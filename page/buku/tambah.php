<script type="text/javascript" >
    function validasi(form){
        if (form.judul.value=="") {
            alert("Judul Tidak Boleh Kosong");
            form.judul.focus();
            return (false);
        }if (form.pengarang.value=="") {
            alert("Pengarang Tidak Boleh Kosong");
            form.pengarang.focus();
            return(false);
        }if (form.penerbit.value=="") {
            alert("Penerbit Tidak Boleh Kosong");
            form.penerbit.focus();
            return(false);
        }if (form.isbn.value=="") {
            alert("ISBN Tidak Boleh Kosong");
            form.isbn.focus();
            return(false);
        }
        if (form.fotobuku.value=="") {
            alert("Foto Tidak Boleh Kosong");
            form.fotobuku.focus();
            return(false);
        }
        if (form.buku.value=="") {
            alert("Buku Tidak Boleh Kosong");
            form.buku.focus();
            return(false);
        }

        return(true);
    }
</script>

<div class="panel panel-default">
<div class="panel-heading">
		Tambah Data Buku
 </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype="multipart/form-data" onsubmit="return validasi(this)" >
                <div class="form-group">
                    <label>Judul</label>
                    <input class="form-control" name="judul" id="judul" />
                </div>

                <div class="form-group">
                    <label>Pengarang</label>
                    <input class="form-control" name="pengarang" id="pengrang" />
                </div>

                <div class="form-group">
                    <label>Penerbit</label>
                    <input class="form-control" name="penerbit" id="penerbit" /> 
                </div>

                <div class="form-group">
                    <label>Kategori</label>
                    <input class="form-control" name="kategori" id="kategori" />
                </div>

                <div class="form-group">
                    <label>ISBN</label>
                    <input class="form-control" name="isbn" id="isbn" />
                </div>

                <div class="form-group">
                    <label>Berkas Buku</label>
                        <input type="file" name="buku" id="buku" accept=".pdf">
                </div>

                <div class="form-group">
                    <label>Foto Cover Buku</label>
                        <input type="file" name="fotobuku" id="fotobuku" accept="image/.jpg, .png, .jpeg">
                </div>

                <div class="form-group">
                <label> Lokasi</label>
                <select class="form-control" name="lokasi">
                    <option>== Pilih ==</option>
                    <?php
                        $query = $koneksi->query("SELECT * FROM tb_lokasi ORDER by id_lokasi");
                        
                        while ($lokasi=$query->fetch_assoc()) {
                            echo "<option value='$lokasi[lokasi]'>$lokasi[lokasi]</option>";
                        }
                    ?>
                </select>
              </div>  
                
                <div>
                	<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
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
    $uploadfc = move_uploaded_file($lokasicover, "upload/".$fotobuku);

//buku pdf
    $buku = $_FILES['buku']['name'];
    $lokasibuku = $_FILES['buku']['tmp_name'];
    $uploadbk = move_uploaded_file($lokasibuku, "buku/".$buku);

    $lokasi = $_POST ['lokasi'];
    $simpan = $_POST ['simpan'];

    if ($simpan) {
         if ($uploadfc) {
            if ($uploadbk) {
        $sql = $koneksi->query("insert into tb_buku (judul, pengarang, penerbit, kategori, isbn, lokasi, fotobuku, buku)values('$judul', '$pengarang', '$penerbit', '$kategori', '$isbn', '$lokasi', '$fotobuku', '$buku')"); 
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Disimpan");
                    //window.location.href="?page=buku";

                </script>
            <?php        
        }
     }
 }

 ?>
        
                             
                             

