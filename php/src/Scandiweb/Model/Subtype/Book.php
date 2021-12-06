<?php

namespace Scandiweb\Model\Subtype;

use Scandiweb\Model\AbstractProduct;
use Scandiweb\Model\ProductInterface;

class Book extends AbstractProduct implements ProductInterface{
    private $weightInKG;

    public function __construct($sku, $name, $price, $weightInKG){
        parent::__construct($sku, $name, $price);
        $this->weightInKG = $weightInKG;
    }

    public function getSizeInMB(){
        return $this->weightInKG;
    }

    public function setSizeInMB($weightInKG){
        $this->weightInKG = $weightInKG;
    }

    public function saveProduct(&$connection): bool{


        return true;
    }
}

?>