<?php
include '../koneksi.php';

$nip = mysqli_real_escape_string($koneksi, $_POST['nip']);
$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
$telp = mysqli_real_escape_string($koneksi, $_POST['telp']);
$password = mysqli_real_escape_string($koneksi, $_POST['password']);
$tahun = mysqli_real_escape_string($koneksi, $_POST['tahun']);
$id_jurusan =  $_POST['id_jurusan'];
$jabatan = mysqli_real_escape_string($koneksi, $_POST['jabatan']);
$pangkat = mysqli_real_escape_string($koneksi, $_POST['pangkat']);

$query = "INSERT INTO guru (nip, nama, alamat, telp, password, tahun, id_jurusan, jabatan, pangkat) 
          VALUES ('$nip', '$nama', '$alamat', '$telp', '$password', '$tahun', '$id_jurusan', '$jabatan', '$pangkat')";
$result = mysqli_query($koneksi, $query);
if(!$result){
 die ("Query Error :".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
} else {
 echo "<script>
 alert('Data Berhasil Ditambah');
 window.location = 'guru.php';
 </script>";
}
?>