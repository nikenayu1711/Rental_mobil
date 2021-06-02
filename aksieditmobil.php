<?php
$koneksi=mysqli_connect("trunojoyopython.com","trunojoy_kuliah","unijoyo2021","trunojoy_hotel");
$id=$_GET['id_mobil'];
$namamobil= $_GET['namamobil'];
$plat= $_GET['plat'];
$harga = $_GET['harga'];
$update="UPDATE mobil SET namamobil='$namamobil',plat='$plat',harga='$harga' WHERE id_mobil='$id' ";
$hasil=mysqli_query($koneksi, $update);
if($hasil) {
 header("location:mobil.php"); }
else {
 echo "Maaf gagal edit"; }
?>