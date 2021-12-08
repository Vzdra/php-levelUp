<?php

require __DIR__ . '/autoloader.php';
use Scandiweb\Services\Impl\ProductService;

$service = new ProductService();

echo $service->saveProduct("ASQF", "TV", 250.00, "12x15x51", "furniture");
// echo $productService->listAllProducts();

// use Scandiweb\Services\ProductService;

// $database = new ProductService();
// $database->listAllProducts();

?>