<?php

require __DIR__ . '/autoloader.php';
use Scandiweb\Services\Impl\ProductService;

$service = new ProductService();

$items = $service->listAllProducts();

$service->saveProduct("asdfqcq", "Meta Char", 150, "15", "book");
$service->saveProduct("avaevee", "Meta Salad", 11, "15", "dvd");
$service->saveProduct("1231231r", "Meta MAsk", 12, "15x12x5", "furniture");
$service->saveProduct("1c1c3c1", "aeraefae aef", 15, "15", "dvd");
$service->saveProduct("c13c13c3", "ave vaevaevaee", 5, "15", "book");
$service->saveProduct("123312c121231r", "acvae MAsk", 3, "15x12x5", "furniture");
$service->saveProduct("vaeeaereqr", "Meta MAsk", 12, "15x12x5", "furniture");
$service->saveProduct("vvaveve", "Meta MAsk", 12, "15x12x5", "furniture");
$service->saveProduct("vaeeaar", "Meta MAsk", 12, "15x12x5", "furniture");
$service->saveProduct("qavaaev", "Meta MAsk", 12, "15x12x5", "furniture");
$service->saveProduct("avaxad", "Meta MAsk", 12, "15x12x5", "furniture");
$service->saveProduct("vaeraer", "Meta MAsk", 12, "15x12x5", "furniture");
$service->saveProduct("qreqre", "Meta MAsk", 12, "15x12x5", "furniture");

$service->saveProduct("asdfqcq", "aevaevae Char", 17, "15", "furniture");

foreach($items as $item){
    echo $item->getSKU()."<br>";
}

$service->deleteProducts(["qreqre", "avaxad", "123312c121231r", "vvaveve", "vaeeaar"]);

echo "<br> <br> <br>";

$new = $service->listAllProducts();

foreach($new as $item){
    echo $item->getSKU()."<br>";
}

?>