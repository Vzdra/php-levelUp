<?php

namespace Scandiweb\Model\Subtype;

use Scandiweb\Model\AbstractProduct;

class Dvd extends AbstractProduct{
    private $sizeInMb;

    public function __construct($sku, $name, $price, $sizeInMb){
        parent::__construct($sku, $name, $price);
        $this->sizeInMb = $sizeInMb;
    }

    public function getSizeInMB(){
        return $this->sizeInMb;
    }

    public function setSizeInMB($sizeInMb){
        $this->sizeInMb = $sizeInMb;
    }
}

?>