<?php

require __DIR__ . '/autoloader.php';
use Scandiweb\Services\Impl\ProductService;

$service = new ProductService();

$service->saveProduct("ASQF", "TV", 250.00, "12x15x51", "furniture");
// $service->saveProduct("QAVAAERAW", "Star Wars", 15.00, "15", "dvd");
// $service->saveProduct("AAVAEAEAERAEQ", "LOTR", 22.00, "21", "book");
// echo $productService->listAllProducts();

// use Scandiweb\Services\ProductService;

// $database = new ProductService();
// $database->listAllProducts();

?>