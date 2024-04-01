<?php
include '../koneksi.php';
$nama   = $_POST['nama_jurusan'];

     $query = "UPDATE jurusan set nama_jurusan = '$nama' where id_jurusan = '$id_jurusan'";
     $result = mysqli_query($koneksi, $query);
     if(!$result){
      die ("Query Error :".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
   } else {
      echo "<script>
      alert('Data Berhasil Diubah');
      window.location = 'pelanggan.php';
      </script>";
   }
?>