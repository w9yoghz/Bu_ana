<?php
    include '../koneksi.php';
    include 'header.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th{
            text-align: center;
        }
    </style>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <script src="../assets/js/bootstrap.js"></script>
</head>
<body>
<div class="panel">
        <div class="panel-heading">
            <h4>Daftar transaksi Terakhir</h4>
        </div>
        <div class="panel-body">
            <a href="tambah_transaksi.php" class="btn btn-primary">Tambah transaksi</a>
            <br><br><br>
            <table class="table table-bordered table-striped">
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Invoice</th>
                    <th class="text-center">Tanggal</th>
                    <th class="text-center">Pelanggan</th>
                    <th class="text-center">Berat (Kg)</th>
                    <th class="text-center">Tanggal Selesai</th>
                    <th class="text-center">Harga</th>
                    <th class="text-center">status</th>
                    <th class="text-center">Opsi</th>
                    
                </tr>
                <?php
                    $data = mysqli_query($koneksi, "SELECT * FROM pelanggan, transaksi WHERE transaksi_pelanggan = pelanggan_id ORDER BY transaksi_id desc limit 10");
                    $no = 1;
                    while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td>INVOICE-<?php echo $d['transaksi_id']; ?></td>
                                <td><?php echo $d['transaksi_tgl']; ?></td>
                                <td><?php echo $d['pelanggan_nama']; ?></td>
                                <td><?php echo $d['transaksi_berat']; ?></td>
                                <td><?php echo $d['transaksi_tgl_selesai']; ?></td>
                                <td><?php echo "Rp. ".number_format($d['transaksi_harga']).",-"; ?></td>
                                <td>
                                    <?php
                                        if($d['transaksi_status']=="0"){
                                            echo '<div class="label label-info">PROSES</div>';
                                        } else if ($d['transaksi_status']=="1"){
                                            echo '<div class="label label-danger">HILANG</div>';
                                        } else if ($d['transaksi_status']=="2"){
                                            echo '<div class="label label-success">SELESAI</div>';
                                        }
                                    ?>
                                </td>
                                <td class="col align-self-center">
                                    <a href="transaksi_invoice.php?id=<?php echo $d['transaksi_id']; ?>" target="blank" class="btn btn-sm btn-warning">Invoice</a>
                                    <a href="transaksi_edit.php?id=<?php echo $d['transaksi_id']; ?>" class="btn btn-sm btn-info">Edit</a>
                                    <a href="transaksi_hapus.php?id=<?php echo $d['transaksi_id']; ?>" class="btn btn-sm btn-danger">Hapus</a>
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