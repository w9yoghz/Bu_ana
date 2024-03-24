<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <style>
        header {
            background-color: #007bff;
        }

        header a.btn-light:hover {
            background-color: #0056b3;
            transform: scale(1.05);
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        header img {
            max-width: 50px; /* Atur lebar maksimal logo sesuai kebutuhan */
        }

        header h3 {
            font-size: 1.5rem;
            text-align: center; /* Atur ukuran font h3 */
        }

        header p {
            font-size: 0.8rem; /* Atur ukuran font alamat */
            margin-bottom: 0; /* Hilangkan margin bawah pada paragraf */
        }
    </style>
    <title>Header Example</title>
</head>
<body>

    <header class="text-white py-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <img src="https://pbs.twimg.com/profile_images/2492515297/logo2.png" alt="Logo" class="me-2">
                </div>
                <div class="col">
                    <h3 class="mb-0">SMK NEGERI 3 KENDAL</h3>
                    <p>Jl. Limbangan, Km. 1, Salamsari, Boja, 51381, Salamsari, Kendal, Kabupaten Kendal, Jawa Tengah 51381, Indonesia</p>
                </div>
                <div class="col text-end">
                    <a href="admin/index.php" class="btn btn-light fw-bold px-4">Login</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Your content goes here -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
