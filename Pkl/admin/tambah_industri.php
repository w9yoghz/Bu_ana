<?php
include '../koneksi.php';
include 'header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_industri = $_POST['nama_industri'];
    $nama_pimpinan = $_POST['nama_pimpinan'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];

    $query = "INSERT INTO industri (nama_industri, nama_pimpinan, alamat, telepon) VALUES ('$nama_industri', '$nama_pimpinan', '$alamat', '$telepon')";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    } else {
        header("Location: industri.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Industri</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <script src="../assets/js/bootstrap.js"></script>
</head>
<body>
    <div class="container">
        <h2>Tambah Industri</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="nama_industri">Nama Industri:</label>
                <input type="text" class="form-control" name="nama_industri" required>
            </div>
            <div class="form-group">
                <label for="nama_pimpinan">Nama Pimpinan:</label>
                <input type="text" class="form-control" name="nama_pimpinan" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" name="alamat" required>
            </div>
            <div class="form-group">
                <label for="telepon">Telepon:</label>
                <input type="text" class="form-control" name="telepon" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
