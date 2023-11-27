<?php
include 'koneksi.php';

// Ambil kata kunci pencarian
$keyword = $_POST["keyword"] ?? '';

// Buat query SQL untuk mencari data
$query = "SELECT * FROM pembayaran WHERE id LIKE '%$keyword%' OR nama_pembayar LIKE '%$keyword%' OR id LIKE '%$keyword%'";

// Eksekusi query SQL
$result = mysqli_query($koneksi, $query);

// Tampilkan hasil pencarian
while ($row = mysqli_fetch_array($result)) {
    echo $row["id"] . " - " . $row["nama_pembayar"] . " - " . $row["id"] . "<br>";
}
?>