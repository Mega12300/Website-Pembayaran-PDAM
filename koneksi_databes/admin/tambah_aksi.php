<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form

$id = $_POST['id'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nomor_hp = $_POST['nomor_hp'];


 
// menginput data ke database
mysqli_query($koneksi,"insert into warga values('$id','$nik','$nama','$jenis_kelamin','$nomor_hp')");
 
// mengalihkan halaman kembali ke index.php                       
header("location:index_admin.php");
 
?>