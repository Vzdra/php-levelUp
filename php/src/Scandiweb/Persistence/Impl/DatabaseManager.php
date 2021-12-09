<?php

namespace Scandiweb\Persistence\Impl;

use mysqli;
use Scandiweb\Helper\QueryBuilder;
use Scandiweb\Model\AbstractProduct;
use Scandiweb\Model\Subtype\Book;
use Scandiweb\Model\Subtype\Dvd;
use Scandiweb\Model\Subtype\Furniture;
use Scandiweb\Persistence\DatabaseManagerInterface;
use Scandiweb\Persistence\Configuration\Config;

class DatabaseManager implements DatabaseManagerInterface{

    private $connection = null;

    public function __construct(){
        $this->connection = new \mysqli(Config::DB_HOST, Config::DB_USER, Config::DB_PASS, Config::DB_NAME);
    }

    public function insertProduct(AbstractProduct $product){
        $sql = $product->getSaveQuery(Config::PRODUCT_TABLE);
        
        mysqli_query($this->connection, $sql[0]);

        if(mysqli_affected_rows($this->connection) != -1){
            mysqli_query($this->connection, $sql[1]);
            return true;
        }

        return false;
    }

    public function selectProductsSortedBySKU(){
        $itemArray = [];

        $books = $this->connection->query(Book::getPullQuery(Config::PRODUCT_TABLE, Config::BOOK_TABLE));
        $dvds = $this->connection->query(Dvd::getPullQuery(Config::PRODUCT_TABLE, Config::DVD_TABLE));
        $furniture = $this->connection->query(Furniture::getPullQuery(Config::PRODUCT_TABLE, Config::FURNITURE_TABLE));

        $this->insertToArray($itemArray, $furniture, Config::DIMENSIONS, Furniture::class);
        $this->insertToArray($itemArray, $books, Config::WEIGHT_KG, Book::class);
        $this->insertToArray($itemArray, $dvds, Config::SIZE_MB, Dvd::class);

        return $itemArray;
    }


    private function insertToArray(&$array, $result, $thirdValueName, $class){
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $product = new $class($row[Config::SKU], $row[Config::PROD_NAME], $row[Config::PRICE], $row[$thirdValueName]);
                array_push($array, $product);
            }
        }
    }

    
}

?>