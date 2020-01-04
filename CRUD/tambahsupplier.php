<?php
include "../koneksi.php";

$company_name = $_POST['company_name'];
$address = $_POST['address'];
$phone = $_POST['phone'];

$sql = "INSERT INTO suppliers_tb VALUES ('','$company_name','$address','$phone')";

$tambah = mysqli_query($koneksi, $sql);

// header("location:index.php?page=coba");

if ($tambah == true) {
    echo "Supplier Berhasil ditambahkan";
    header("location:../6.php");
} else {
    echo "Gagal input";
}
