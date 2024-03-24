<?php
    include 'koneksi.php';
    $id_buku =$_POST['id_buku'];
    $judul =$_POST['judul'];
    $pengarang =$_POST['pengarang'];
    $tgl_terbit =$_POST['tgl_terbit'];

    $query = "INSERT INTO buku (id_buku, judul, pengarang, tgl_terbit) VALUES 
    ('$id_buku', '$judul', '$pengarang', '$tgl_terbit')";
    $result =mysqli_query($koneksi,$query);
    if (!$result){
        die ("Query Error :".mysqli_errno($koneksi)."-".mysqli_connect_error());
    }else{
        echo"<script>
               alert('Data Berhasil Ditambah');
               window.location='index.php';
            </script>";
    }
?>