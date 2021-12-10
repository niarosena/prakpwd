<?php
    // Create database connection using config file
    include_once("koneksi.php");
    // Fetch all users data from database
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

    <title>CRUD (CREATE READ UPDATE DELETE) PRAKTIK3 PWD</title>
  </head>
  <body>
    <div class="container">
        <h1>Data Mahasiswa</h1>
        <a href="tambah.php" class="btn btn-success btn-sm m-2"> Tambah </a>
        <a href="lap_mhs.php" class="btn btn-success btn-sm m-2"> Print </a>

        <table class="table">
            <thead>
                <tr>
                    <th>nim</th> 
                    <th>nama</th> 
                    <th>jkelamin</th> 
                    <th>alamat</th> 
                    <th>ttl</th> 
                    <th>kelas</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while($user_data = mysqli_fetch_array($result)) { 
                        echo "<tr>";
                        echo "<td>".$user_data['nim']."</td>";
                        echo "<td>".$user_data['nama']."</td>";
                        echo "<td>".$user_data['jkelamin']."</td>";
                        echo "<td>".$user_data['alamat']."</td>"; 
                        echo "<td>".$user_data['ttl']."</td>"; 
                        echo "<td>".$user_data['kelas']."</td>"; 
                        echo "<td><a href='edit.php?nim=$user_data[nim]'>Edit</a> | <a 
                        href='delete.php?nim=$user_data[nim]'>Delete</a></td></tr>"; 
                    }
                ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>


