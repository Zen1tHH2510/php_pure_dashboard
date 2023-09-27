<?php
include("../vendor/autoload.php");

use Libs\Database\Mysql;
use Helpers\HTTP;
use Libs\Database\DriverTable;

$id = $_GET['id'];
$data = [
    "name" => $_POST['name'],
    "phone" => $_POST['phone'],
    "address" => $_POST['address'],
    "nrc" => ($_POST['nrc']),
];
// var_dump($data);

$table = new DriverTable(new Mysql);
$table->update($id, $data);
// var_dump($table->update($id, $data));

HTTP::redirect('driver.php');
