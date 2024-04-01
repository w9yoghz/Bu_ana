<?php
    include '../koneksi.php';
    include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar PKL</title>
    <style>
        th {
            text-align: center;
        }
    </style>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <script src="../assets/js/bootstrap.js"></script>
</head>
<body>
    <div class="panel mt-4 m-2">
        <div class="panel-heading">
            <h4>Daftar PKL</h4>
        </div>
        <div class="panel-body">
            <a href="tambah_pkl.php" class="btn btn-primary">Tambah PKL</a>
            <br><br><br>
            <table class="table table-bordered table-striped">
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">ID PKL</th>
                    <th class="text-center">Nama PKL</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">Quota PKL</th>
                    <th class="text-center">Tahun</th>
                    <th class="text-center" width="10%">Opsi</th>
                </tr>
                <?php
                    $data = mysqli_query($koneksi, "SELECT * FROM pkl ORDER BY id_pkl ASC");
                    $no = 1;
                    while ($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $d['id_pkl']; ?></td>
                    <td><?php echo $d['nama_pkl']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td><?php echo $d['quota_pkl']; ?></td>
                    <td><?php echo $d['tahun']; ?></td>
                    <td>
                        <a href="edit_pkl.php?id=<?php echo $d['id_pkl']; ?>" class="btn btn-sm btn-info">Edit</a>
                        <a href="hapus_pkl.php?id=<?php echo $d['id_pkl']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
