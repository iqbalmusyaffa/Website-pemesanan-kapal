<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-3 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-8 col-md-4 col-lg-5 col-xl-6">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-0 text-center">
          <form method="POST" action="" enctype="multipart/form-data">
            <h3 class="mb-10">Sign Up</h3>

            <div class="form-outline mb-0">
            <label class="form-label" for="typeEmailX-2">Fullname</label>
              <input type="text" id="typeFullnameX-2" name="fullname" class="form-control form-control-sm" />
            </div>

            <div class="form-outline mb-0">
            <label class="form-label" for="typeJeniskelaminX-2">Jenis Kelamin</label>
            <select class="form-select form-select-sm " aria-label=".form-select-lg example" name="kelamin">
            <option selected>-</option>
            <option value="1">Laki Laki</option>
            <option value="2">Perempuan</option>
            </select>
            </div>

            <div class="form-outline mb-0">
            <label class="form-label" for="typeEmailX-2">Email</label>
              <input type="email" id="typeEmailX-2" name="email" class="form-control form-control-sm" />
            </div>

            <div class="form-outline mb-0">
            <label class="form-label" for="typeUsernameX-2">Username</label>
              <input type="text" id="typeUsernameX-2" name="username" class="form-control form-control-sm" />
            </div>

            <div class="form-outline mb-0">
            <label class="form-label" for="typeNoteleponX-2">No Telepon</label>
              <input type="text" id="typeNoteleponX-2" name="no_telepon" class="form-control form-control-sm" />
            </div>
        
            <div class="form-outline mb-0">
            <label class="form-label" for="typePasswordX-2">Password</label>
              <input type="text" id="typePasswordX-2" name="password" class="form-control form-control-sm" />
            </div>
            <div class="mb-3">
  <label for="formFileSm" class="form-label">Small file input example</label>
  <input class="form-control form-control-sm" type="file" id="foto" name="nama_file">
</div>
<label class="form-label" for="typeJeniskelaminX-2">Jenis Kelamin</label>
            <select class="form-select form-select-sm " aria-label=".form-select-lg example" name="role">
            <option selected>Pilih role dibawah</option>
            <option value="pembeli">pembeli</option>
            </select>
            <button class="btn btn-primary btn-lg btn-block" type="submit" style="margin-top:20px;" name="btnsignup">Sign Up</button>

            <hr class="my-4">
              <p class="mb-0"> have an account? <a href="login.php" class="text-black-50 fw-bold">Sign In</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
</body>
</html>
<?php
if (isset($_POST['btnsignup'])) {
    $namafolder = "assets/img/team/";
    if (!empty($_FILES["nama_file"]["tmp_name"])) {
    $jenis_gambar = $_FILES['nama_file']['type'];
    $fullname = $_POST['fullname'];
    $kelamin = $_POST['kelamin'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $notelepon = $_POST['no_telepon'];
    $role = $_POST['role'];
    if ($jenis_gambar == "image/jpeg" || $jenis_gambar == "image/jpg" || $jenis_gambar == "image/gif" || $jenis_gambar == "image/png") {
        $foto = $namafolder . basename($_FILES['nama_file']['name']);
        if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $foto)) {
            $sql = ("INSERT INTO user (fullname, kelamin, email, username, password, no_telepon, foto,role) 
            values('$fullname','$kelamin','$email','$username','$password','$notelepon','$foto','$role')");
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
header("location:login.php");
}
?>