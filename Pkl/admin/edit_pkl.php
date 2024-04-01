<?php
include '../koneksi.php';
include 'header.php';

$id_pkl = $_GET['id'];
$query = "SELECT * FROM pkl WHERE id_pkl = '$id_pkl'";
$result = mysqli_query($koneksi, $query);
$pkl = mysqli_fetch_array($result);

if (!$result) {
    die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit PKL</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="panel">
            <div class="panel-heading">
                <h2 class="text-center">Edit Data PKL</h2>
            </div>
            <div class="panel-body">
                <div class="col-md-8 col-md-offset-2">
                    <a href="pkl.php" class="btn btn-sm btn-info pull-right">Kembali</a>
                    <br>
                    <br>
                    <form method="post" action="proses_edit_pkl.php">
                        <input type="hidden" name="id_pkl" value="<?php echo $pkl['id_pkl']; ?>" class="form-control" readonly>
                        <div class="form-group">
                            <label for="nama_pkl">Nama PKL</label>
                            <input type="text" name="nama_pkl" class="form-control" value="<?php echo $pkl['nama_pkl']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" name="alamat" required><?php echo $pkl['alamat']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="quota_pkl">Quota PKL</label>
                            <input type="text" name="quota_pkl" class="form-control" value="<?php echo $pkl['quota_pkl']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="tahun">Tahun</label>
                            <input type="text" name="tahun" class="form-control" value="<?php echo $pkl['tahun']; ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Update Data PKL" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
