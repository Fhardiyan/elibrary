<?php
    $koneksi = new mysqli("localhost","root","","db_perpustakaan");
    $sql = $koneksi->query("select * from tb_buku");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Elibrary SPN POLDA JATIM</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/product/">
    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/product.css" rel="stylesheet">
            <!-- W3 STYLES-->
   <link href="assets/css/w3.css"rel="stylesheet">
   <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2020.css">

       <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  </head>

  <body>
<header class="site-header sticky-top py-1">
  <nav class="container d-flex flex-column flex-md-row justify-content-between">
      <img src="images/lambang-spn.png" width="50" height="50" class="center logo">
      <h2 style="color:floralwhite;">PERPUSTAKAAN DIGITAL SPN POLDA JATIM</h2>
  </nav>
</header>
<main>

  <?php
    while ($data= $sql->fetch_assoc()) {
  ?>

    <!-- Modal Detail View -->
          <div id="detail" class="w3-modal">
          <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:900px">
            <div class="w3-center"><br>
            </div>
            <div class="w3-row">
              <div class="w3-quarter w3-container">
              <img src="upload/<?php echo $data['fotobuku'];?>" width="200" height="200">
              </div>
              <div class="w3-threequarter w3-container" style="text-align:left; color: black;">
                <label><b>Judul</b></label>
                <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder='<?php echo $data['judul'];?>' disabled>
                <label><b>Penerbit</b></label>
                <input class="w3-input w3-border" type="text" placeholder='<?php echo $data['penerbit'];?>' disabled>
                <label><b>Pengarang</b></label>
                <input class="w3-input w3-border" type="text" placeholder='<?php echo $data['pengarang'];?>' disabled>
                <label><b>Kategori</b></label>
                <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder='<?php echo $data['kategori'];?>' disabled>
                <label><b>isbn</b></label>
                <input class="w3-input w3-border" type="text" placeholder='<?php echo $data['isbn'];?>' disabled>
                <label><b>Lokasi</b></label>
                <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder='<?php echo $data['lokasi'];?>' disabled>
                <label><b>Tanggal input</b></label>
                <input class="w3-input w3-border" type="text" placeholder='<?php echo $data['tgl_input'];?>' disabled>
              </div>
            </div>
            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
              <button onclick="document.getElementById('detail').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
            </div>
          </div>
        </div>

<!-- Main Page -->
    <div class="flex-lg-row my-lg-3 ps-lg-3">
      <div class="col-lg-3 bg-dark me-md-3 text-center text-white overflow-hidden">
          <h4><?php echo $data['judul'];?></h4>
          <img src="upload/<?php echo $data['fotobuku'];?>" width="150" height="200">
          <br><br><p>KATEGORI BUKU : </p>
          <p><?php echo $data['kategori'];?></p>
          <br><a href="http://localhost/perpustakaan/baca.php?id_buku=<?= $data['id_buku'] ?>" class="btn btn-primary">BACA</a>
          <button onclick="document.getElementById('detail').style.display='block'" class="btn btn-success">detail</button>
      </div>
    </div>
  <?php
    }
  ?>
</main>

    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>     
  </body>
</html>