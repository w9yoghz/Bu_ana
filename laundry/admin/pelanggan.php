<?php
    include 'header.php';
    include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <script src="../assets/js/bootstrap.js"></script>
    <title>Data Pelanggan</title>
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-center mb-0">Data Pelanggan</h2>
            <a href="tambahpelanggan.php" class="btn btn-success">Tambah Pelanggan</a>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">No. HP</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th> <!-- Kolom Aksi -->
                </tr>
            </thead>
            <tbody>
                <?php
                    // Query data pelanggan dari database
                    $query = "SELECT * FROM pelanggan";
                    $result = mysqli_query($koneksi, $query);

                    if (!$result) {
                        die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                    }

                    $no = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <th scope="row"><?= $no++; ?></th>
                        <td><?= $row['pelanggan_nama']; ?></td>
                        <td><?= $row['pelanggan_hp']; ?></td>
                        <td><?= $row['pelanggan_alamat']; ?></td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
