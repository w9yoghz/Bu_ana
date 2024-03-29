<?php
    include 'koneksi.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Bootstrap CSS -->
    <link href="../Pkl/assets/css/bootstrap.css" rel="stylesheet">
    <style>
        body {
            background-color: grey;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        /* Custom CSS */
        .login-form {

            width: 350px;
            margin: 0 auto;
            margin-top: 50px;
            border-radius: 10px; /* Ujung melengkung */
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1); /* Box shadow */
            padding: 20px;
            background-color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="login-form">
        <h2 class="text-center mb-4">Login</h2>
        <!-- Formulir Login -->
        <form action="login.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
            <!-- Pesan Kesalahan -->
            <?php if(isset($_GET['pesan']) && $_GET['pesan'] == 'gagal'): ?>
                <div class="alert alert-danger mt-3" role="alert">Username atau password salah!</div>
            <?php endif; ?>
        </form>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="../Pkl/assets/js/bootstrap.js"></script>
</body>
</html>
