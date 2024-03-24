<?php
include 'header.php';
include '../koneksi.php';

// Mulai sesi hanya jika belum dimulai
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Redirect jika status login belum ada
if ($_SESSION['status'] != "login") {
    header("location:../index.php?pesan=belum_login");
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Sistem Informasi Laundry</title>
    <!-- Gaya CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <style>
        /* Gaya untuk card */
        .card {
            max-width: 500px; /* Sesuaikan dengan lebar yang diinginkan */
            margin: 0 auto; /* Mengatur margin secara otomatis untuk posisi tengah */
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            padding: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <table>
        <div class="container"> <!-- Tambahkan container untuk mengelompokkan konten Bootstrap -->
            <br>
            <br><br>
            <div class="justify-content-center"> <!-- Mengatur div menjadi posisi tengah -->
                <div class="col-md-5 col-md-offset-3">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">Ganti Kata Sandi</h4>
                        </div>
                        <div class="card-body">
                            <form method="post" action="" class="needs-validation" novalidate>
                                <div class="form-group">
                                    <label for="current_password">Kata Sandi Saat Ini</label>
                                    <input type="password" class="form-control" name="current_password" required>
                                </div>
                                <div class="form-group">
                                    <label for="new_password">Kata Sandi Baru</label>
                                    <input type="password" class="form-control" name="new_password" required>
                                </div>
                                <div class="form-group">
                                    <label for="confirm_password">Konfirmasi Kata Sandi Baru</label>
                                    <input type="password" class="form-control" name="confirm_password" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </table>
    <?php
    // Periksa jika formulir telah dikirim
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Ambil data dari formulir
        $current_password_input = md5($_POST['current_password']);
        $new_password_input = md5($_POST['new_password']);
        $confirm_password_input = md5($_POST['confirm_password']);

        // Periksa apakah kata sandi saat ini cocok dengan yang ada di database
        $nama_pengguna = $_SESSION['username']; // Asumsikan Anda memiliki sesi pengguna
        $cek_kata_sandi_query = "SELECT * FROM admin WHERE username ='$nama_pengguna'";
        $cek_kata_sandi_hasil = mysqli_query($koneksi, $cek_kata_sandi_query);
        $baris = mysqli_fetch_assoc($cek_kata_sandi_hasil);

        if ($baris) {
            // Verifikasi kata sandi saat ini
            if ($current_password_input === $baris['password']) {
                // Kata sandi cocok
                if ($new_password_input == $confirm_password_input) {
                    // Enkripsi kata sandi baru
                    $kata_sandi_baru = $new_password_input;

                    // Perbarui kata sandi di database
                    $perbarui_kata_sandi_query = "UPDATE admin SET password ='$kata_sandi_baru' WHERE username ='$nama_pengguna'";
                    $perbarui_kata_sandi_hasil = mysqli_query($koneksi, $perbarui_kata_sandi_query);

                    if ($perbarui_kata_sandi_hasil) {
                        echo '<div class="alert alert-success mt-3" role="alert">Kata sandi berhasil diubah!</div>';
                    } else {
                        echo '<div class="alert alert-danger mt-3" role="alert">Gagal mengubah kata sandi. Silakan coba lagi.</div>';
                    }
                } else {
                    echo '<div class="alert alert-danger mt-3" role="alert">Konfirmasi kata sandi baru tidak sesuai.</div>';
                }
            } else {
                // Kata sandi saat ini salah
                echo '<div class="alert alert-danger mt-3" role="alert">Kata sandi saat ini salah.</div>';
            }
        } else {
            // Pengguna tidak ditemukan
            echo '<div class="alert alert-danger mt-3" role="alert">Pengguna tidak ditemukan.</div>';
        }
    }
    ?>
</brody>
</html>