<!DOCTYPE html>
<html>
<head>
	<title>no 4 dan 5</title>
</head>
<body>

<?php
$servername = 'trunojoyopython.com';
$username = 'trunojoy_kuliah';
$password = 'unijoyo2021';
$database = 'trunojoy_hotel';
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$id_mobil = $_POST['id_mobil'];
$namamobil = $_POST['namamobil'];
$plat = $_POST['plat'];
$harga = $_POST['harga'];
$sql="INSERT into 06_mobil(id_mobil, namamobil, plat, harga) values('$id_mobil','$namamobil', '$plat',  '$harga')";
if (empty($id_mobil)or empty($namamobil) or empty($plat)   or empty($harga)) {
	echo "inputan tidak valid, mohon kembali isi from";
} else {
	$result = $conn->query($sql);
	header('location:mobil.php');
}
?>
<a href="mobil.php"> kembali ke menu utama</a>
</body>
</html>