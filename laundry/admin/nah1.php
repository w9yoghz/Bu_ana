<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <?php
        session_start();
        if ($_SESSION['status']!="login"){
            header("location:admin/pesan=belum_login");
        }
    ?>

    <h4>Selamat datang, <?php echo $_SESSION['username']; ?></h4>
    <a href="metu.php">LOGOUT</a>
</body>
</html>