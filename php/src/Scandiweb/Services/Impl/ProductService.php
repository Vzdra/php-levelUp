<?php

namespace Scandiweb\Services\Impl;

use Scandiweb\Services\ProductServiceInterface;
use Scandiweb\Persistence\Impl\DatabaseManager;
use Scandiweb\Helper\ProductSort;

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

    public function saveProduct(): bool{
        
        return false;
    }

    public function deleteProduct($id): bool{
        return false;
    }
    public function deleteProducts(array $ids): array{
        return [];
    }
}

?>