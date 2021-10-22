<?php
//Fungsi dibawah ini merupakan bagian internal PHP untuk membuat koneksi baru ke server MySQL. Dengan database akademik2
$host="localhost";  // Menyiapkan variabel 'host' untuk mendefinisikan nama server
$username="root"; // Menyiapkan variabel 'user' untuk mendefinisikan nama user database MySQL
$password=""; // Menyiapkan variabel 'password' untuk mendefinisikan password database MySQL
$databasename="akademik2"; // Menyiapkan variabel 'database' untuk mendefinisikan nama database MySQL

$con = @mysqli_connect($host,$username,$password,$databasename); // membuat koneksi pada database 

if(!$con){
	// Function mysqli_connect() akan mencoba untuk terhubung ke database sesuai value dari variabel. Jika koneksi tidak berhasil, pesan seperti di bawah ini akan muncul.
	echo "Error:".mysqli_connect_error();
	exit();
}
?>