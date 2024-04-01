<?php
    include 'header.php';
    include '../koneksi.php';
    if (isset($_GET['nip'])) {
        $nip = ($_GET['nip']);

        $query = "SELECT * FROM guru WHERE nip = '$nip'";

        $result = mysqli_query($koneksi, $query);

            if (!$result) {
                die("Query Error :".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
            }

        $data = mysqli_fetch_assoc($result);
        if (!count($data)) {
            echo "<script>
                alert('Data tidak ditemukan');
                window.location='guru.php';
            </script>";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Edit Guru</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <script type="text/javascript" src="../assets/js/jquery-3.7.1.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
</head>
<body style="background: #f0f0f0">
    <div class="container">
        <div class="panel">
            <div class="panel-body">
                <h1> Edit data guru </h1><br>
                <a href="guru.php">
                <input type="submit" value="Kembali" class="btn btn-primary pull-right"><br></a>
                     <form method="POST" action="prosesedit_guru.php">
                        <div class="form-group">
                            <input type="hidden" name="nip" class="form-control" value="<?php echo $data['nip']  ?>" hidden>
                        </div>

                        <div class="form-group">
                            <label>Nama Guru</label>
                            <input name="nama" class="form-control" value="<?php echo $data['nama']  ?>">
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <input name="alamat" class="form-control" value="<?php echo $data['alamat']  ?>">
                        </div>

                        <div class="form-group">
                            <label>Telepon</label>
                            <input name="telp" class="form-control" value="<?php echo $data['telp']  ?>">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" class="form-control" value="<?php echo $data['password']  ?>">
                        </div>

                        <div class="form-group">
                            <label>Tahun</label>
                            <input name="tahun" class="form-control" value="<?php echo $data['tahun']  ?>">
                        </div>

                        <div class="form-group">
                            <label for="id_jurusan">ID Jurusan</label>
                                <select name="id_jurusan" id="id_jurusan" class="form-control">
                                    <?php
                                    $koneksi = mysqli_connect("localhost", "root", "", "db_pkl_sistem");
                                    if(mysqli_connect_errno()) {
                                        echo "koneksi database gagal : " . mysqli_connect_errno();
                                    }
                                    $sql = "SELECT * FROM jurusan";
                                    $result = mysqli_query($koneksi, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<option value='" . $row['id_jurusan'] . "'>" . $row['nama_jurusan'] . "</option>";
                                    }
                                    ?>
                                </select>
                        </div>

                        <div class="form-group">
                            <label>Jabatan</label>
                            <input name="jabatan" class="form-control" value="<?php echo $data['jabatan']  ?>">
                        </div>

                        <div class="form-group">
                            <label>Pangkat</label>
                            <input name="pangkat" class="form-control" value="<?php echo $data['pangkat']  ?>">
                        </div><br>

                        <input type="submit" value="Ubah" class="btn btn-primary">
                        </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>