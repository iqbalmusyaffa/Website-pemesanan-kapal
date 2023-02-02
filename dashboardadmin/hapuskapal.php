<?php 
include '../koneksi.php';
$id = $_GET['id'];
$query=("DELETE FROM kapal WHERE id_kapal='$id'");
 mysqli_query($konek, $query);
if ($query) {
        echo "<script>alert('Data berhasil dihapus '); document.location.href = 'kapal.php';</script>";
    } else {
        echo "<script>alert('Data gagal dihapus ');</script>";
}
?>