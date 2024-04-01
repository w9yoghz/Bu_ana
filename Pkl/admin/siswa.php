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
        <div class=" mt-2">
            <div class="row">
                <div class="col-md-2">
                <a href="tambah_siswa.php" class="btn btn-primary">Tambah Siswa</a>
                </div>
                <div class="col-md-8">
                
                    <form action="siswa.php" method="get">
                    <div class="input-group">
                        <input type="text" name="cari" class="form-control ml-3" placeholder="Cari berdasarkan nama..." aria-label="Search" aria-describedby="search-icon" value="<?php if(isset($_GET['cari'])){ echo $_GET['cari'];} ?>">
                        <button class="btn btn-primary" type="submit" id="search-icon"><i class="bi bi-search"></i></button>
                    </div>
                    </form>         
                
                </div>
            </div>
            </div>
            <br><br>
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
                    if (isset($_GET['cari'])){
                        $pencarian = $_GET['cari'];
                        $query = "SELECT * FROM siswa WHERE nama_siswa like '%".$pencarian."%'";
                    } else {
                        $query = "SELECT * from siswa  ";
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
                }
                ?>
            </table>
        </div>
    </div>
</div>
</body>
</html>
