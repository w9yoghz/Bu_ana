<?php
     include '../koneksi.php';
     $id_jurusan = $_GET['id_jurusan'];
     $query = "DELETE FROM jurusan WHERE id_jurusan ='$id_jurusan'";
     $result = mysqli_query($koneksi, $query);
     if(!$result){
      die ("Query Error :".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
   } else {
      echo "<script>
      alert('Data Berhasil Dihapus');
      window.location = 'jurusan.php';
      </script>";
   }
?>
