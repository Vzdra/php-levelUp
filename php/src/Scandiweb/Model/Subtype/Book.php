<?php

namespace Scandiweb\Model\Subtype;

use Scandiweb\Model\AbstractProduct;

class Book extends AbstractProduct{
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
}

?>