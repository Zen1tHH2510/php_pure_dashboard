<?php
include("vendor/autoload.php");

use Libs\Database\Mysql;
use Libs\Database\CustomerTable;

$id  = $_GET['id'];
$table = new CustomerTable(new Mysql);
$user = $table->edit($id);
var_dump($user);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="js/bootstrap.bundle.min.js" defer></script>
        <title>Dashboard</title>
    </head>
</head>

<body>
    <div class="container">
        <form action="actions/update.php?id=<?= $user->id ?>" method="post">
            <div class="mt-5 row">
                <div class=" col-8">
                    <input type="text" class="form-control mt-1" name="name" id="inputName" value="<?= $user->name ?>">
                </div>
                <div class="col-8">
                    <input type="text" class="form-control mt-1" name="phone" id="inputName" value="<?= $user->phone ?>">
                </div>
                <div class="col-8">
                    <input type="text" class="form-control mt-1" name="address" id="inputName" value="<?= $user->address ?>">
                </div>
                <div class="col-8">
                    <input type="text" class="form-control mt-1" name="customer_code" id="inputName" value="<?= $user->customer_code ?>">
                </div>
                <div class=" col-sm-8 mt-2">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>


        </form>
    </div>
</body>

</html>