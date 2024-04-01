<?php
include '../koneksi.php';
include 'header.php';

$id = $_GET['id'];
$query = "SELECT * FROM industri WHERE id_industri = '$id'";
$result = mysqli_query($koneksi, $query);
$industri = mysqli_fetch_array($result);

if (!$result) {
    die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Industri</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="panel">
            <div class="panel-heading">
                <h2 class="text-center">Edit Data Industri</h2>
            </div>
            <div class="panel-body">
                <div class="col-md-8 col-md-offset-2">
                    <a href="industri.php" class="btn btn-sm btn-info pull-right">Kembali</a>
                    <br><br>
                    <form method="post" action="proses_edit_industri.php">
                        <input type="hidden" name="id" value="<?php echo $industri['id_industri']; ?>">
                        <div class="form-group">
                            <label for="nama_industri">Nama Industri</label>
                            <input type="text" name="nama_industri" class="form-control" value="<?php echo $industri['nama_industri']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_pimpinan">Nama Pimpinan</label>
                            <input type="text" name="nama_pimpinan" class="form-control" value="<?php echo $industri['nama_pimpinan']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="<?php echo $industri['alamat']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="telepon">Telepon</label>
                            <input type="text" name="telepon" class="form-control" value="<?php echo $industri['telepon']; ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Update Data Industri" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
