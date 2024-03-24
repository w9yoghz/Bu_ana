<?php
    include 'header.php';
    include '../koneksi.php';

    $query = "SELECT harga_per_kilo FROM harga";
    $result = mysqli_query($koneksi, $query);
    
    if (!$result) {
        die("Query Error : " . mysqli_errno($koneksi) . "-" . mysqli_error($koneksi));
    }

    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
    } else {
        echo "<script>
                alert('Data tidak ditemukan');
                window.location='index.php';
              </script>";
        exit; // Keluar dari skrip
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harga</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <script src="../assets/js/bootstrap.js"></script>
</head>
<body>
<div class="container col-md-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Pengaturan Harga Perkilo</h4>
                </div>
                <div class="card-body">
                    <form action="harga_update.php" method="post">
                        <div class="form-group">
                            <label for="exampleInput">Harga per Kilo</label>
                            <input type="text" class="form-control" id="exampleInput" name="harga" value="<?php echo $data['harga_per_kilo']; ?>">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>