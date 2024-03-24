<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Guru</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <style>
        /* Tambahkan gaya tambahan jika diperlukan */
    </style>
</head>
<body>
    <div class="container mt-5">
        <form action="proses_tambah_guru.php" method="post">
            <div class="mb-3">
                <label for="nip" class="form-label">NIP</label>
                <input type="text" class="form-control" id="nip" name="nip" autofocus required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Guru</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
            </div>
            <div class="mb-3">
                <label for="kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" id="kelamin" name="kelamin" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
