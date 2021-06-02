<?php 
require_once "koneksi.php";

if (isset($_GET['id_mobil'])) {

	$id_mobil = $_GET['id_mobil'];
	
	// perintah query untuk menghapus data pada tabel is_siswa
	$query = mysqli_query($koneksi, "DELETE FROM 06_mobil WHERE id_mobil='$id_mobil'");

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil delete data
		header('location: mobil.php?alert=4');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: mobil.php?alert=1');
	}	
}			
?>