<?php 
include '../koneksi.php';
$id = $_GET['id'];
$query=("DELETE FROM pembayaran WHERE id_pembayaran='$id'");
 mysqli_query($konek, $query);
if ($query) {
        echo "<script>alert('Data berhasil dihapus '); document.location.href = 'pembayaran.php';</script>";
    } else {
        echo "<script>alert('Data gagal dihapus ');</script>";
}
?>