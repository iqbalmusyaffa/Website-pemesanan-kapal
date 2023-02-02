<?php 
include '../koneksi.php';
$id = $_GET['id'];
$query=("DELETE FROM pemesanan WHERE id_pemesanan='$id'");
 mysqli_query($konek, $query);
if ($query) {
        echo "<script>alert('Data berhasil dihapus '); document.location.href = 'pemesanan.php';</script>";
    } else {
        echo "<script>alert('Data gagal dihapus ');</script>";
}
?>