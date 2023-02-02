
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
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
          <form method="post" action="ceklogin.php"  class="row">
            <h3 class="mb-5">Sign in</h3>
            <?php
                            if (isset($_GET['pesan'])) {
                            ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Login Gagal</strong> <?php echo $_GET['pesan'] ?>
                                </div>
                            <?php } ?>
                            <?php
                            if (isset($_GET['berhasil'])) {
                            ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Log out berhasil</strong> <?php echo $_GET['berhasil'] ?>
                                </div>
                            <?php } ?>
            <div class="form-outline mb-4">
            <label class="form-label" for="typeEmailX-2">Username</label>
              <input type="text" id="username" name="username" class="form-control form-control-lg" />
            </div>

            <div class="form-outline mb-4">
            <label class="form-label" for="typePasswordX-2">Password</label>
              <input type="password" id="password" name="password" class="form-control form-control-lg" />
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label class="form-check-label" for="form1Example3"> Remember password </label>
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnlogin">Login</button>

            <hr class="my-4">
              <p class="mb-0">Don't have an account? <a href="signup.php" class="text-black-50 fw-bold">Sign Up</a>
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


  