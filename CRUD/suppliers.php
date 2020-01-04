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
                Tambah Supplier
            </div>
            <div class="card-body">
                <form method="POST" action="tambahsupplier.php">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama Supplier</label>
                        <input name="company_name" type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label>Adress</label>
                        <textarea name="address" class="form-control" aria-label="With textarea"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Phone</label>
                        <input name="phone" type="number" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>
</body>

</html>