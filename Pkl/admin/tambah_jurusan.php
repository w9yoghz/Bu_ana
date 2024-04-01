<?php
    include '../koneksi.php';
    include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jurusan</title>
    <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Tambah Jurusan</h2>
        <form action="proses_tambah_jurusan.php" method="POST">
            <div class="mb-3">
                <label for="nama_jurusan" class="form-label">Nama Jurusan:</label>
                <input type="text" class="form-control" id="nama_jurusan" name="nama_jurusan" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Jurusan</button>
        </form>
    </div>
</body>
</html>
