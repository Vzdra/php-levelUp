<?php

namespace Scandiweb\Services\Impl;

use Scandiweb\Services\ProductServiceInterface;
use Scandiweb\Persistence\DatabaseManager;

class ProductService implements ProductServiceInterface{
    private $dbManager = null;

    public function __construct()
    {
        $this->dbManager = new DatabaseManager();
    }

    public function listAllProducts(): string{
        $this->dbManager->selectProductsSortedBySKU();
        return "";
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