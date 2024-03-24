<?php
include 'koneksi.php';

$nip = $_POST['nip'];
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];
$kelamin = $_POST['kelamin'];
$alamat = $_POST['alamat'];

$query = "UPDATE t_guru SET nama = '$nama', tgl_lahir = '$tgl_lahir', kelamin = '$kelamin', alamat = '$alamat' WHERE nip = '$nip'";

$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    echo "<script>
            alert('Data Berhasil Diubah');
            window.location='dashboard.php';
          </script>";
}
?>
