<?php
include '../koneksi.php';

// Periksa apakah semua input yang diperlukan ada
if(isset($_POST['nip'], $_POST['nama'], $_POST['alamat'], $_POST['telp'], $_POST['password'], $_POST['tahun'], $_POST['id_jurusan'], $_POST['jabatan'], $_POST['pangkat'])) {

    // Ambil data yang dikirimkan melalui form
    $nip = mysqli_real_escape_string($koneksi, $_POST['nip']);
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
    $telp = mysqli_real_escape_string($koneksi, $_POST['telp']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);
    $tahun = mysqli_real_escape_string($koneksi, $_POST['tahun']);
    $id_jurusan = $_POST['id_jurusan'];
    $jabatan = mysqli_real_escape_string($koneksi, $_POST['jabatan']);
    $pangkat = mysqli_real_escape_string($koneksi, $_POST['pangkat']);

    // Query untuk menambahkan data guru ke dalam tabel guru
    $query = "INSERT INTO guru (nip, nama, alamat, telp, password, tahun, id_jurusan, jabatan, pangkat) 
              VALUES ('$nip', '$nama', '$alamat', '$telp', '$password', '$tahun', '$id_jurusan', '$jabatan', '$pangkat')";

    $result = mysqli_query($koneksi, $query);

    // Periksa apakah query berhasil dieksekusi
    if (!$result) {
        // Jika query gagal dieksekusi, tampilkan pesan error
        die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    } else {
        // Jika query berhasil dieksekusi, redirect ke halaman guru.php dengan pesan sukses
        echo "<script>
                alert('Data guru berhasil ditambahkan');
                window.location.href='guru.php';
              </script>";
    }
} else {
    // Jika ada input yang kurang, berikan pesan kesalahan
    echo "Ada input yang kurang.";
}
?>
