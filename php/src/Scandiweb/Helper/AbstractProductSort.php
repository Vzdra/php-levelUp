<?php

namespace Scandiweb\Helper;

use Scandiweb\Model\AbstractProduct;

abstract class AbstractProductSort{

    private function cmp(AbstractProduct $a, AbstractProduct $b){
        return strcmp($a->getSKU(), $b->getSKU());
    }

    private static function sortProducts(array $products){
        usort($products, "cmp");
    }
}

?>