<?php
include 'header.php';
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        .tabal{
            margin-bottom: 100px;
        }
        header {
            background-color: #007bff;
        }

        header a.btn-light:hover {
            background-color: rgba(123, 23, 44, 0);
            color: white;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
    </style>
</head>
<body>

<div class="tabal container mt-5">
    <div class="card">
        <div class="card-header">
            <h4>Data Guru</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NIP</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">TANGGAL LAHIR</th>
                    <th scope="col">JENIS KELAMIN</th>
                    <th scope="col">ALAMAT</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $query = "SELECT * FROM t_guru ORDER BY nip ASC";
                $result = mysqli_query($koneksi, $query);

                if (!$result) {
                    die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                }
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?= $row['nip']; ?></td>
                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['tgl_lahir']; ?></td>
                        <td><?= $row['kelamin']; ?></td>
                        <td><?= $row['alamat']; ?></td>
                    </tr>
                    <?php
                    $no++;
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/jquery.js"></script>
</body>
<?php
    include 'footer.php'
?>
<footer style="position: fixed; bottom: 0;">

</footer>
</html>
