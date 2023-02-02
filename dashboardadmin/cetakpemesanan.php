<?php
session_start();
if($_SESSION['role']==""){
    header("location:../login.php?pesan=gagal");
}
include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>MEMBUAT CETAK PRINT LAPORAN DENGAN PHP - WWW.MALASNGODING.COM</title>
</head>
<body>
 
<?php
                    $id = $_GET['id'];
                    $data = mysqli_query($konek, "SELECT  *FROM pemesanan INNER JOIN user ON pemesanan.nama_pemesanan = user.id_user 
                    INNER JOIN kategori ON pemesanan.nama_kategori_kapal = kategori.id_kategori
                    INNER JOIN kapal ON pemesanan.nama_kapal = kapal.id_kapal
                    INNER JOIN tujuan ON pemesanan.nama_tujuan = tujuan.id_tujuan
                    INNER JOIN pembayaran ON pemesanan.methode_pembayaran = pembayaran.id_pembayaran where id_pemesanan='$id'");
                    $no = 1;
                    while ($data1 = mysqli_fetch_array($data)) {
                    ?>
	<center>
		<h2>TUTORIAL CETAK PRINT LAPORAN DENGAN PHP</h2>
		<h4>CONTOH LAPORAN YANG DI PRINT - WWW.MALASNGODING.COM</h4>
	</center>               <td><?php echo $no++ ?></td>
                            <td><?php echo $data1['fullname'] ?></td>
                            <td><?php echo $data1['nama_kategori_kapal'] ?></td>  
                            <td><?php echo $data1['nama_kapal'] ?></td>
                            <td><?php echo $data1['pembayaran'] ?></td>
                            <td><?php echo $data1['tgl_aktif'] ?></td>
                            <td><?php echo $data1['tgl_berakhir'] ?></td>
                            <td><?php echo "Rp " . number_format($data1['harga'] )?></td>
                         
	<br/>
    <?php } ?>
	<p> 
	</p>
 
	<p>
		Ini adalah contoh data yang diprint pada tutorial <b>MEMBUAT CETAK PRINT LAPORAN DENGAN PHP</b> dari <b>www.malasngoding.com</b>, halaman ini akan dicetak sesuai dengan format HTML yang terdapat dalam file cetak1.php ini.
	</p>
	<script>
		window.print();
	</script>
	
</body>
</html>