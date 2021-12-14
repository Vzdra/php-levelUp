<?php

namespace Scandiweb\Model\Subtype;

use Scandiweb\Model\AbstractProduct;
use Scandiweb\Helper\QueryBuilder;

class Furniture extends AbstractProduct{
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

    public function getSaveQuery($mainTable): array{
        $qb = new QueryBuilder();
        $t1 = $qb->insert($mainTable, [])->space()->values($this->sku, $this->name, $this->price)->end()->getQuery();
        $t2 = $qb->insert("furniture", [])->space()->values($this->sku, $this->dimensions)->end()->getQuery();
        return [$t1, $t2];
    }

    public static function getRemoveQuery($requestedSku): string{
        $qb = new QueryBuilder();
        $t2 = $qb->delete("furniture")->space()->where("furniture.sku='".$requestedSku."'")->end()->getQuery();
        return $t2;
    }

    public static function getPullQuery($mainTable, $subTable): string{
        $qb = new QueryBuilder();
        $t1 = $qb->select("*")->space()->from($mainTable)->space()->innerJoin($subTable)->space()->on($mainTable.".sku=".$subTable.".sku")->end()->getQuery();
        return $t1;
    }

    public function toString(){
        return $this->sku." - ".$this->name." / ".$this->price." - ".$this->dimensions;
    }
}

?>