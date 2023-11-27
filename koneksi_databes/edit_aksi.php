<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nomor_hp = $_POST['nomor_hp'];
 
mysqli_query($koneksi,"UPDATE warga SET nik='$nik', nama='$nama', jenis_kelamin='$jenis_kelamin', nomor_hp='$nomor_hp' WHERE id='$id'");
 
header("location:index_admin.php?pesan=update");
 
?>