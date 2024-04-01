<?php
include 'header.php';
include '../koneksi.php';

if (isset($_GET['id_jurusan'])) {
    $id = $_GET['id_jurusan'];

    $query = "SELECT * FROM jurusan WHERE id_jurusan = '$id'";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    }

    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
    } else {
        echo "<script>
              alert('Data tidak ditemukan');
              window.location.href = 'jurusan.php';
              </script>";
        exit;
    }
} else {
    echo "<script>
          window.location.href = 'jurusan.php';
          </script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Edit Jurusan</title>
   <link rel="stylesheet" href="../assets/css/bootstrap.css">
   <script src="../assets/js/bootstrap.js"></script>
</head>
<body>
   <div class="container">
      <div class="panel">
         <div class="panel-heading">
            <h2 class="text-center">Edit Data Jurusan</h2>
         </div>
         <div class="panel-body">
            <div class="col-md-8 col-md-offset-2">
               <a href="jurusan.php" class="btn btn-sm btn-info pull-right">Kembali</a>
               <br><br>
               <form method="post" action="proses_edit_jurusan.php">
                  <div class="form-group">
                     <input type="hidden" name="id_jurusan" class="form-control" value="<?php echo $data['id_jurusan']; ?>">
                  </div>
                  <div class="form-group">
                     <label for="nama_jurusan">Nama Jurusan</label>
                     <input type="text" name="nama_jurusan" class="form-control" value="<?php echo $data['nama_jurusan']; ?>" required>
                  </div>
                  <div class="form-group">
                     <input type="submit" value="Update Data Jurusan" class="btn btn-primary">
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</body>
</html>
