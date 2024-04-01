<?php
    include '../koneksi.php';
    $nip = $_GET['nip'];
    $query = "DELETE FROM guru WHERE nip ='$nip'";
    $result = mysqli_query($koneksi, $query);
   if (!$result){
            die ("Query Error :".mysqli_errno($koneksi)."-".mysqli_error());
        } else {
            echo "<script>
                  alert('Data Berhasil Dihapus');
                  window.location='guru.php';
                  </script>";
        }
?>