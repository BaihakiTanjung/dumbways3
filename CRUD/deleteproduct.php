<?php
include "../koneksi.php";

$id = $_GET['id'];

$sql = "DELETE FROM products_tb WHERE id = '$id'";

$hapus = mysqli_query($koneksi, $sql);

// header("location:index.php?page=coba");

if ($hapus == true) {
    echo "Product Berhasil dihapus";
    header("location:../6.php");
} else {
    echo "Gagal input";
}
