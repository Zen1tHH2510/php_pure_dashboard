<?php
include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Helpers\HTTP;
use Libs\Database\CityTable;

$data = [
    "name" => $_POST['name'],
];
// var_dump($data);

$table = new CityTable(new MySQL);
$table->insert($data);
HTTP::redirect("city.php", "create success");
