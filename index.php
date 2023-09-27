<?php
include("vendor/autoload.php");

use Libs\Database\Mysql;
use Libs\Database\CityTable;
use Libs\Database\DriverTable;
use Libs\Database\CustomerTable;

$table = new CustomerTable(new Mysql);
$users = $table->getAll();
$table = new DriverTable(new Mysql);
$drivers = $table->getAll();
$table = new CityTable(new Mysql);
$cities = $table->getAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="js/bootstrap.bundle.min.js" defer></script>
    <title>Dashboard</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row g-0" style="min-height: 480px">
            <div class="col-2 bg-light">
                <h1 class="h3 text-center text-primary my-3">
                    <span class="ms-2 d-none d-lg-inline">Admin</span>
                </h1>

                <ul class="list-group mb-4 text-center text-lg-start">
                    <li class="list-group-item">
                        <a href="#" class="text-decoration-none">
                            <i class="fa-solid fa-home"></i>
                            <span class="ms-2 d-none d-lg-inline">Home</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="customer.php" class="text-decoration-none">
                            <i class="fa-solid fa-users"></i>
                            <span class="ms-2 d-none d-lg-inline">Customers</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="driver.php" class="text-decoration-none">
                            <i class="fa-solid fa-truck"></i>
                            <span class="ms-2 d-none d-lg-inline">Drivers</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="city.php" class="text-decoration-none">
                            <i class="fa-solid fa-map"></i>
                            <span class="ms-2 d-none d-lg-inline">City</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-10 ">
                <nav class="navbar navbar-expand bg-light">
                    <div class="container-fluid">
                        <div class="flex-fill"></div>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fa-solid fa-cog"></i>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="fa-solid fa-user-circle"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- ... -->
                                    <a href="#" class="dropdown-item">
                                        <i class="fa-solid fa-user me-3"></i>
                                        Profile
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="fa-solid fa-sign-out me-3"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div class="container-fluid mt-3">
                    <div class="row flex-column flex-lg-row">
                        <div class="col mb-3">
                            <div class="bg-light" style="height: 150px">
                                <table class="table table-striped">
                                    <h3>Customers</h3>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Customer Code</th>
                                    </tr>
                                    <?php foreach ($users as $user) : ?>
                                        <tr>
                                            <td><?= $user->id ?></td>
                                            <td><?= $user->name ?></td>
                                            <td><?= $user->phone ?></td>
                                            <td><?= $user->address ?></td>
                                            <td><?= $user->customer_code ?></td>
                                        </tr>
                                    <?php endforeach ?>

                                </table>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="bg-light" style="height: 150px">
                                <div class="bg-light" style="height: 150px">
                                    <table class="table table-striped">
                                        <h3>Drivers</h3>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>NRC</th>
                                        </tr>
                                        <?php foreach ($drivers as $driver) : ?>
                                            <tr>
                                                <td><?= $driver->id ?></td>
                                                <td><?= $driver->name ?></td>
                                                <td><?= $driver->phone ?></td>
                                                <td><?= $driver->address ?></td>
                                                <td><?= $driver->nrc ?></td>
                                            </tr>
                                        <?php endforeach ?>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="bg-light" style="height: 150px">
                                <div class="bg-light" style="height: 150px">
                                    <table class="table table-striped">
                                        <h3>Cities</h3>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                        </tr>
                                        <?php foreach ($cities as $city) : ?>
                                            <tr>
                                                <td><?= $city->id ?></td>
                                                <td><?= $city->name ?></td>
                                            </tr>
                                        <?php endforeach ?>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>