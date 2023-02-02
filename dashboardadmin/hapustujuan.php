<?php 
include '../koneksi.php';
$id = $_GET['id'];
$query=("DELETE FROM tujuan WHERE id_tujuan='$id'");
 mysqli_query($konek, $query);
if ($query) {
        echo "<script>alert('Data berhasil dihapus '); document.location.href = 'tujuan.php';</script>";
    } else {
        echo "<script>alert('Data gagal dihapus ');</script>";
}
?>