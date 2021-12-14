<?php

namespace Scandiweb\Model;

abstract class AbstractProduct{
    protected $sku;
    protected $name;
    protected $price;

    public function __construct($sku, $name, $price){
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
    }

    public function getSKU(){
        return $this->sku;
    }

    public function getName(){
        return $this->name;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setSKU($sku){
        $this->sku = $sku;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public abstract function getSaveQuery($mainTable): array;
    public static abstract function getPullQuery($mainTable, $subTable): string;
    public static abstract function getRemoveQuery($requestedSku): string;
    public abstract function toString();
}

?>