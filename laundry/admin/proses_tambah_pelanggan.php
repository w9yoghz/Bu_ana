<?php
    include '../koneksi.php';

    $pelanggan_id = $_POST['pelanggan_id'];
    $pelanggan_nama = $_POST['pelanggan_nama'];
    $pelanggan_hp = $_POST['pelanggan_hp'];
    $pelanggan_alamat = $_POST['pelanggan_alamat'];

    $query = "INSERT INTO pelanggan (pelanggan_id, pelanggan_nama, pelanggan_hp, pelanggan_alamat) VALUES 
    ('$pelanggan_id', '$pelanggan_nama', '$pelanggan_hp', '$pelanggan_alamat')";

    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    } else {
        echo "<script>
               alert('Data Berhasil Ditambah');
               window.location='index.php';
            </script>";
    }
?>
