<?php
    include 'koneksi.php';
    $id_buku =$_POST['id_buku'];
    $judul =$_POST['judul'];
    $pengarang =$_POST['pengarang'];
    $tgl_terbit =$_POST['tgl_terbit'];

    $query ="UPDATE buku SET judul = '$judul', pengarang = '$pengarang', tgl_terbit = '$tgl_terbit' WHERE id_buku = $id_buku";

    $result = mysqli_query($koneksi, $query);
    if (!$result){
        die ("Query Error :".mysqli_errno($koneksi)."-".mysqli_connect_error());
    }else{
        echo"<script>
               alert('Data Berhasil Diubah');
               window.location='index.php';
            </script>";
    }
?>