<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);
 
// menyeleksi data admin dengan username dan password yang sesuai
$data =  mysqli_query($konek,"select * from user where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0)
	$data = mysqli_fetch_assoc($data);
 
	// cek jika user login sebagai admin
	if($data['role']=="admin"){
		// buat session login dan username
        $_SESSION["id_user"] = $data ['id_user'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['foto'] = $data['foto'];
		$_SESSION['harga'] = $data['harga'];
		$_SESSION['role'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:dashboardadmin/dashboard_admin.php");
 
	// cek jika user login sebagai pengurus
	}else if($data['role']=="pembeli"){
		// buat session login dan username
        $_SESSION["id_user"] = $data ['id_user'];
		$_SESSION['username'] = $data['username'];
        $_SESSION['foto'] = $data['foto'];
		$_SESSION['role'] = "pembeli";
		// alihkan ke halaman dashboard pengurus
		header("location:dashboarduser/dashboard_user.php");
}else{
	header("location:login.php?pesan=username atau password salah");
}
?>