<?php
session_start();
include '../koneksi.php';
$nama   = $_POST['nama_pkl'];
$alamat   = $_POST['alamat'];
$quota_pkl   = $_POST['quota_pkl'];
$tahun   = $_POST['tahun'];
     $query = "INSERT INTO pkl (nama_pkl, alamat, quota_pkl, tahun) VALUES 
     ('$nama', '$alamat', '$quota_pkl', '$tahun')";
     $result = mysqli_query($koneksi, $query);
     if(!$result){
      die ("Query Error :".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
   } else {
      echo "<script>
      alert('Data Berhasil Ditambah');
      window.location = 'pkl.php';
      </script>";
   }
?>