<?php
include("../vendor/autoload.php");

use Libs\Database\Mysql;
use Helpers\HTTP;
use Libs\Database\DriverTable;

$id = $_GET['id'];
$table = new DriverTable(new Mysql);
$table->delete($id);

HTTP::redirect('driver.php');
