<?php

require __DIR__ . '/autoloader.php';
use Scandiweb\Services\Impl\ProductService;

$service = new ProductService();

$service->saveProduct("ASQF", "TV", 250.00, "12x15x51", "furniture");
$service->saveProduct("QAVAAERAW", "Star Wars", 15.00, "15", "dvd");
$service->saveProduct("AAVAEAEAERAEQ", "LOTR", 22.00, "21", "book");
$service->saveProduct("acae2312", "Star Wars", 15.00, "15", "dvd");
$service->saveProduct("avae34ra33", "LOTR", 22.00, "21", "book");
$service->saveProduct("d13d1v313", "Star Wars", 15.00, "15", "dvd");
$service->saveProduct("341f134r3r", "LOTR", 22.00, "21", "book");
$service->saveProduct("11231", "LOTR", 22.00, "21", "book");
$service->saveProduct("12312512", "Star Wars", 15.00, "15", "dvd");
$service->saveProduct("1525125521", "LOTR", 22.00, "21", "book");
$service->saveProduct("51123123", "Star Wars", 15.00, "15", "dvd");
$service->saveProduct("ac2341413", "TV", 250.00, "12x15x51", "furniture");

$service->saveProduct("12312512", "2312313221 Wars", 15.00, "15", "dvd");
$service->saveProduct("1525125521", "3123123123123", 22.00, "21", "book");
$service->saveProduct("51123123", "331231r1fv3413e13 Wars", 15.00, "15", "dvd");
$service->saveProduct("ac2341413", "13e13e13e13e13c3", 250.00, "12x15x51", "furniture");

$service->saveProduct("12312512", "Star avaeaev", 15.00, "15", "book");
$service->saveProduct("1525125521", "1231f12", 22.00, "21", "dvd");
$service->saveProduct("51123123", "123123 Wars", 15.00, "15", "furniture");
$service->saveProduct("ac2341413", "123121fv2", 250.00, "12x15x51", "book");


$list = $service->listAllProducts();

foreach($list as $val){
    echo $val->getSKU()."<br>";
}
// echo $productService->listAllProducts();

// use Scandiweb\Services\ProductService;

// $database = new ProductService();
// $database->listAllProducts();

?>