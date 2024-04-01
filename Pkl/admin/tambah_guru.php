<?php
    include '../koneksi.php';
    include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Guru</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Tambah Guru</h2>
        <form action="proses_tambah_guru.php" method="POST">
            <div class="mb-3">
                <label for="nip" class="form-label">NIP</label>
                <input type="text" class="form-control" id="nip" name="nip" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Guru</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" required></textarea>
            </div>
            <div class="mb-3">
                <label for="telp" class="form-label">Telepon</label>
                <input type="text" class="form-control" id="telp" name="telp" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="tahun" class="form-label">Tahun</label>
                <input type="text" class="form-control" id="tahun" name="tahun" required>
            </div>
            <div class="mb-3">
                <label for="id_jurusan" class="form-label">Jurusan</label>
                <select class="form-select" id="id_jurusan" name="id_jurusan" required>
                    <option value="">Pilih Jurusan</option>
                    <?php
                        $query_jurusan = mysqli_query($koneksi, "SELECT * FROM jurusan");
                        while ($row = mysqli_fetch_array($query_jurusan)) {
                            echo "<option value='".$row['id_jurusan']."'>".$row['nama_jurusan']."</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" required>
            </div>
            <div class="mb-3">
                <label for="pangkat" class="form-label">Pangkat</label>
                <input type="text" class="form-control" id="pangkat" name="pangkat" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
