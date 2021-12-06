<?php

namespace Scandiweb\Model\Subtype;

use Scandiweb\Model\AbstractProduct;

class Book extends AbstractProduct{
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
}

?>