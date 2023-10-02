<?php 
// Koneksi Ke DB
$conn = mysqli_connect('localhost','root','','db_pw') or die('Koneksi ke DB GAGAL!');

// Query ke tabel buku
$result = mysqli_query($conn, "SELECT * FROM buku") or die(mysqli_error($conn));

// Siapkan data $buku
$rows = [];
while($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

$buku = $rows;

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
  </head>
  <body>
    
    <div class="container">
      <h1>Daftar Buku</h1>
      
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Cover</th>
            <th scope="col">Judul</th>
            <th scope="col">Penulis</th>
            <th scope="col">Penerbit</th>
          
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; foreach($buku as $bk) : ?>
          <tr>
            <th scope="row" class="align-middle"><?= $i++; ?></th>
            <td class="align-middle">
              <img src="img/<?= $bk["gambar"]; ?>" height="50" class="rounded-circle">
            </td>
            <td class="align-middle"><?= $bk["nama_buku"]; ?></td>
            <td class="align-middle"><?= $bk["penulis"]; ?></td>
            <td class="align-middle"><?= $bk["penerbit"]; ?></td>
         
          
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>