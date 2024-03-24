<?php
    include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pelanggan</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <script src="../assets/js/bootstrap.js"></script>
</head>
<body>
    <div class="container mt-5">
        <form action="proses_tambah_pelanggan.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <h1 class="text-center">TAMBAH PELANGGAN</h1>
            </div>
            <div class="mb-2">
                <label for="pelanggan_id" class="form-label">ID Pelanggan</label>
                <input type="text" class="form-control" id="pelanggan_id" name="pelanggan_id" autofocus required>
            </div>
            <div class="mb-3">
                <label for="pelanggan_nama" class="form-label">Nama Pelanggan</label>
                <input type="text" class="form-control" id="pelanggan_nama" name="pelanggan_nama" required>
            </div>
            <div class="mb-3">
                <label for="pelanggan_hp" class="form-label">Nomor HP</label>
                <input type="text" class="form-control" id="pelanggan_hp" name="pelanggan_hp" required>
            </div>
            <div class="mb-3">
                <label for="pelanggan_alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="pelanggan_alamat" name="pelanggan_alamat" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Simpan data</button>
            </div>
        </form>
    </div>
</body>
</html>
