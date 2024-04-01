<?php
include '../koneksi.php';

// Ambil id_pkl yang dikirimkan melalui URL
$id = $_GET['id'];

// Query untuk menghapus data PKL berdasarkan id_pkl
$query = "DELETE FROM pkl WHERE id_pkl = '$id'";
$result = mysqli_query($koneksi, $query);

// Periksa apakah query berhasil dieksekusi
if (!$result) {
    // Jika query gagal dieksekusi, tampilkan pesan error
    die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    // Jika query berhasil dieksekusi, redirect ke halaman pkl.php dengan pesan sukses
    echo "<script>
            alert('Data PKL berhasil dihapus');
            window.location.href='pkl.php';
          </script>";
}
?>
