<?php
include '../koneksi.php';

// Ambil data yang dikirimkan dari formulir edit
$id_pkl = $_POST['id_pkl'];
$nama_pkl = $_POST['nama_pkl'];
$alamat = $_POST['alamat'];
$quota_pkl = $_POST['quota_pkl'];
$tahun = $_POST['tahun'];

// Query untuk mengupdate data PKL berdasarkan ID PKL
$query = "UPDATE pkl SET nama_pkl = '$nama_pkl', alamat = '$alamat', quota_pkl = '$quota_pkl', tahun = '$tahun' WHERE id_pkl = '$id_pkl'";
$result = mysqli_query($koneksi, $query);

// Periksa apakah query berhasil dieksekusi
if (!$result) {
    // Jika query gagal dieksekusi, tampilkan pesan error
    die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    // Jika query berhasil dieksekusi, redirect ke halaman pkl.php dengan pesan sukses
    echo "<script>
            alert('Data PKL berhasil diupdate');
            window.location.href='pkl.php';
          </script>";
}
?>
