<?php
include "../koneksi.php";

$namaproduk = $_POST['namaproduct'];
$supplier = $_POST['supplier'];

$sql = "INSERT INTO products_tb VALUES ('','$namaproduk',$supplier)";

$tambah = mysqli_query($koneksi, $sql);

// header("location:index.php?page=coba");

if ($tambah == true) {
    echo "Product Berhasil ditambahkan";
    header("location:../6.php");
} else {
    echo "Gagal input";
}
