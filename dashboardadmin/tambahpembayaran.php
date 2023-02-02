<?php
ob_start();
session_start();
if($_SESSION['role']==""){
    header("location:../login.php?pesan=gagal");
}
include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>East Horizon Trip</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/icon.jpg" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <!-- Font Awesome -->
  <link href="../assets/vendor/font-awsome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
</head>  
<body>
  <header id="header" class="d-flex fixed-top align-items-center" style="padding: 15px 15px 30px 15px; ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="index.php">East Horizon Trip</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="dashboard_admin.php" class="link">Home</a></li>
          <li><a href="about.php" class="link">Tentang Kami</a></li>
          
          <li><a href="kontak.php">Kontak</a></li>
          <li class="dropdown"><a href="#"><span>Kelola Data</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="detail.php">Data User</a></li>
              <li><a href="kategori.php">Data Kategori</a></li>
              <li><a href="tujuan.php">Data Tujuan</a></li>
              <li><a href="index.php?hal=#">Data Kapal</a></li>
              <li><a href="index.php?hal=#">Data Pemesanan</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" data-toggle="dropdown">
            <span>Hello <?php echo $_SESSION['username']; ?></span>
            <img src="../<?php echo $_SESSION['foto'] ?>" style="border-radius: 50%; margin-left: 10px; width: 50px; height: 50px; margin-top: 12px;">
              <i class="bi bi-chevron-down"></i>
            </a>
              <!-- Dropdown list -->
            <ul class="dropdown-menu">
              <li><a href="#">Profile</a></li>
              <li><a class="dropdown-item" href="detailuser.php">Kelola User</a></li>
              <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <section class="page-title bg-title overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="title mt-5">
					<h3>Input Data Tujuan</h3>
				</div>
				<ol class="breadcrumb justify-content-center p-0 m-0">
				  <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
                  <li class="breadcrumb-item active">Data Kapal</li>
                  <li class="breadcrumb-item active">Data tujuan</li>
				  <li class="breadcrumb-item active">Input Data tujuan</li>
				</ol>
			</div>
		</div>
	</div>
</section>
<section class="section contact-form">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h3>Input <span class="alternate">Data Tujuan</span></h3>
				</div>
			</div>
		</div>
		<form action="" method="POST" class="row" enctype="multipart/form-data">
			<div class="col-md-6 mt-5">
                <label class="form-label fw-bold">Nama pembayaran</label>
				<input type="text" class="form-control main" name="pembayaran" id="pembayaran" placeholder="Nama Pembayaran">
			</div>
            <div class="col-md-6 mt-5">
                <label class="form-label fw-bold">Nomor pembayaran</label>
				<input type="text" class="form-control main" name="nomor" id="nomor" placeholder="Nama Pembayaran">
			</div>
<div class="mb-3">
  <label for="formFileSm" class="form-label">logo pembayaran</label>
  <input class="form-control form-control-sm" type="file" id="gambar" name="nama_file">
</div>
			<div class="col-12 text-center mt-4">
				<button class="btn btn-primary btn-lg btn-block" type="submit" style="margin-top:20px;" name="btnsimpan">tambah user</button>

			</div>
		</form>
	</div>
</section>
    <!-- ======= Footer ======= -->
<footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Link Terkait</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="index.php?hal=home">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="index.php?hal=about">Tentang Kami</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Service kami</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="index.php?hal=tiket">Tiket Kapal</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="index.php?hal=film">Lihat Kapal</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="index.php?hal=kategori">Kategori Kapal</a></li>
   
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-contact">
        <h4>Kontak Kami</h4>
        <p>
          ADMIN  EastHorizonTrip<br>
          Jawa Timur, Indonesia<br>
          Surabaya <br><br>
          <strong>Phone:</strong> +62 877 650 79444<br>
          <strong>Email:</strong> info@easthorizontrip.co.id<br>
        </p>

      </div>

      <div class="col-lg-3 col-md-6 footer-info">
        <h3>Tentang Kami EastHorizonTrip</h3>
        <p>Aplikasi Ticketing Kapal yang terbaik pilihan kamu !</p>
        <div class="social-links mt-3">
          <a href="#" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="container">
  <div class="copyright">
    &copy; Copyright 2023 <strong><span>Kelompok 7</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/ -->
    Designed by <a href="">Kelompok 7</a>
  </div>
</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="../assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="../assets/js/main.js"></script>

</body>

</html>
</body>
</html>
<?php
if (isset($_POST['btnsimpan'])) {
    $namafolder = "../assets/img/pembayaran/";
    if (!empty($_FILES["nama_file"]["tmp_name"])) {
    $jenis_gambar = $_FILES['nama_file']['type'];
    $pembayaran = $_POST['pembayaran']; 
    $nomor = $_POST['nomor']; 
    $gambar = $_POST['gambar'];
    
    if ($jenis_gambar == "image/jpeg" || $jenis_gambar == "image/jpg" || $jenis_gambar == "image/gif" || $jenis_gambar == "image/png") {
        $gambar = $namafolder . basename($_FILES['nama_file']['name']);
        if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
            $sql = ("INSERT INTO pembayaran (pembayaran,nomor,gambar) 
            VALUES ('$pembayaran','$nomor','$gambar')");
            $data = mysqli_query($konek, $sql);
            //echo "Gambar berhasil dikirim ke direktori".$gambar;
            echo "<br><div class='alert alert-success'><strong>Success,</strong> Data berhasil disimpan</div>";
        } else {
            echo "<br><div class='alert alert-danger'><strong>Ups !!</strong> Gambar gagal dikirim</div";
        }
    } else {
        echo "<div class='alert alert-danger'><strong>Ups !!</strong> Jenis gambar yang anda kirim salah. Harus .jpg .gif .png</div>";
    }
} else {
    echo "<div class='alert alert-danger'><strong>Ups !!</strong> Anda Belum Memilih Gambar</div>";
}
header("location:pembayaran.php");
}
?>