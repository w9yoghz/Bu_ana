<?php

    $koneksi = mysqli_connect("localhost","root","","web_guru");

    if (mysqli_connect_errno()) {
       echo"Koneksi data base gagal";
       mysqli_connect_errno();
    }

?>