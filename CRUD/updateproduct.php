<?php
include "../koneksi.php";

$id = $_POST['id'];
$namaproduk = $_POST['namaproduct'];
$supplier = $_POST['supplier'];

$sql = "UPDATE products_tb SET product_name = '$namaproduk', supplier_id = '$supplier' WHERE id = $id";

$tambah = mysqli_query($koneksi, $sql);

// header("location:index.php?page=coba");

if ($tambah == true) {
    echo "Product Berhasil diubah";
    header("location:../6.php");
} else {
    echo "Gagal input";
}
