<?php
include '../koneksi.php';
    if (isset($_POST['btnsimpan'])) {
        $kategori = $_POST['nama_kategori_kapal'];
        $data = mysqli_query($konek, "INSERT INTO kategori Values('','$kategori')");
        if ($data) {
            echo "<script>alert('Data berhasil dimasukan '); document.location.href = 'kategori.php';</script>";
        } else {
            echo "<script>alert('Data gagal dimasukan ');</script>";
        }
    }
    ?>