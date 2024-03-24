<?php
    include 'koneksi.php';

    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $kelamin = $_POST['kelamin'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO t_guru (nip, nama, tgl_lahir, kelamin, alamat) VALUES 
    ('$nip', '$nama', '$tgl_lahir', '$kelamin', '$alamat')";

    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_connect_error());
    } else {
        echo "<script>
               alert('Data Berhasil Ditambah');
               window.location='dashboard.php';
            </script>";
    }
?>
