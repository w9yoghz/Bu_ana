<?php
include '../koneksi.php';
include 'header.php';

$id = $_GET['id'];
$query = "SELECT * FROM transaksi where transaksi_id = '$id'";
$result = mysqli_query($koneksi, $query);
$t = mysqli_fetch_array($result);

if (!$result) {
    die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah transaksi</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <script src="../assets/js/bootstrap.js"></script>
    <style>
    </style>
</head>

<body>
    <div class="container">
        <div class="panel">
            <div class="panel-heading">
                <h2 class="text-center">Edit Transaksi Laundry</h2>
            </div>
            <div class="panel-body">
                <div class="col-md-8 col-md-offset-2">
                    <a href="transaksi.php" class="btn btn-sm btn-info pull-right">Kembali</a>
                    <br>
                    <br>
                    <?php
                    
                    ?>
                        <form method="post" action="proses_edit_tr4.php">
                            <!-- <label for="">Id transaksi</label> -->
                            <input type="hidden" name="id" value="<?php echo $t['transaksi_id']; ?>" class="form-control" readonly>
                            <div class="form-group">
                                <label for="Pelanggan">Pelanggan</label>
                                <select name="pelanggan" class="form-control" required="required">
                                    <option value="">
                                        - Pilih Pelanggan
                                    </option>
                                    <?php
                                    $data = mysqli_query($koneksi, "select * from pelanggan");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                        <option <?php if ($d['pelanggan_id'] == $t['transaksi_pelanggan']) {
                                                    echo "selected='selected'";
                                                } ?> value="<?php echo $d['pelanggan_id'] ?>">
                                            <?php echo $d['pelanggan_nama']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Berat</label>
                                <input type="number" class="form-control" name="berat" required="required" value="<?php echo $t['transaksi_berat']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Tgl. Selesai</label>
                                <input type="date" class="form-control" name="tgl_selesai" value="<?php echo $t['transaksi_tgl_selesai']; ?>">
                            </div>
                        
                        <table class="table table-bordered table-stripped">
                            <tr>
                                <th>Jenis Pakaian</th>
                                <th width="20%">Jumlah</th>
                            </tr>

                            <?php
                            $id_transaksi = $t['transaksi_id'];
                            $pakaian = mysqli_query($koneksi, "select * from pakaian where pakaian_transaksi='$id'");
                            while ($p = mysqli_fetch_array($pakaian)) {
                            ?>
                                <tr>
                                    <td><input type="text" name="jenis_pakaian" class="form-control" value="<?php echo $p['pakaian_jenis']; ?>"></td>
                                    <td><input type="number" name="jumlah_pakaian" class="form-control" value="<?php echo $p['pakaian_jumlah']; ?>"></td>
                                </tr>
                            <?php }
                            ?>

                        </table>
                        <label for="">Status</label>
                        <select name="status" class="form-control" id="" required="required">
                            <option <?php if ($t['transaksi_status'] == "0") {
                                        echo "selected='selected'";
                                    } ?> value="0">PROSES</option>
                            <option <?php if ($t['transaksi_status'] == "1") {
                                        echo "selected='selected'";
                                    } ?> value="1">DICUCI</option>
                            <option <?php if ($t['transaksi_status'] == "2") {
                                        echo "selected='selected'";
                                    } ?> value="2">SELESAI</option>
                        </select>
                        <br>
                        <div class="form-group">
                            <input type="submit" value="Update transaksi" class="btn btn-primary">
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>