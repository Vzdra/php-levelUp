<?php

namespace Scandiweb\Helper;

use Scandiweb\Model\AbstractProduct;

class ProductSort{

    public function cmp(AbstractProduct $a, AbstractProduct $b){
        return strcmp($a->getSKU(), $b->getSKU());
    }

    public function sortProducts(array $products){
        usort($products, array($this, "cmp"));
    }
}

?>