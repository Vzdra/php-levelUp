<?php

namespace Scandiweb\Persistence\Impl;

use mysqli;
use Scandiweb\Helper\QueryBuilder;
use Scandiweb\Model\AbstractProduct;
use Scandiweb\Model\Subtype\Book;
use Scandiweb\Model\Subtype\Dvd;
use Scandiweb\Model\Subtype\Furniture;
use Scandiweb\Persistence\DatabaseManagerInterface;

define("DB_HOST","db");
define("DB_USER","user");
define("DB_PASS","user");
define("DB_NAME","product_db");
define("PRODUCT_TABLE", "products");
define("DVD_TABLE", "dvd");
define("BOOK_TABLE", "book");
define("FURNITURE_TABLE", "furniture");
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

    public function selectProductsSortedBySKU(){
        $books = $this->connection->query(Book::getPullQuery("products"));
        $dvds = $this->connection->query(Dvd::getPullQuery("products"));
        $furniture = $this->connection->query(Furniture::getPullQuery("products"));

        echo $books;
    }

    
}

?>