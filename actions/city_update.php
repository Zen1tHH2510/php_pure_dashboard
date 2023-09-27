<?php
include("../vendor/autoload.php");

use Libs\Database\Mysql;
use Helpers\HTTP;
use Libs\Database\CityTable;

$id = $_GET['id'];
$data = [
    "name" => $_POST['name'],
];
// var_dump($data);

$table = new CityTable(new Mysql);
$table->update($id, $data);
// var_dump($table->update($id, $data));

HTTP::redirect('city.php');
