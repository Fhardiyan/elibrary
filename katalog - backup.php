<?php
    $koneksi = new mysqli("localhost","root","","db_perpustakaan");
    $sql = $koneksi->query("select * from tb_buku");
    $data= $sql->fetch_assoc();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PERPUSTAKAAN DIGITAL</title>
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
    <link href="assets/dist/css/product.css" rel="stylesheet">

   <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header" >
                <img src="images/lambang-spn.png" width="70" height="70">
            </div>
            <div class="w3-dropdown-hover" style="font-size: 18 px;padding: 12px 20px 5px 50px; color: white;" >
            <button class="w3-button">KATEGORI</button>
              <div class="w3-dropdown-content w3-bar-block w3-border">
                <a href="#" class="w3-bar-item w3-button"><?php echo $data['kategori'];?></a>
              </div>
            </div>
            <div style="float: right; font-size: 20px; color: white; padding: 15px 20px 5px 50px;">
                <a class="w3-bar-item w3-button" href="#"><i class="fa fa-search"></i></a>
                <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> 
            </div>
    </div>

<div class="w3-cell-row">
<div class="w3-container w3-red w3-cell">
    <p><?php echo $data['judul'];?></p>
    <td> <img src="upload/<?php echo  $data['fotobuku'];?>" width="75" height="50"> </td>
</div>

</div>
</body>
</html>
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
