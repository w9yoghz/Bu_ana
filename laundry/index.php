<!DOCTYPE html>
<html>
<head>
    <title>Sistem Laundry</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <style>
        body {
            background: url(img/kaos1.png);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .panel {
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 5px;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            color: #555;
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: calc(100% - 12px);
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 3px;
            transition: border-color 0.3s ease;
        }

        input:focus {
            outline: none;
            border-color: #007bff;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="col-md-4 col-md-offset-7 mx-auto">
            <div class="panel">
            <?php
                if(isset($_GET['pesan'])){
                    if ($_GET['pesan']=="gagal"){
                        echo "<div class='alert alert-danger'>Login gagal! username dan password salah</div>";
                    } elseif ($_GET['pesan']=="logout"){
                        echo "<div class='alert alert-warning'>Anda berhasil logout</div>";
                    } elseif ($_GET['pesan']=="belum_login"){
                        echo "<div class='alert alert-success'>Anda harus login dulu sebelum masuk ke admin</div>";
                    }
                }
            ?>
                <h2>SISTEM INFORMASI LAUNDRY</h2>
                <form method="POST" action="login.php">
                    <div class="form-group form-floating">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="form-group form ">
                        <label for="text">Password</label>
                        <input type="text" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Log In" class="btn btn-primary">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>
