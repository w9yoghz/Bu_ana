<?php
include '../koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM industri WHERE id_industri = '$id'";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    echo "<script>
            alert('Data berhasil dihapus');
            window.location='industri.php';
          </script>";
}
?>
