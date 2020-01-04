<?php
include "../koneksi.php";

$id = $_GET['edit'];
$sql = "SELECT * from products_tb where id='$id'";

$edit = mysqli_query($koneksi, $sql);

foreach ($edit as $e) {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tambah Supplier</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>


    <body>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    Tambah Product
                </div>
                <div class="card-body">
                    <form method="POST" action="updateproduct.php">
                        <input name="id" value="<?= $e['id'] ?>" type="hidden">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nama Product</label>
                            <input name="namaproduct" type="text" class="form-control" value="<?= $e["product_name"] ?>" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Pilih Supplier</label>
                            <select class="form-control" name="supplier" id="exampleFormControlSelect1">
                                <?php

                                include '../koneksi.php';

                                $sql = "SELECT * FROM suppliers_tb";

                                $supplier = mysqli_query($koneksi, $sql);

                                foreach ($supplier as $s) {
                                    $sel = ($s['id'] == $e['supplier_id']) ? 'selected' : '';
                                ?>
                                    <option value="<?= $s["id"] ?>" <?= $sel ?>><?= $s["company_name"] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    <?php } ?>
    </body>

    </html>