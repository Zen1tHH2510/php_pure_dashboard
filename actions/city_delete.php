<?php
include("../vendor/autoload.php");

use Libs\Database\Mysql;
use Helpers\HTTP;
use Libs\Database\CityTable;

$id = $_GET['id'];
$table = new CityTable(new Mysql);
$table->delete($id);

HTTP::redirect('city.php');
