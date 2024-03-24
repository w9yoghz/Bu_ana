<?php
include '../koneksi.php';
// include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem informasi Laundry</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
</head>
<body>
<?php
    session_start();
    if ($_SESSION['status'] != "login") {
        header("location:../index.php?pesan=belum_login");
    }
    ?>
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
        <?php
        $id = $_GET['id'];
        $transaksi = mysqli_query($koneksi, "select * from transaksi,pelanggan where transaksi_id = '$id' 
                and transaksi_pelanggan = pelanggan_id");
        while ($t = mysqli_fetch_array($transaksi)) {
        ?>
        <center>
            <h2>LAUNDRY PPLG</h2>
        </center>
        <h2>INVOICE-<?php echo $t['transaksi_id'];?></h2>
        <table class="table">
                    <tr>
                        <th style="width: 20%;">Tanggal Laundry</th>
                        <th>:</th>
                        <td><?= $t['transaksi_tgl']; ?></td>
                    </tr>
                    <tr>
                        <th style="width: 20%;">Nama Pelanggan</th>
                        <th>:</th>
                        <td><?= $t['pelanggan_nama']; ?></td>
                    </tr>
                    <tr>
                        <th style="width: 20%;">No Handphone</th>
                        <th>:</th>
                        <td><?= $t['pelanggan_hp']; ?></td>
                    </tr>
                    <tr>
                        <th style="width: 20%;">Alamat</th>
                        <th>:</th>
                        <td><?= $t['pelanggan_alamat']; ?></td>
                    </tr>
                    <tr>
                        <th style="width: 20%;">Berat Cucian (KG)</th>
                        <th>:</th>
                        <td><?= $t['transaksi_berat']; ?> KG</td>
                    </tr>
                    <tr>
                        <th style="width: 20%;">Tanggal Selesai</th>
                        <th>:</th>
                        <td><?= $t['transaksi_tgl_selesai']; ?></td>
                    </tr>
                    <tr>
                        <th style="width:20%">Status</th>
                        <th>:</th>
                        <td>
                            <?php
                            if ($t['transaksi_status'] == "0") {
                                echo "<div class='label label-warning'>PROSES</div>";
                            } else if ($t['transaksi_status'] == "1") {
                                echo "<div class='label label-info>DICUCI</div>";
                            } else if ($t['transaksi_status'] == "2") {
                                echo "<div class='label label-success>SELESAI</div>";
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th style="width: 20%;">Harga</th>
                        <th>:</th>
                        <td><?= "Rp. " . number_format($t['transaksi_harga']) . " ,-"; ?></td>
                    </tr>

                </table>
                <br>
                <h4 class="text-center">Daftar Cucian</h4>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Jenis Pakaian</th>
                        <th width="20%">Jumlah</th>
                    </tr>

                    <?php
                    $id_transaksi = $t['transaksi_id'];
                    $pakaian = mysqli_query($koneksi, "select * from pakaian where pakaian_transaksi = '$id_transaksi'");
                    while ($p = mysqli_fetch_array($pakaian)) {
                    ?>
                        <tr>
                            <td><?= $p['pakaian_jenis']; ?></td>
                            <td width="5%"><?= $p['pakaian_jumlah']; ?></td>
                        </tr>
                    <?php }
                    ?>
                </table>
                <br>
                <p>
                    <center>"Terima Kasih telah mempercayai transaksi laundry bersama kami"</center>
                </p>
            <?php
        }
            ?>
        </div>
    </div>
</body>
</html>