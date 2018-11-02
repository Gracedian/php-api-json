<?php 
$user = "root";
$password = "";
$database = "php-api";
$host = "localhost"; 

$connect_db=mysqli_connect($host,$user,$password);
mysqli_select_db($connect_db,$database);

session_start();

if ($connect_db){
	// echo "koneksi host berhasil.";
}else{
	echo "koneksi gagal.";
}
?>