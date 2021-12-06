<?php

namespace Scandiweb\Services;

interface ProductServiceInterface{
    public function listAllProducts(): string;
    public function saveProduct(): bool;
    public function deleteProduct($id): bool;
    public function deleteProducts(array $ids): array;
}

?>