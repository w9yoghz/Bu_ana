<?php
    include '../koneksi.php';
    include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Tambah Siswa</h2>
        <form action="proses_tambah_siswa.php" method="POST">
            <div class="mb-3">
                <label for="nisn" class="form-label">NISN</label>
                <input type="text" class="form-control" id="nisn" name="nisn" required>
            </div>
            <div class="mb-3">
                <label for="nama_siswa" class="form-label">Nama Siswa</label>
                <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" required>
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
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas" required>
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
                <label for="golongan_darah" class="form-label">Golongan Darah</label>
                <input type="text" class="form-control" id="golongan_darah" name="golongan_darah" required>
            </div>
            <div class="mb-3">
                <label for="nama_orangtua" class="form-label">Nama Orang Tua</label>
                <input type="text" class="form-control" id="nama_orangtua" name="nama_orangtua" required>
            </div>
            <div class="mb-3">
                <label for="alamat_orangtua" class="form-label">Alamat Orang Tua</label>
                <input type="text" class="form-control" id="alamat_orangtua" name="alamat_orangtua" required>
            </div>
            <div class="mb-3">
                <label for="catatan_kesehatan" class="form-label">Catatan Kesehatan</label>
                <input type="text" class="form-control" id="catatan_kesehatan" name="catatan_kesehatan" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
