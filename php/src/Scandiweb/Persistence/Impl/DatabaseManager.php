<?php

namespace Scandiweb\Persistence\Impl;

use Scandiweb\Helper\QueryBuilder;
use Scandiweb\Model\AbstractProduct;
use Scandiweb\Persistence\DatabaseManagerInterface;

define("DB_HOST","db");
define("DB_USER","user");
define("DB_PASS","user");
define("DB_NAME","product_db");
define("PRODUCT_TABLE", "products");
define("DVD_TABLE", "products");
define("BOOK_TABLE", "products");
define("FURNITURE_TABLE", "products");
define("SKU", "sku");

class DatabaseManager implements DatabaseManagerInterface{

    private $connection = null;
    private $queryBuilder = null;

    public function __construct(){
        $this->queryBuilder = new QueryBuilder();
        $this->connection = new \mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }

    public function insertProduct(AbstractProduct $product){

    }

    public function selectProductsSortedBySKU(): string{
        $sql = $this->queryBuilder->select("*")
        ->space()->from(PRODUCT_TABLE)
        ->space()->innerJoin(DVD_TABLE)
        ->space()->on("sku")
        ->space()->innerJoin(BOOK_TABLE)
        ->space()->on("sku")
        ->space()->innerJoin(FURNITURE_TABLE)
        ->space()->on("sku")
        ->space()->orderBy("sku", "ASC")
        ->end()->getQuery();

        return $sql;
    }

    
}

?>