<?php

namespace Scandiweb\Model;

interface ProductInterface{
    public function saveProduct(&$connection): bool;
}

?>