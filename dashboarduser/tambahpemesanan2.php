<?php
session_start();
ob_start();
if($_SESSION['role']==""){
  header("location:login.php?pesan=gagal");
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
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

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
            <img src="../<?php echo $_SESSION['foto'] ?>" style="border-radius: 50%; margin-left: 10px; width: 50px; height: 50px; margin-top: 12px;">
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
  <section class="page-title bg-title overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="title mt-5">
					<h3>Tambah Data pembayaran</h3>
				</div>
				<ol class="breadcrumb justify-content-center p-0 m-0">
				  <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
                  <li class="breadcrumb-item active">Data Kapal</li>
                  <li class="breadcrumb-item active">Data pembayaran</li>
				  <li class="breadcrumb-item active">Tambah Data pembayaran</li>
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
					<h3>Tambah <span class="alternate">Data pembayaran</span></h3>
				</div>
			</div>
		</div>
		<form action="" method="POST" class="row" enctype="multipart/form-data">
        <div class="form-group">
            <input type="text" class="form-control" hidden name="id_pemesanan" autocomplete="off" value="<?php echo $tampil['id_pemesanan']; ?>">
        </div>
    <label for="exampleFormControlTextarea1" class="form-label">nama pemesanan</label>
<select class="form-select form-select-sm" aria-label=".form-select-sm example" name="user_id">
<option selected>Pilih nama pemesanan dibawah ini </option>
    <?php
  $query    =mysqli_query($konek, "SELECT * FROM user WHERE id_user = $_SESSION[id_user] ");
                while ($data1 = mysqli_fetch_array($query)) {
                ?>
                <option value="<?php echo $data1['id_user'];?>"><?php echo $data1['fullname'];?></option>
                <?php
                }
                ?>
</select>
<label for="exampleFormControlTextarea1" class="form-label"> nama kapal</label>
<select class="form-select form-select-sm" aria-label=".form-select-sm example" name="kapal_id">
<option selected>Pilih Kapal dibawah ini </option>
    <?php
     $id = $_GET['id'];
  $query    =mysqli_query($konek, "SELECT * FROM kapal WHERE id_kapal='$id'");
                while ($data1 = mysqli_fetch_array($query)) {
                ?>
                <option value="<?php echo $data1['id_kapal'];?>"><?php echo $data1['nama_kapal'];?></option>
                <?php
                }
                ?>
</select>
<label for="exampleFormControlTextarea1" class="form-label"> nama Pembayaran</label>
<select class="form-select form-select-sm" aria-label=".form-select-sm example" name="pembayaran_id">
<option selected>Pilih pembayaran dibawah ini </option>
    <?php
  $query    =mysqli_query($konek, "SELECT * FROM pembayaran");
                while ($data1 = mysqli_fetch_array($query)) {
                ?>
                <option value="<?php echo $data1['id_pembayaran'];?>"><?php echo $data1['pembayaran'];?></option>
                <?php
                }
                ?>
</select>
<div class="col-md-3">
                <label class="form-label fw-bold">tgl aktif</label>
				<input type="text" class="form-control main" name="tgl_aktif" id="datepicker" placeholder="tgl aktif">
			</div>
            <div class="col-md-3">
                <label class="form-label fw-bold">tgl berakhir</label>
				<input type="text" class="form-control main" name="tgl_berakhir" id="datepicker2" rows="3" placeholder="tgl berakhir" >
			</div>
			<div class="col-12 text-center mt-4">
				<button class="btn btn-primary btn-lg btn-block" type="submit" style="margin-top:20px;" name="btnsimpan">Tambah Pemesanan</button>

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
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  <script>
 $(document).ready(function() {
///////
 $( "#datepicker" ).datepicker({
dateFormat: 'dd-mm-yy'
})
///////
///////
 $( "#datepicker2" ).datepicker({
dateFormat: 'dd-mm-yy'
});
})
  </script>

<!-- Template Main JS File -->
<script src="../assets/js/main.js"></script>

</body>

</html>
</body>
</html>
<?php
    if (isset($_POST['btnsimpan'])) {
        $id_pemesanan = $_POST['id_pemesanan'];
        $user_id = $_POST['user_id'];
        $kapal_id =$_POST['kapal_id'];
        $pembayaran_id =$_POST['pembayaran_id'];
        $tgl_aktif = date('Y-m-d', strtotime($_POST['tgl_aktif']));
        $tgl_berakhir = date('Y-m-d', strtotime($_POST['tgl_berakhir']));
        $data = mysqli_query($konek, "INSERT INTO pemesanan (id_pemesanan,user_id,kapal_id,pembayaran_id,tgl_aktif,tgl_berakhir) Values('$id_pemesanan','$user_id','$kapal_id','$pembayaran_id','$tgl_aktif','$tgl_berakhir')");
        if ($data) {
            echo "<script>alert('Data berhasil dimasukan '); document.location.href = 'pemesanan.php';</script>";
        } else {
            echo "<script>alert('Data gagal dimasukan ');</script>";
        }
    }
    ?>