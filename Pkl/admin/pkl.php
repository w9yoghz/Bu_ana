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
        <div class=" mt-2">
    <div class="row">
        <div class="col-md-2">
            <a href="tambah_pkl.php" class="btn btn-primary">Tambah PKL</a>
        </div>
        <div class="col-md-8">
            <form action="pkl.php" method="get">
                <div class="input-group">
                    <input type="text" name="cari" class="form-control ml-3" placeholder="Cari berdasarkan nama PKL..." aria-label="Search" aria-describedby="search-icon" value="<?php if(isset($_GET['cari'])){ echo $_GET['cari'];} ?>">
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
                    <th class="text-center">ID PKL</th>
                    <th class="text-center">Nama PKL</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">Quota PKL</th>
                    <th class="text-center">Tahun</th>
                    <th class="text-center" width="10%">Opsi</th>
                </tr>
                <?php
                if (isset($_GET['cari'])){
                    $pencarian = $_GET['cari'];
                    $query = "SELECT * FROM pkl WHERE nama_pkl like '%".$pencarian."%'";
                } else {
                    $query = "SELECT * FROM pkl ORDER BY id_pkl ASC";
                }
                
                    $data = mysqli_query($koneksi, $query);
                    if(mysqli_num_rows($data) == 0) {
                        echo '<tr><td colspan="11" class="text-center">Data tidak ditemukan</td></tr>';
                    } else {
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
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
