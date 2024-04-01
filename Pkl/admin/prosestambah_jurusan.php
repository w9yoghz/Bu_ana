<?php
session_start();
include '../koneksi.php';
$nama   = $_POST['nama'];
     $query = "INSERT INTO jurusan (nama_jurusan) VALUES 
     ('$nama')";
     $result = mysqli_query($koneksi, $query);
     if(!$result){
      die ("Query Error :".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
   } else {
      echo "<script>
      alert('Data Berhasil Ditambah');
      window.location = 'jurusan.php';
      </script>";
   }
?>