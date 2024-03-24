<?php
 include 'koneksi.php';

 $id_buku = $_GET['id_buku'];
 $query = "DELETE FROM buku WHERE id_buku='$id_buku'";

 $result =mysqli_query($koneksi,$query);
 if (!$result){
     die ("Query Error :".mysqli_errno($koneksi)."-".mysqli_connect_error());
 }else{
     echo"<script>
            alert('Data Berhasil Dihapus');
            window.location='index.php';
         </script>";
 }
?>