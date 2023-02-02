<?php
include '../koneksi.php';
$id = $_GET['id'];
$status =$_GET['status'];
$query ="UPDATE pemesanan SET status=$status where id_pemesanan=$id";
mysqli_query($konek,$query);
echo "<script>alert('pemesanan ditolak '); document.location.href = 'pemesanan.php';</script>";
?>