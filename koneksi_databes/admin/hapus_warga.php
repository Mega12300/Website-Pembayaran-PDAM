<?php
include ('koneksi.php');

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];

    $delete_query = "DELETE FROM warga WHERE id = $id";
    $koneksi->query($delete_query);
    header("Location: index_admin.php");
}
?>