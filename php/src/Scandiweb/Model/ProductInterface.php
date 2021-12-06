<?php

namespace Scandiweb\Model;

interface ProductInterface{
    public function customSave(&$queryString): array;
}

?>