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
   <link rel="stylesheet" href="assets/css/w3.css">
  </head>

  <body>
<header class="site-header sticky-top py-1">
  <nav class="container d-flex flex-column flex-md-row justify-content-between">
      <img src="images/lambang-spn.png" width="50" height="50" class="center logo">
      <h2 style="color:white;">PERPUSTAKAAN DIGITAL SPN POLDA JATIM</h2>
        <button type="button" class="btn btn-primary" data-toggle="collapse">SEARCH</button>
        <div class="collapse">
          <div class="card card-body">
<section>
  <div class="bg-image h-100" style="background-color: #F5DF4D;">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <div class="card mb-2">
              <div class="card-body d-flex justify-content-between py-2">
                <div class="input-group input-group-lg">
                  <span class="input-group-text border-0 px-1" id="basic-addon2"><i class="fas fa-search fa-lg" style="color: #939597;"></i></span>
                  <input type="text" class="form-control form-control-lg rounded" placeholder="Search"
                    aria-label="Search" aria-describedby="basic-addon2" />
                </div>
                <p class="mb-0 d-flex flex-row align-self-center" style="color: #939597;"><span class="font-weight-bold pe-1">108 </span>results</p>
              </div>
            </div>
            <div class="card">
              <div class="card-body p-4">
                <h6 class="mt-3 mb-4" style="color: #939597;">Advanced search</h6>
                <div class="row">
                  <div class="col-md-4 mb-3">
                    <div class="dropdown">
                      <a class="btn btn-outline-dark btn-rounded btn-lg btn-block dropdown-toggle" href="#" role="button"
                        id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
                        Accessories
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </div>
                  </div>
                <div class="d-flex justify-content-between align-items-center mt-4">
                  <div>
                    <button type="button" class="btn btn-dark btn-rounded">Search</button>
                    <button type="button" class="btn btn-link btn-rounded" style="color: #939597;" data-mdb-ripple-color="dark">
                      Delete
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
</div>
</div>
  </nav>
</header>
<main>
  <?php

while ($data= $sql->fetch_assoc()) {
?>
  <div class="row d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="col-6 flex-lg-equal bg-dark text-center text-white overflow-hidden">
        <h2 class="display-5"><?php echo $data['judul'];?></h2>
        <p class="lead"><?php echo $data['kategori'];?></p>
        <img src="upload/<?php echo  $data['fotobuku'];?>" width="200" height="200">
        <br><br><button type="button" class="btn btn-primary">BACA</button>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">detail</button>
      </div>
    </div>
  </div>
   <?php  } ?>
</main>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>    
  </body>
</html>
