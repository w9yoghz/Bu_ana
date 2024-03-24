<?php

    $koneksi = mysqli_connect("localhost","root","","laundry1");

    if (mysqli_connect_errno()) {
       echo"Koneksi data base gagal";
       mysqli_connect_errno();
    }

?>