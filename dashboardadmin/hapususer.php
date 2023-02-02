<?php 
include '../koneksi.php';
$id = $_GET['id'];
$query=("DELETE FROM user WHERE id_user='$id'");
 mysqli_query($konek, $query);
if ($query) {
        echo "<script>alert('Data berhasil dihapus '); document.location.href = 'detailuser.php';</script>";
    } else {
        echo "<script>alert('Data gagal dihapus ');</script>";
}
?>