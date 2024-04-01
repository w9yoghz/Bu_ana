<?php
    include '../koneksi.php';
    include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Jurusan</title>
  
  <link href="../assets/css/bootstrap/bootstrap.css" rel="stylesheet">
</head>
<body>

<div class="container">
  <h1 class="mt-5 fw-bold mb-4">Daftar Jurusan</h1>
  <a href="tambah_jurusan.php" class="btn btn-primary">Tambah Jurusan</a>
  <br><br>
  <table class="table table-bordered">
    <thead>
      <tr class="text-center">
        <th scope="col" width="10%">No</th>
        <th scope="col">id Jurusan</th>
        <th scope="col">Nama Jurusan</th>
        <th scope="col" width="20%">Aksi</th> 
      </tr>
    </thead>
    <tbody>
      <?php
        // Koneksi ke database
        
        
        $query = "SELECT * FROM jurusan";
        $result = mysqli_query($koneksi, $query);

        if (!$result) {
            die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
        }

            $no = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr class="text-center">
                        <th scope="row"><?= $no++; ?></th>
                        <td><?= $row['id_jurusan']; ?></td>
                        <td><?= $row['nama_jurusan']; ?></td>
                        <td>
                        <a href="edit_jurusan.php?id_jurusan=<?php echo $row['id_jurusan']; ?>" class="btn btn-warning">Edit</a>
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
