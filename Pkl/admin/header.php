<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    .nav-link {
      position: relative;
    }

    .nav-link::before {
      content: "";
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 0;
      height: 2px;
      background-color: cornflowerblue;
      visibility: hidden;
      transition: width 0.4s ease-in-out;
      color: cornflowerblue;
    }

    .nav-link:hover::before,
    .nav-link.active::before { 
      width: 80%;
      visibility: visible;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    
      <a class="navbar-brand" href="#">PKL</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="fw-semibold collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.php"><i class="bi bi-speedometer"></i> Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="siswa.php"><i class="bi bi-mortarboard-fill"></i> Siswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="guru.php"><i class="bi bi-person-lines-fill"></i> Guru</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="jurusan.php"><i class="bi bi-book-half"></i> Jurusan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pkl.php"><i class="bi bi-briefcase-fill"></i> PKL</a>
          </li>           
          <li class="nav-item">
            <a class="nav-link" href="industri.php"><i class="bi bi-briefcase-fill"></i> Jurusan</a>
          </li>           
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
        <a href="../index.php" class="btn btn-danger rounded">Log Out</a>    
        </ul>
      </div>
    </div>
  </nav>
</body>
<script src="../assets/js/bootstrap/bootstrap.js"></script>
</html>
