<?php
session_start();
if($_SESSION['role']==""){
    header("location:../login.php?pesan=gagal");
}
include '../koneksi.php';
?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='https://www.w3.org/1999/xhtml'>
<head>
<title>Invoice Pemesanan Kapal</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<?php
                    $id = $_GET['id'];
                    $data = mysqli_query($konek, "SELECT * FROM pemesanan INNER JOIN user ON pemesanan.user_id = user.id_user 
                    INNER JOIN kapal ON pemesanan.kapal_id = kapal.id_kapal
                    INNER JOIN kategori ON kapal.kategori_kapal = kategori.id_kategori 
                    INNER JOIN tujuan ON kapal.tujuan_kapal = tujuan.id_tujuan 
                    INNER JOIN pembayaran ON pemesanan.pembayaran_id = pembayaran.id_pembayaran
                    where id_pemesanan='$id'
                    ");
                    $no = 1;
                    while ($data1 = mysqli_fetch_array($data)) {
                    ?>
<body style='font-family:Tahoma;font-size:12px;color: #333333;background-color:#FFFFFF;'>
<table align='center' border='0' cellpadding='0' cellspacing='0' style='height:842px; width:595px;font-size:12px;'>
  <tr>
    <td valign='top'><table width='100%' cellspacing='0' cellpadding='0'>
        <tr>
          <td valign='bottom' width='50%' height='50'><div align='left'><img src='../assets/img/logo.png' width='50%' height='100' /></div><br /></td>

          <td width='50%'>&nbsp;</td>
        </tr>
      </table>Pelanggan: <?php echo $data1['fullname'] ?><br/><br/>
      <table width='100%' cellspacing='0' cellpadding='0'>
      <tr>
        <td valign='top' width='35%' style='font-size:12px;'> <strong ><?php echo $data1['fullname'] ?></strong><br /> <br/>

</td>
        <td valign='top' width='35%'>
</td>
        <td valign='top' width='30%' style='font-size:12px;'>Tanggal: <?php echo $data1['tgl_aktif'] ?><br/>
		Jatuh tempo: <?php echo $data1['tgl_berakhir'] ?> <br/>
		
		
		</td>

      </tr>
    </table>
    <table width='100%' height='100' cellspacing='0' cellpadding='0'>
      <tr>
        <td><div align='center' style='font-size: 14px;font-weight: bold;'>Invoice # <?php echo $data1['id_pemesanan'] ?> </div></td>
      </tr>
    </table>
<table width='100%' cellspacing='0' cellpadding='2' border='1' bordercolor='#CCCCCC'>
      <tr>

        <td width='35%' bordercolor='#ccc' bgcolor='#f2f2f2' style='font-size:12px;'><strong>No ticket</strong></td>
        <td bordercolor='#ccc' bgcolor='#f2f2f2' style='font-size:12px;'><strong>nama_pemesanan</strong></td>
        <td bordercolor='#ccc' bgcolor='#f2f2f2' style='font-size:12px;'><strong>nama_kategori_kapal </strong></td>
        <td bordercolor='#ccc' bgcolor='#f2f2f2' style='font-size:12px;'><strong>nama_kapal</strong></td>
        <td bordercolor='#ccc' bgcolor='#f2f2f2' style='font-size:12px;'><strong>nama_tujuan</strong></td>
        <td bordercolor='#ccc' bgcolor='#f2f2f2' style='font-size:12px;'><strong>methode_pembayaran</strong></td>
        <td bordercolor='#ccc' bgcolor='#f2f2f2' style='font-size:12px;'><strong>tgl_aktif</strong></td>
        <td bordercolor='#ccc' bgcolor='#f2f2f2' style='font-size:12px;'><strong>tgl_berakhir</strong></td>
        <td bordercolor='#ccc' bgcolor='#f2f2f2' style='font-size:12px;'><strong>harga_id</strong></td>
  
        </tr>
      <tr style="display:none;"><td colspan="*"><tr>

<td valign='top' style='font-size:12px;'><?php echo $no++ ?></td>
<td valign='top' style='font-size:12px;'><?php echo $data1['fullname'] ?></td>
<td valign='top' style='font-size:12px;'><?php echo $data1['nama_kategori_kapal'] ?></td>
<td valign='top' style='font-size:12px;'><?php echo $data1['nama_kapal'] ?></td>
<td valign='top' style='font-size:12px;'><?php echo $data1['tujuan'] ?></td>
<td valign='top' style='font-size:12px;'><?php echo $data1['pembayaran'] ?></td>
<td valign='top' style='font-size:12px;'><?php echo $data1['tgl_aktif'] ?></td>
<td valign='top' style='font-size:12px;'><?php echo $data1['tgl_berakhir'] ?></td>
<td valign='top' style='font-size:12px;'><?php echo "Rp " . number_format($data1['harga'] )?></td>


</tr><tr>
    </table>
<table width='100%' cellspacing='0' cellpadding='2' border='0'>
      <tr>
        <td style='font-size:12px;width:50%;'><strong> </strong></td>
        <td><table width='100%' cellspacing='0' cellpadding='2' border='0'>
  <tr>

    <td  align='right' style='font-size:12px;'><b>Total</b></td>
    <td  align='right' style='font-size:12px;'><b><?php echo "Rp " . number_format($data1['harga'] )?></b></td>
  </tr></table>
</td>
      </tr>
</table> 
<center><b><p>Konfirmasi Pembayaran bisa melalui admin</p></center>
<center><img src='../assets/img/qrcode admin.png' width='25%' height='200' /></center>
<b><p>Pembayaran bisa melalui</p>
   <img src='assets/img/pembayaran/dana.png' width='25%' height='50' />
   <b><p> No Dana : 087765079444</p><b>
   <img src='assets/img/pembayaran/Cara-Pakai-OVO.jpg' width='25%' height='100' />
   <p> No OVO : 087765079444</p>
   <img src='assets/img/pembayaran/linkaja.png' width='25%' height='100' />
   <p> No Link aja : 087765079444</p>
   <img src='assets/img/pembayaran/1081027ebaed20dc6155d99946411a8721f1de6224d0b646a5c767072dfb1afb.png' width='25%' height='100' />
   <p> No Shoppepay : 087765079444</p>
   <img src='assets/img/pembayaran/1200px-Bank_Central_Asia.svg.png' width='25%' height='100' />
   <p> No BCA : 087765079444</p>
   <table width='100%' height='50'><tr><td style='font-size:12px;text-align:justify;'></td></tr></table>
    <table  width='100%' cellspacing='0' cellpadding='2'>
      <tr>
        <td width='33%' style='border-top:double medium #CCCCCC;font-size:12px;' valign='top' ><b>East Horizon Trip</b><br/>


</td>
        <td width='33%' style='border-top:double medium #CCCCCC; font-size:12px;' align='center' valign='top'>
        ADMIN EastHorizonTrip
Jawa Timur, Indonesia
Surabaya <br/>
Telepon: +62 877 650 79444<br/>
Email : info@easthorizontrip.co.id
</td>

        <td valign='top' width='34%' style='border-top:double medium #CCCCCC;font-size:12px;' align='right'><br/>     
 </td>
      </tr>
    </table>
</td>
<?php } ?>
  </tr>
</table>
<script>
		window.print();
	</script>
	
</body>
</html>