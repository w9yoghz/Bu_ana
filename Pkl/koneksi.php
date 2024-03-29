<?php

    $koneksi = mysqli_connect("localhost","root","","db_pkl_sistem");

    if (mysqli_connect_errno()) {
       echo"Koneksi data base gagal";
       mysqli_connect_errno();
    }

?>