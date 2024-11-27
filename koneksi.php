<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "surat_jalan_db";

$koneksi = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno()) {
	echo "Koneksi Database gagal: " . mysqli_connect_error();
}
?>