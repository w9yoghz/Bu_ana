<?php
include '../koneksi.php';


$nip = mysqli_real_escape_string($koneksi, $_POST['nip']);
$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
$telp = mysqli_real_escape_string($koneksi, $_POST['telp']);
$password = mysqli_real_escape_string($koneksi, $_POST['password']);
$tahun = mysqli_real_escape_string($koneksi, $_POST['tahun']);
$id_jurusan = $_POST['id_jurusan'];
$jabatan = mysqli_real_escape_string($koneksi, $_POST['jabatan']);
$pangkat = mysqli_real_escape_string($koneksi, $_POST['pangkat']);


$query = "UPDATE guru SET nama = '$nama', alamat = '$alamat', telp = '$telp', password = '$password', tahun = '$tahun', id_jurusan = '$id_jurusan', jabatan = '$jabatan', pangkat = '$pangkat' WHERE nip = '$nip'";

$result = mysqli_query($koneksi, $query);

if (!$result) {
    
    die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    echo "<script>
            alert('Data berhasil diubah');
            window.location='guru.php';
          </script>";
}
?>