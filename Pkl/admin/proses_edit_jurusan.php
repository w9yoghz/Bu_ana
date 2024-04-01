<?php
include '../koneksi.php';

// Ambil data yang dikirimkan dari form
$id_jurusan = $_POST['id_jurusan'];
$nama_jurusan = $_POST['nama_jurusan'];

// Update data jurusan ke dalam database
$query = "UPDATE jurusan SET nama_jurusan = '$nama_jurusan' WHERE id_jurusan = '$id_jurusan'";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    // Jika query gagal dieksekusi
    die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    // Jika query berhasil dieksekusi
    echo "<script>
            alert('Data berhasil diubah');
            window.location='jurusan.php';
          </script>";
}
?>
