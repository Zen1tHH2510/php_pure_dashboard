<?php
include("../vendor/autoload.php");

use Libs\Database\Mysql;
use Helpers\HTTP;
use Libs\Database\CustomerTable;

$id = $_GET['id'];
$table = new CustomerTable(new Mysql);
$table->delete($id);

HTTP::redirect('/customer.php');
