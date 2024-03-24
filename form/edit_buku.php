<?php
include 'koneksi.php';

if(isset($_GET['id_buku'])){
    $id_buku = ($_GET['id_buku']);
    $query = "SELECT * FROM buku where id_buku = '$id_buku'";
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
} else {
    echo "<script>
            alert('Masukkan id_buku');
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
    <link rel="stylesheet" href="tambah.css">
    <title>Ubah Buku</title>
</head>
<body>
<form action="proses_edit.php" method="post" enctype="multipart/form-data">
    <div>
        <center><h1>EDIT BUKU</h1></center>
        <label for="id_buku">Id Buku</label>
        <input type="text" name="id_buku" autofocus value="<?= $data['id_buku'] ?>" >
    </div>
    <div>
        <label for="judul">Judul Buku</label>
        <input type="text" name="judul" autofocus value="<?= $data['judul'] ?>">
    </div>
    <div>
        <label for="pengarang">Pengarang</label>
        <input type="text" name="pengarang" autofocus value="<?= $data['pengarang'] ?>">
    </div>
    <div>
        <label for="tgl_terbit">Tanggal Terbit</label>
        <input type="date" name="tgl_terbit" autofocus value="<?= $data['tgl_terbit'] ?>">
    </div>
    <div>
        <button type="submit">Simpan perubahan</button>
    </div>
    </form>
</body>
</html>
