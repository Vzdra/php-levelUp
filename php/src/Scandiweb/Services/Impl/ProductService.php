<?php

namespace Scandiweb\Services\Impl;

use Scandiweb\Services\ProductServiceInterface;
use Scandiweb\Persistence\Impl\DatabaseManager;
use Scandiweb\Helper\ProductSort;
use Scandiweb\Helper\ProductTypes;

class ProductService implements ProductServiceInterface{
    private $dbManager = null;

    public function __construct()
    {
        $this->dbManager = new DatabaseManager();
    }

    public function listAllProducts(): array{
        $products = $this->dbManager->selectProductsSortedBySKU();

        $prodSorter = new ProductSort();
        $prodSorter->sortProducts($products);

        return $products;
    }

    public function saveProduct($sku, $prodName, $price, $attribute, $type): bool{
        $class = ProductTypes::PRODUCT_TYPES[$type];
        $product = new $class($sku, $prodName, $price, $attribute);

        $this->dbManager->insertProduct($product);

        return true;
    }

    public function deleteProduct($id): bool{
        return false;
    }
    public function deleteProducts(array $ids): array{
        return [];
    }
}

?>