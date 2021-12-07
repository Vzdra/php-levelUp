<?php

namespace Scandiweb\Model\Subtype;

use Scandiweb\Helper\QueryBuilder;
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

    public function getSaveQuery($mainTable): array{
        $qb = new QueryBuilder();
        $t1 = $qb->insert($mainTable, [])->space()->values($this->sku, $this->name, $this->price)->end()->getQuery();
        $t2 = $qb->insert("book", [])->space()->values($this->sku, $this->weightInKG)->end()->getQuery();
        return [$t1, $t2];
    }

    public static function getPullQuery($mainTable): string{
        $qb = new QueryBuilder();
        $t1 = $qb->select("*")->space()->from($mainTable)->space()->innerJoin("book")->space()->on("sku")->end()->getQuery();
        return $t1;
    }
}

?>