<?php

namespace Scandiweb\Services;

interface ProductServiceInterface{
    public function listAllProducts(): array;
    public function saveProduct(): bool;
    public function deleteProduct($id): bool;
    public function deleteProducts(array $ids): array;
}

?>