<?php
include '../koneksi.php';
include 'header.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Industri</title>
  
  <link href="../assets/css/bootstrap/bootstrap.css" rel="stylesheet">
</head>
<body>

<div class="container">
  <h1 class="mt-5 fw-bold mb-4">Daftar Industri</h1>
  <a href="tambah_industri.php" class="btn btn-primary">Tambah Industri</a>
  <br><br>
  <table class="table table-bordered">
    <thead>
      <tr class="text-center">
        <th scope="col" width="10%">No</th>
        <th scope="col">ID Industri</th>
        <th scope="col">Nama Industri</th>
        <th scope="col">Nama Pimpinan</th>
        <th scope="col">Alamat</th>
        <th scope="col">Telepon</th>
        <th scope="col" width="20%">Aksi</th> 
      </tr>
    </thead>
    <tbody>
      <?php
        // Query untuk menampilkan data industri
        $query = "SELECT * FROM industri";
        $result = mysqli_query($koneksi, $query);

        if (!$result) {
            die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
        }

        $no = 1;
        while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <tr class="text-center">
        <th scope="row"><?= $no++; ?></th>
        <td><?= $row['id_industri']; ?></td>
        <td><?= $row['nama_industri']; ?></td>
        <td><?= $row['nama_pimpinan']; ?></td>
        <td><?= $row['alamat']; ?></td>
        <td><?= $row['telepon']; ?></td>
        <td>
          <a href="edit_industri.php?id=<?= $row['id_industri']; ?>" class="btn btn-warning">Edit</a>
          <a href="hapus_industri.php?id=<?= $row['id_industri']; ?>" class="btn btn-danger">Hapus</a>
        </td>
      </tr>
      <?php
        }
      ?>
    </tbody>
  </table>
</div>

<script src="../assets/js/bootstrap/bootstrap.js"></script>
</body>
</html>
