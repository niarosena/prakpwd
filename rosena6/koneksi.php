<?php 
$konek = mysqli_connect("localhost","root","","akademik2"); 
if (!$konek)  { 
    die('Koneksi ke database gagal: ' . mysqli_connect_error()); 
}
?>