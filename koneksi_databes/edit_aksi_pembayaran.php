<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$nama_pembayar = $_POST['nama_pembayar'];
$tanggal_pembayaran = $_POST['tanggal_pembayaran'];
$nominal_pebayaran = $_POST['nominal_pembayaran'];
$jumlah_tunggakan = $_POST['jumlah_tunggakan'];
 
mysqli_query($koneksi,"UPDATE pembayaran SET id='$id', nama_pembayar='$nama_pembayar', tanggal_pembayaran='$tanggal_pembayaran', nominal_pembayaran='$nominal_pebayaran', jumlah_tunggakan='$jumlah_tunggakan' WHERE id='$id'");
 
header("location:pembayaran.php?pesan=update");
 
?>