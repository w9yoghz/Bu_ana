<?php
include '../koneksi.php';

// Ambil data yang dikirimkan dari form
$nisn = $_POST['nisn'];
$nama_siswa = $_POST['nama_siswa'];
$alamat = $_POST['alamat'];
$password = $_POST['password'];
$telp = $_POST['telp'];
$kelas = $_POST['kelas'];
$tahun = $_POST['tahun'];
$id_jurusan = $_POST['id_jurusan'];
$golongan_darah = $_POST['golongan_darah'];
$nama_orangtua = $_POST['nama_orangtua'];
$alamat_orangtua = $_POST['alamat_orangtua'];
$catatan_kesehatan = $_POST['catatan_kesehatan'];

// Query SQL untuk menambahkan data siswa ke dalam tabel siswa
$query = "INSERT INTO siswa (nisn, nama_siswa, alamat, password, telp, kelas, tahun, id_jurusan, golongan_darah, nama_orangtua, alamat_orangtua, catatan_kesehatan) VALUES ('$nisn', '$nama_siswa', '$alamat', '$password', '$telp', '$kelas', '$tahun', '$id_jurusan', '$golongan_darah', '$nama_orangtua', '$alamat_orangtua', '$catatan_kesehatan')";

// Eksekusi query
$result = mysqli_query($koneksi, $query);

// Cek apakah query berhasil dijalankan
if (!$result) {
    // Jika query gagal, tampilkan pesan error
    die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    // Jika query berhasil, tampilkan pesan sukses dan redirect ke halaman index.php
    echo "<script>
            alert('Data siswa berhasil ditambahkan.');
            window.location.href = 'siswa.php';
          </script>";
}

?>
