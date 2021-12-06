<?php

namespace Scandiweb\Model\Subtype;

use Scandiweb\Model\AbstractProduct;
use Scandiweb\Model\ProductInterface;

class Book extends AbstractProduct implements ProductInterface{
    private $dimensions;

    public function __construct($sku, $name, $price, $dimensions){
        parent::__construct($sku, $name, $price);
        $this->dimensions = $dimensions;
    }

    public function getSizeInMB(){
        return $this->dimensions;
    }

    public function setSizeInMB($dimensions){
        $this->dimensions = $dimensions;
    }

    public function saveProduct(&$connection): bool{
        return true;
    }
}

?>