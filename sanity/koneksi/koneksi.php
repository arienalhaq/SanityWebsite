<?php
$koneksi=mysqli_connect("127.0.0.1:3307", "root","","vuecrud");
//check connection
if(!$koneksi){
	die("Error koneksi: ". mysqli_connect_errno());
}
?>