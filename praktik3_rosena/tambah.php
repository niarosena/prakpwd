<?php
    // membuat koneksi database dengan menggunakan file konfigurasi
    include_once("koneksi.php");
    // Ambil semua data pengguna dari database pada tabel mahasiswa
    $result = mysqli_query($con, "SELECT * FROM mahasiswa ");
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD pwd3</title>
  </head>
  <body>
 <a href="index.php">Go to Home</a>
 <br/><br/>
 <tr> 
 <body>
    <div class="container">
        <h1>Tambah Data Mahasiswa</h1>
        <a href="index.php" class="btn btn-success btn-sn m-2"> Data </a>

        <div class="row">
            <div class="col">
                
            </div>
        </div>
        <!--membuat form tabel atribut untuk melakukan penambahan data -->
        <form action="" method="post">
            <div class="form.group">
                <label>Nim</label>
                <input type="number" name="nim" class="form-control" required>
            </div>
            <div class="form.group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="form.group">
                <label>Gender (L/P)</label>
                <input type="text" name="jkelamin" class="form-control" required>
            </div>
            <div class="form.group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" required>
            </div>
            <div class="form.group">
                <label>Tgl Lahir</label>
                <input type="date" name="ttl" class="form-control" required>
            </div>
           <td><input type="submit" name="Submit" class="btn btn-success btn-sm m-2" value="Tambah"></td>
        </form>
    </div>
 
 </tr>
 
<?php
 // cek jika form dikirimkan, masukkan data formulir ke dalam tabel pengguna
    if(isset($_POST['Submit'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jkelamin = $_POST['jkelamin'];
        $alamat = $_POST['alamat'];
        $ttl = $_POST['ttl'];
 // masuk ke file koneksi database
    include_once("koneksi.php");
 // perintah untuk memsukkan data ke dalam tabel
        $result = mysqli_query($con, "INSERT INTO mahasiswa(nim,nama,jkelamin,alamat,ttl) 
    VALUES('$nim','$nama', '$jkelamin','$alamat','$ttl')");
// Tampilkan pesan saat pengguna menambahkan
        echo "Data berhasil disimpan. <a href='index.php'>View Users</a>";
}
?>
</body>
</html>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
