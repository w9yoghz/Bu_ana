<?php
    include '../koneksi.php';
    include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input PKL</title>
    <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Form Input PKL</h2>
        <form action="proses_tambah_pkl.php" method="POST">
            <div class="mb-3">
                <label for="nama_pkl" class="form-label">Nama PKL</label>
                <input type="text" class="form-control" id="nama_pkl" name="nama_pkl" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" required></textarea>
            </div>
            <div class="mb-3">
                <label for="quota_pkl" class="form-label">Quota PKL</label>
                <input type="number" class="form-control" id="quota_pkl" name="quota_pkl" required>
            </div>
            <div class="mb-3">
                <label for="tahun" class="form-label">Tahun</label>
                <input type="text" class="form-control" id="tahun" name="tahun" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
<script src="../assets/js/bootstrap/bootstrap.js"></script>
</html>
