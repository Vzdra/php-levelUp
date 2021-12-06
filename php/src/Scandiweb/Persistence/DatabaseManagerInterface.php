<?php

namespace Scandiweb\Persistence;
use Scandiweb\Model\AbstractProduct;

interface DatabaseManagerInterface{
    public function insertProduct(AbstractProduct $product);
    public function selectProductsSortedBySKU();
}

?>