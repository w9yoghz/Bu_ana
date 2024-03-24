<?php
        include '../koneksi.php';
        include 'header.php';

        $query = "SELECT * FROM pelanggan";
        $result = mysqli_query($koneksi, $query);

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


        .panel {
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 5px;
            width: 100%;

        }

        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>


    <div class="full-screen">
        <div class="container">
            <div class="panel">
                <h2 class="text-center">Tambah Transaksi Laundry</h2>
                <form method="POST" action="proses_tambah_transaksi.php">
                    <div class="form-group form-floating">
                        <label for="pelanggan">Pelanggan</label>
                        <select name="pelanggan" class="form-control" id="pelanggan">
                            <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value='" . $row['pelanggan_id'] . "'>" . $row['pelanggan_nama'] . "</option>";
                                }
                            ?>
                        </select>
                        <label for="berat">Berat</label>
                        <input type="text" class="form-control" name="berat" id="">
                        <label for="tgl_transaksi">Tanggal Selesai</label>
                        <input type="date" class="form-control" name="tgl_selesai" id="">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Jenis Pakaian</th>
                                <th width="20%">Jumlah</th>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" name="jenis_pakaian[]"></td>
                                <td><input type="text" class="form-control" name="jumlah_pakaian[]"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" name="jenis_pakaian[]"></td>
                                <td><input type="text" class="form-control" name="jumlah_pakaian[]"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" name="jenis_pakaian[]"></td>
                                <td><input type="text" class="form-control" name="jumlah_pakaian[]"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" name="jenis_pakaian[]"></td>
                                <td><input type="text" class="form-control" name="jumlah_pakaian[]"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" name="jenis_pakaian[]"></td>
                                <td><input type="text" class="form-control" name="jumlah_pakaian[]"></td>
                            </tr>
                            
                        </table>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Tambah Transaksi" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
