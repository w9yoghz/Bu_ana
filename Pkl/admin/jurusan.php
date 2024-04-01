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

<div class="panel mt-4 m-2">
  <h1 class="mt-5 fw-bold mb-4">Daftar Jurusan</h1>
  <div class=" mt-2">
    <div class="row">
        <div class="col-md-2">
            <a href="tambah_jurusan.php" class="btn btn-primary">Tambah Jurusan</a>
        </div>
        <div class="col-md-8">
            <form action="jurusan.php" method="get">
                <div class="input-group">
                    <input type="text" name="cari" class="form-control ml-3" placeholder="Cari berdasarkan nama jurusan..." aria-label="Search" aria-describedby="search-icon" value="<?php if(isset($_GET['cari'])){ echo $_GET['cari'];} ?>">
                    <button class="btn btn-primary" type="submit" id="search-icon"><i class="bi bi-search"></i></button>
                </div>
            </form>         
        </div>
    </div>
</div>

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
        if (isset($_GET['cari'])){
          $pencarian = $_GET['cari'];
          $query = "SELECT * FROM jurusan WHERE nama_jurusan like '%".$pencarian."%'";
      } else {
          $query = "SELECT * from jurusan  ";
      }
        $result = mysqli_query($koneksi, $query);

        if (!$result) {
            die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
        }

        if(mysqli_num_rows($result) == 0) {
          echo '<tr><td colspan="11" class="text-center">Data tidak ditemukan</td></tr>';
      } else {
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
      }
                ?>
      
    </tbody>
  </table>
</div>

<script src="../assets/js/bootstrap/bootstrap.js"></script>
</body>
</html>
