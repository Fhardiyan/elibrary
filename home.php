<?php
    $koneksi = new mysqli("localhost","root","","db_perpustakaan");
    $sql = $koneksi->query("select * from tb_buku");
    $juser = $koneksi->query("select * from tb_user");
    $jmlbuku = mysqli_num_rows($sql);
    $jmluser = mysqli_num_rows($juser);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Elibrary SPN POLDA JATIM</title>
        <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
            <!-- W3 STYLES-->
   <link href="assets/css/w3.css"rel="stylesheet">
   <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2020.css">
  </head>
<body>
  <!--  <center><img src="images/lambang-spn.png" width="150" height="150"></center>
     <center><font size="+3" face="arial">Perpustakaan Digital</font></center>
    <center><font size="+3" face="arial">SPN POLDA JATIM</font></center> -->
       <center><h1><strong>STATISTIK JUMLAH</strong></h1></center><br>
<div class="flex-lg-row my-lg-3 ps-lg-3">
    <div class="col-lg-6 flex-column">
        <div class="w3-container">
          <center>
            <div class="w3-card-2" style="width:75%;">
                <header class="w3-container w3-2020-flame-scarlet">
                  <center><h3>BUKU</h3></center>
                </header>
                <div class="w3-container">
                  <h3><strong><?php echo $jmlbuku; ?></strong></h3>
                </div>
            </div>
          </center>
        </div>
    </div>
    <div class="col-lg-6 flex-column">
        <div class="w3-container">
          <center>
          <div class="w3-card-2" style="width:75%;">
            <header class="w3-container w3-2020-mosaic-blue">
              <center><h3>PENGGUNA</h3></center>
            </header>
            <div class="w3-container">
              <h3><strong><?php echo $jmluser; ?></strong></h3>
            </div>
          </div>
          </center>
        </div>
    </div>
</div>
             
</body>
</html>