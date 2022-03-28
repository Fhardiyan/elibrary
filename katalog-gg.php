<?php
    $koneksi = new mysqli("localhost","root","","db_perpustakaan");
    $sql = $koneksi->query("select * from tb_buku");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <!-- W3 STYLES-->
   <link rel="stylesheet" href="assets/css/w3.css">
   <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/product.css" rel="stylesheet">
   <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

    <title>E-Library SPN JATIM</title>
   

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    

  </head>
  <body>
    
<header>
</header>
<main>
  <div class="position-relative overflow-hidden p-1 p-md-1 m-md-1 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h4 class="display-4 fw-normal">E-LIBRARY</h4>
      <h4 class="display-4 fw-normal">SPN POLDA JATIM</h4>
    </div>
  </div>

  <div class="row d-md-flex flex-md-equal w-100 my-md-3 ps-md-3 ">
    <?php

while ($data= $sql->fetch_assoc()) {
?>
    <div class="col-md-6 bg-dark me-md-3 text-center text-white overflow-hidden">
         <h2 class="display-5"><?php echo $data['judul'];?></h2>
        <p class="lead">And an even wittier subheading.</p>
      <img src="upload/<?php echo  $data['fotobuku'];?>" width="200" height="200">
      <br><br><br><br><button type="button" class="btn btn-primary">BACA</button>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">detail</button>
    </div>
 <?php  } ?>
  </div>
</main>

    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
