<?php
include '../koneksi.php';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Guru</title>
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
            <h4>Daftar Guru</h4>
        </div>
        <div class="panel-body">
            <div class="mt-2">
                <div class="row">
                    <div class="col-md-2">
                        <a href="tambah_guru.php" class="btn btn-primary">Tambah Guru</a>
                    </div>
                    <div class="col-md-8">
                        <form action="guru.php" method="get">
                            <div class="input-group">
                                <input type="text" name="cari" class="form-control ml-3" placeholder="Cari berdasarkan nama guru..." aria-label="Search" aria-describedby="search-icon" value="<?php if(isset($_GET['cari'])){ echo $_GET['cari'];} ?>">
                                <button class="btn btn-primary" type="submit" id="search-icon"><i class="bi bi-search"></i></button>
                            </div>
                        </form>         
                    </div>
                </div>
            </div>
            <br><br><br>
            <table class="table table-bordered table-striped">
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">NIP</th>
                    <th class="text-center">Nama Guru</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">Telepon</th>
                    <th class="text-center">Password</th>
                    <th class="text-center">Tahun</th>
                    <th class="text-center">ID Jurusan</th>
                    <th class="text-center">Jabatan</th>
                    <th class="text-center">Pangkat</th>
                    <th class="text-center" width="10%">Opsi</th>
                </tr>
                <?php
                    $query = "SELECT * FROM guru";
                    if(isset($_GET['cari'])){
                        $cari = $_GET['cari'];
                        // Filter data guru berdasarkan nama atau NIP yang mengandung nilai pencarian
                        $query .= " WHERE nama LIKE '%$cari%' OR nip LIKE '%$cari%'";
                    }
                    
                    // Urutkan data guru berdasarkan NIP secara ascending
                    $query .= " ORDER BY nip ASC";
                    
                    $result = mysqli_query($koneksi, $query);
                    
                    // Periksa apakah query dieksekusi dengan sukses
                    if(!$result) {
                        die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                    }
                    
                    // Periksa apakah ada data yang ditemukan
                    if(mysqli_num_rows($result) == 0) {
                        echo '<tr><td colspan="11" class="text-center">Data tidak ditemukan</td></tr>';
                    } else {
                        $no = 1;
                        while ($d = mysqli_fetch_array($result)) {
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $d['nip']; ?></td>
                                <td><?php echo $d['nama']; ?></td>
                                <td><?php echo $d['alamat']; ?></td>
                                <td><?php echo $d['telp']; ?></td>
                                <td><?php echo $d['password']; ?></td>
                                <td><?php echo $d['tahun']; ?></td>
                                <td><?php echo $d['id_jurusan']; ?></td>
                                <td><?php echo $d['jabatan']; ?></td>
                                <td><?php echo $d['pangkat']; ?></td>
                                <td>
                                    <a href="edit_guru.php?nip=<?php echo $d['nip']; ?>" class="btn btn-sm btn-info">Edit</a>
                                    <a href="hapus_guru.php?nip=<?php echo $d['nip']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
