<?php
include("../vendor/autoload.php");

use Libs\Database\Mysql;
use Helpers\HTTP;
use Libs\Database\CustomerTable;

$id = $_GET['id'];
$data = [
    "name" => $_POST['name'],
    "phone" => $_POST['phone'],
    "address" => $_POST['address'],
    "customer_code" => ($_POST['customer_code']),
];
// var_dump($data);

$table = new CustomerTable(new Mysql);
$table->update($id, $data);
// var_dump($table->update($id, $data));

HTTP::redirect('customer.php');
