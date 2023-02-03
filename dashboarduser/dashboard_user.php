<?php
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
        <h1><a href="dashboard_user.php">East Horizon Trip</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="dashboard_user.php" class="link">Home</a></li>
          <li><a href="about.php" class="link">Tentang Kami</a></li>
          
          <li><a href="kontak.php">Kontak</a></li>
          <li class="dropdown"><a href="#"><span>Kelola Data</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
              <li><a href="detailuser.php">Data User</a></li>
              <li><a href="pemesanan.php">Data Pemesanan</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" data-toggle="dropdown">
            <span>Hello <?php echo $_SESSION['username']; ?></span>
            <img src="<?php echo $_SESSION['foto'] ?>" style="border-radius: 50%; margin-left: 10px; width: 50px; height: 50px; margin-top: 12px;">
              <i class="bi bi-chevron-down"></i>
            </a>
              <!-- Dropdown list -->
            <ul class="dropdown-menu">
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

  <section id="hero" style="margin-top: -20px;">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(../assets/img/slide/slide-1.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>East Horizon Trip</span></h2>
                <p class="animate__animated animate__fadeInUp">Aplikasi Ticketing kapal termewah di indonesia !</p>
                <a href="index.php?hal=about" class="btn-get-started animate__animated animate__fadeInUp">Baca Selengkapnya</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(../assets/img/slide/slide-2.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated fanimate__adeInDown">Pesan Tiket <span> Sekarang Juga</span></h2>
                <p class="animate__animated animate__fadeInUp">Nikmati perjalanan ini dengan menyenangkan, dan dapatkan penawaran dan promo menarik!</p>
                <a href="index.php?hal=#" class="btn-get-started animate__animated animate__fadeInUp">Pesan Tiket</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(../assets/img/slide/slide-3.jpeg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Lihat Rute <span> Yang Kami Lalui</span></h2>
                <p class="animate__animated animate__fadeInUp">Pilihan rute kami sangat cocok buat anda bersama keluarga!, </p>
                <a href="index.php?hal=#" class="btn-get-started animate__animated animate__fadeInUp">Lihat Rute</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

    <!-- ======= Featured Section ======= -->
    <?php
                             $user = mysqli_query($konek, "SELECT * FROM kapal INNER JOIN tujuan ON kapal.tujuan_kapal = tujuan.id_tujuan INNER JOIN kategori ON kapal.kategori_kapal = kategori.id_kategori  ");
                             foreach ( $user as $data){
                              
                             ?>
    <section id="featured" class="featured">
    <div class="container">
          <div class="icon-box text-center d-flex mt-4" >
            <div style="width: 30%;">
              <img style="width: 300px; height: 300px;" src="../dashboardadmin/<?php echo $data['foto'] ?>" alt=""> 
            </div>
            <div style="width: 70%;">
              <h2 class="mt-4"><?php echo $data['tujuan'] ?></h2>
              <p class="mb-3"><?php echo $data['nama_kapal'] ?></p>
              <p class="mb-3"><?php echo $data['nama_kategori_kapal'] ?></p>
              <h2 class="mt-4"><?php echo "Rp " . number_format($data['harga']) ?></h2>
              <p class="p-4">Segera Lakukan Pemesanan dan nikmati perjalanan anda</p>
              <a href="tambahpemesanan.php" role="button" class="btn btn-success">Mulai Pesan</a>
            </div>
            
          </div>
      </div>
    </section><!-- End Featured Section -->
    <?php } ?>
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