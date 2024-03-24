<?php
    include 'header.php'
?>
<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Filter Laporan</h4>
        </div>
        <div class="panel-body">
            <form action="laporan.php" method="get">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Dari tanggal</th>
                        <th>Sampai tanggal</th>
                    </tr>
                    <tr>
                        <td>
                            <br>
                            <input type="date" name="tgl_dari" class="form-control" id="">
                        </td>
                        <td>
                            <br>
                            <input type="date" name="tgl_sampai" class="form-control" id="">
                        </td>
                    </tr>
                </table>
                <br>
                <input type="submit"  class="btn btn-primary" value="Filter" id="">
            </form>
        </div>
    </div>

<br>
<?php
if (isset($_GET['tgl_dari']) && isset($_GET['tgl_sampai'])) {
    $dari = $_GET['tgl_dari'];
    $sampai = $_GET['tgl_sampai'];
}
?>
<div class="panel">
    <div class="panel-heading">
        <h4>Data laporan Laundry dari <b><?php echo $dari; ?></b> sampai <b><?php echo $sampai; ?></b></h4>
    </div>
    <div class="panel-body">
        <a href="cetak_print.pdf?dari=<?php echo $dari; ?>&sampai=<?php echo $sampai; ?>" target="_blank" class="btn btn-sm btn-primary"
            class="glyphicon glyphicon-print"><b>CETAK</b></a>
    </div>
    <div class="panel-body">
        <a href="cetak_pdf.pdf?dari=<?php echo $dari; ?>&sampai=<?php echo $sampai; ?>" target="_blank" class="btn btn-sm btn-primary"
            class="glyphicon glyphicon-print"><b>CETAK PDF</b></a>
    </div>
    <br><br>
    <table class="table table-bordered table-striped">
        <tr>
            <th width="1%">NO</th>
            <th>invoice</th>
            <th>Tanggal</th>
            <th>pelanggan</th>
            <th>Berat(Kg)</th>
            <th>Tgl Selesai</th>
            <th>Harga</th>
            <th>Status</th>
            <th width="20%">Opsi</th>
        </tr>
        <?php
                    include '../koneksi.php';
                    $data = mysqli_query($koneksi, "SELECT * FROM pelanggan, transaksi WHERE transaksi_pelanggan = pelanggan_id and date(transaksi_tgl) > '$dari' and date(transaksi_tgl) < '$sampai' ORDER BY transaksi_id DESC ");
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