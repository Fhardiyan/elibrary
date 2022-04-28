<!DOCTYPE html>
<html>
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
   <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>

<style>
.container1 {
  position: relative;
  width: 50%;
}

.overlay1 {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 100%;
  height:0;
  transition: .5s ease;
}

.container1:hover .overlay1 {
  bottom: 0;
  height: 100%;
}

.text1 {
  color: white;
  font-size: 25px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>

<body style="background-image: url('images/bg-tribrata-blur.png'); background-size: cover;" >
	<div class="row">
		<div class="col-md-6">
			<center><bbl><h1>KOLEKSI HANJAR</h1><b>
				<br><br><br>
				<div class="container1">
					<img src="images/lambang-spn.png" alt="Avatar" width="400" length="400">
					  <a href="http://localhost/perpustakaan/view.php">
					  <div class="overlay1">
					    <div class="text1">Halaman ini berisikan buku-buku yang digunakan sebagai bahan ajar Siswa Diktuk Bintara Polri</div>
					  </div></a>
				</div>
			</center>
		</div>
		<div class="col-md-6">
			<center><h1>KOLEKSI UMUM</h1>
				<br><br><br>
				<div class="container1">
					<img src="images/smartlibgramed.png" alt="Avatar" width="400" length="400">
					<a href="https://eperpus.com/home/">
					  <div class="overlay1">
					    <div class="text1">Halaman ini berisikan buku-buku umum yang dapat digunakan sebagai referensi belajar Siswa Diktuk Bintara Polri</div>
					  </div></a>
				</div>
			</center>
		</div>
	</div>
</body>
</html>