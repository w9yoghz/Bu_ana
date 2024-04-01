<?php
include '../koneksi.php';
include 'header.php';

$id = $_GET['id'];
$query = "SELECT * FROM siswa WHERE nisn = '$id'";
$result = mysqli_query($koneksi, $query);
$s = mysqli_fetch_array($result);

if (!$result) {
    die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
}
if (!$result) {
    die("Query Error: " . mysqli_error($koneksi));
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <script src="../assets/js/bootstrap.js"></script>
    <style>
    </style>
</head>

<body>
    <div class="container">
        <div class="panel">
            <div class="panel-heading">
                <h2 class="text-center">Edit Data Siswa</h2>
            </div>
            <div class="panel-body">
                <div class="col-md-8 col-md-offset-2">
                    <a href="siswa.php" class="btn btn-sm btn-info pull-right">Kembali</a>
                    <br>
                    <br>
                    <form method="post" action="proses_edit_siswa.php">
                        <input type="hidden" name="id" value="<?php echo $s['nisn']; ?>" class="form-control" readonly>
                        <div class="form-group">
                            <label for="nisn">NISN</label>
                            <input type="text" name="nisn" class="form-control" value="<?php echo $s['nisn']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nama_siswa">Nama Siswa</label>
                            <input type="text" name="nama_siswa" class="form-control" value="<?php echo $s['nama_siswa']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" name="alamat" required><?php echo $s['alamat']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="telp">Telepon</label>
                            <input type="text" name="telp" class="form-control" value="<?php echo $s['telp']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input type="text" name="kelas" class="form-control" value="<?php echo $s['kelas']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="tahun">Tahun</label>
                            <input type="text" name="tahun" class="form-control" value="<?php echo $s['tahun']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="id_jurusan">Jurusan</label>
                            <select name="id_jurusan" class="form-control" required>
                                <?php
                                $data_jurusan = mysqli_query($koneksi, "SELECT * FROM jurusan");
                                while ($j = mysqli_fetch_array($data_jurusan)) {
                                    $selected = ($j['id_jurusan'] == $s['id_jurusan']) ? 'selected' : '';
                                    echo "<option value='" . $j['id_jurusan'] . "' $selected>" . $j['nama_jurusan'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="golongan_darah">Golongan Darah</label>
                            <input type="text" name="golongan_darah" class="form-control" value="<?php echo $s['golongan_darah']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_orangtua">Nama Orang Tua</label>
                            <input type="text" name="nama_orangtua" class="form-control" value="<?php echo $s['nama_orangtua']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat_orangtua">Alamat Orang Tua</label>
                            <input type="text" name="alamat_orangtua" class="form-control" value="<?php echo $s['alamat_orangtua']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="catatan_kesehatan">Catatan Kesehatan</label>
                            <input type="text" name="catatan_kesehatan" class="form-control" value="<?php echo $s['catatan_kesehatan']; ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Update Data Siswa" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
