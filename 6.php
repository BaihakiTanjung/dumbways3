<?php
include 'koneksi.php';

$sql = "SELECT products_tb.id,product_name,company_name,address,phone FROM products_tb LEFT JOIN suppliers_tb ON products_tb.supplier_id = suppliers_tb.id";

$data = mysqli_query($koneksi, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soal Nomor 6 dan 7</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>INVENTORY</h1>
            <a class="btn btn-primary" href="crud/products.php">Add Product</a>
            <a class="btn btn-primary" href="crud/suppliers.php">Add Supplier</a>
        </div>
        <div class="main">
            <table class="table table-bordered .table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Company Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data as $d) {
                    ?>
                        <tr>
                            <th scope="row"><?= $no; ?></th>
                            <td><?= $d["product_name"] ?></td>
                            <td><?= $d["company_name"] ?></td>
                            <td><?= $d["address"] ?></td>
                            <td><?= $d["phone"] ?></td>
                            <td>
                                <a href="crud/editproduct.php?edit=<?= $d["id"] ?>" class="btn btn-warning">Update</a>
                                <a href="crud/deleteproduct.php?id=<?= $d["id"] ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin dihapus??')">Delete</a>

                            </td>
                        </tr>
                    <?php
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>