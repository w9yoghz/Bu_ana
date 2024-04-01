<?php
include '../koneksi.php';

// Ambil data yang dikirimkan dari formulir
$nisn = $_POST['nisn'];
$nama_siswa = $_POST['nama_siswa'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$kelas = $_POST['kelas'];
$tahun = $_POST['tahun'];
$id_jurusan = $_POST['id_jurusan'];
$golongan_darah = $_POST['golongan_darah'];
$nama_orangtua = $_POST['nama_orangtua'];
$alamat_orangtua = $_POST['alamat_orangtua'];
$catatan_kesehatan = $_POST['catatan_kesehatan'];

// Query SQL untuk update data siswa berdasarkan NISN
$query = "UPDATE siswa SET 
            nama_siswa = '$nama_siswa',
            alamat = '$alamat',
            telp = '$telp',
            kelas = '$kelas',
            tahun = '$tahun',
            id_jurusan = '$id_jurusan',
            golongan_darah = '$golongan_darah',
            nama_orangtua = '$nama_orangtua',
            alamat_orangtua = '$alamat_orangtua',
            catatan_kesehatan = '$catatan_kesehatan'
          WHERE nisn = '$nisn'";

$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    // Jika berhasil, redirect ke halaman index.php dengan alert sukses
    echo "<script>alert('Data siswa berhasil diubah.');window.location='index.php';</script>";
}
?>
