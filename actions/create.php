<?php
include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Helpers\HTTP;
use Libs\Database\CustomerTable;

$data = [
    "name" => $_POST['name'],
    "phone" => $_POST['phone'],
    "address" => $_POST['address'],
    "customer_code" => ($_POST['customer_code']),
];
var_dump($data);

$table = new CustomerTable(new MySQL);
$table->insert($data);
HTTP::redirect("/customer.php", "create success");
