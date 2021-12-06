<?php

use Scandiweb\Services\Impl\ProductService;

require __DIR__ . '/autoloader.php';

$service = new ProductService();

echo $service->listAllProducts();
// echo $productService->listAllProducts();

// use Scandiweb\Services\ProductService;

// $database = new ProductService();
// $database->listAllProducts();

?>