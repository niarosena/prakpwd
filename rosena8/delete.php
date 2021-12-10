<?php
// membuat koneksi database dengan menggunakan file koneksi.php
include_once("koneksi.php");
// perintah untuk mendapatkan id dari URL untuk menghapus 
$nim = $_GET['nim'];

// kita menghapus data dengan perintah mysql DELETE FROM user WHEE id='$nim'.
$result = mysqli_query($con, "DELETE FROM mahasiswa WHERE nim='$nim'");
// dan terakhir kita alihkan halaman nya kembali ke index.php setelah menghapus data..
header("Location:index.php");
?>