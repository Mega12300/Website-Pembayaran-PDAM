<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form

$id = $_POST['id'];
$nama_pembayar = $_POST['nama_pembayar'];
$tanggal_pembayaran = $_POST['tanggal_pembayaran'];
$nominal_pembayaran = $_POST['nominal_pembayaran'];
$jumlah_tunggakan = $_POST['jumlah_tunggakan'];

 
// menginput data ke database
mysqli_query($koneksi,"insert into pembayaran values('$id','$nama_pembayar','$tanggal_pembayaran','$nominal_pembayaran','$jumlah_tunggakan')");
 
// mengalihkan halaman kembali ke index.php                       
header("location:pembayaran.php");
 
?>