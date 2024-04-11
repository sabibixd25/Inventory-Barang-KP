<?php 
$koneksi = mysqli_connect("localhost", "root", "@pyth0n25", "inventory");

if (mysqli_connect_errno()) {
	echo "Koneksi gagal".mysqli_connect_error();
}
 ?>