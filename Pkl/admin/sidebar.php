<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem PKL</title>
  <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="../assets/icon/web-font-files/lineicons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa; /* Warna latar belakang */
      font-weight: 500;
    }

  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    
      <a class="navbar-brand" href="#">PKL</a> <!-- Judul PKL di pojok kiri -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span> <!-- Icon hamburger -->
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> <!-- List navbar di pojok kanan -->
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php"><i class="bi bi-speedometer"></i> Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="siswa.php"><i class="bi bi-mortarboard-fill"></i> Siswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="guru.php"><i class="bi bi-person-lines-fill"></i> Guru</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pkl.php"><i class="bi bi-briefcase"></i> PKL</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</body>
<script src="../assets/js/bootstrap/bootstrap.js"></script>
</html>
