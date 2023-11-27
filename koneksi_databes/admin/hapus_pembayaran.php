<?php
include ('koneksi.php');

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];

    $delete_query = "DELETE FROM pembayaran WHERE id = $id";
    $koneksi->query($delete_query);
    header("Location: pembayaran.php");
}
?>