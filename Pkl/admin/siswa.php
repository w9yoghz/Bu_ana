<?php
    include '../koneksi.php';
    include 'header.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <style>
        th{
            text-align: center;
        }
    </style>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <script src="../assets/js/bootstrap.js"></script>
</head>
<body>
<div class="panel mt-4 m-2">
        <div class="panel-heading">
            <h4>Daftar Siswa</h4>
        </div>
        <div class="panel-body">
            <a href="tambah_siswa.php" class="btn btn-primary">Tambah Siswa</a>
            <br><br><br>
            <table class="table table-bordered table-striped">
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">NISN</th>
                    <th class="text-center">Nama Siswa</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">Telepon</th>
                    <th class="text-center">Kelas</th>
                    <th class="text-center">Tahun</th>
                    <th class="text-center">Jurusan</th>
                    <th class="text-center">Golongan Darah</th>
                    <th class="text-center">Nama Orang Tua</th>
                    <th class="text-center">Alamat Orang Tua</th>
                    <th class="text-center">Catatan Kesehatan</th>
                    <th class="text-center" width="10%">Opsi</th>
                </tr>
                <?php
                    $data = mysqli_query($koneksi, "SELECT * FROM siswa ORDER BY nisn ASC");
                    $no = 1;
                    while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $d['nisn']; ?></td>
                                <td><?php echo $d['nama_siswa']; ?></td>
                                <td><?php echo $d['alamat']; ?></td>
                                <td><?php echo $d['telp']; ?></td>
                                <td><?php echo $d['kelas']; ?></td>
                                <td><?php echo $d['tahun']; ?></td>
                                <td><?php echo $d['id_jurusan']; ?></td>
                                <td><?php echo $d['golongan_darah']; ?></td>
                                <td><?php echo $d['nama_orangtua']; ?></td>
                                <td><?php echo $d['alamat_orangtua']; ?></td>
                                <td><?php echo $d['catatan_kesehatan']; ?></td>
                                <td>
                                    <a href="edit_siswa.php?id=<?php echo $d['nisn']; ?>" class="btn btn-sm btn-info">Edit</a>
                                    <a href="hapus_siswa.php?id=<?php echo $d['nisn']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php
                    }
                ?>
            </table>
        </div>
    </div>
</div>
</body>
</html>
