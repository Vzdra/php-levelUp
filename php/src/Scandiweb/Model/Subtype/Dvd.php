<?php

namespace Scandiweb\Model\Subtype;

use Scandiweb\Model\AbstractProduct;
use Scandiweb\Helper\QueryBuilder;

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

    public function getSaveQuery($mainTable): array{
        $qb = new QueryBuilder();
        $t1 = $qb->insert($mainTable, [])->space()->values($this->sku, $this->name, $this->price)->end()->getQuery();
        $t2 = $qb->insert("dvd", [])->space()->values($this->sku, $this->weightInKG)->end()->getQuery();
        return [$t1, $t2];
    }

    public static function getPullQuery($mainTable): string{
        $qb = new QueryBuilder();
        $t1 = $qb->select("*")->space()->from($mainTable)->space()->innerJoin("dvd")->space()->on("sku")->end()->getQuery();
        return $t1;
    }
}

?>