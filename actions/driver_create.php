<?php
include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Helpers\HTTP;
use Libs\Database\DriverTable;

$data = [
    "name" => $_POST['name'],
    "phone" => $_POST['phone'],
    "address" => $_POST['address'],
    "nrc" => ($_POST['nrc']),
];
// var_dump($data);

$table = new DriverTable(new MySQL);
$table->insert($data);
HTTP::redirect("/driver.php", "create success");
