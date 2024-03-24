<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="tambah.css">
</head>
<body>
    <form action="proses_tambah.php" method="post" enctype="multipart/form-data">
    <div>
        <center><h1>TAMBAH BUKU</h1></center>
        <label for="">Id Buku</label>
        <input type="text" name="id_buku" autofocus required>
    </div>
    <div>
        <label for="">Judul Buku</label>
        <input type="text" name="judul" autofocus required>
    </div>
    <div>
        <label for="">pengarang</label>
        <input type="text" name="pengarang" autofocus required>
    </div>
    <div>
        <label for="">Tanggal Terbit</label>
        <input type="date" name="tgl_terbit" autofocus required>
    </div>
    <div>
            <button type="submit">Simpan data</button>
    </div>
    </form>
    
    
    
</body>
</html>