<?php

namespace Scandiweb\Services;

interface ProductServiceInterface{
    public function listAllProducts(): array;
    public function saveProduct($sku, $name, $price, $attribute, $type): bool;
    public function deleteProducts(array $skus): bool;
}

?>