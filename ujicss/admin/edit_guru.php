<?php
include 'koneksi.php';

if (isset($_GET['nip'])) {
    $nip = $_GET['nip'];
    $query = "SELECT * FROM t_guru WHERE nip = '$nip'";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    }

    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
    } else {
        echo "<script>
                alert('Data tidak ditemukan');
                window.location='index.php';
              </script>";
        exit; // Keluar dari skrip
    }
} else {
    echo "<script>
            alert('Masukkan NIP');
            window.location='index.php';
          </script>";
    exit; // Keluar dari skrip
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="tambah.css">
    <title>Ubah Guru</title>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">EDIT GURU</h1>
            </div>
            <div class="card-body">
                <form action="proses_edit_guru.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nip" class="form-label">NIP</label>
                        <input type="text" name="nip" class="form-control" value="<?= $data['nip'] ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" value="<?= $data['tgl_lahir'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="kelamin" class="form-label">Jenis Kelamin</label>
                        <select name="kelamin" class="form-select">
                            <option value="Laki-laki" <?= ($data['kelamin'] == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                            <option value="Perempuan" <?= ($data['kelamin'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea name="alamat" class="form-control"><?= $data['alamat'] ?></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Simpan perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</body>

</html>
