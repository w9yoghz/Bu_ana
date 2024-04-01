<?php
include '../koneksi.php';

// Ambil data yang dikirimkan dari form
$id_industri = $_POST['id'];
$nama_industri = $_POST['nama_industri'];
$nama_pimpinan = $_POST['nama_pimpinan'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];

// Query untuk mengupdate data industri di dalam database
$query = "UPDATE industri SET nama_industri = '$nama_industri', nama_pimpinan = '$nama_pimpinan', alamat = '$alamat', telepon = '$telepon' WHERE id_industri = '$id_industri'";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    // Jika query gagal dieksekusi
    die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    // Jika query berhasil dieksekusi
    echo "<script>
            alert('Data berhasil diubah');
            window.location='industri.php';
          </script>";
}
?>
