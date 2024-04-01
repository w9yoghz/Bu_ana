<?php
include '../koneksi.php';

// Periksa apakah parameter 'nisn' telah diset dalam URL
if (isset($_GET['id'])) {
    // Ambil nilai 'nisn' dari URL
    $nisn = $_GET['id'];

    // Query untuk menghapus siswa berdasarkan 'nisn'
    $query = "DELETE FROM siswa WHERE nisn = '$nisn'";
    
    // Eksekusi query
    $result = mysqli_query($koneksi, $query);

    // Periksa apakah query berhasil dieksekusi
    if (!$result) {
        // Jika query gagal dieksekusi, tampilkan pesan kesalahan
        die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    } else {
        // Jika query berhasil dieksekusi, arahkan kembali ke halaman siswa.php
        echo "<script>
              alert('Data siswa berhasil dihapus');
              window.location.href = 'siswa.php';
              </script>";
        exit;
    }
} else {
    // Jika parameter 'nisn' tidak diset dalam URL, tampilkan pesan kesalahan
    echo "Parameter 'nisn' tidak ditemukan dalam URL.";
}
?>
