<?php

namespace Scandiweb\Helper;

class QueryBuilder{

    private $query = "";

    public function select(string ...$args): self{
        $this->query.="SELECT ".implode(", ", $args);
        return $this;
    }

    public function from(string $table): self{
        $this->query.="FROM ".$table;
        return $this;
    }

    public function where(string ...$where): self{
        $this->query.=$where === [] ? '' : 'WHERE '.implode(" AND ", $where);
        return $this;
    }

    public function innerJoin(string $table): self{
        $this->query.="INNER JOIN ".$table;
        return $this;
    }

    public function on(string $attribute): self{
        $this->query.="ON ".$attribute;
        return $this;
    }

    public function orderBy(string $attribute, string $order): self{
        $this->query.="ORDER BY ".$attribute." ".$order;
        return $this;
    }

    public function insert(string $table, array $columns): self{
        $this->query.="INSERT INTO ".$table." ".(empty($columns) ? "" : " (".implode(", ", $columns).")");
        return $this;
    }

    public function values(...$values): self{
        $this->query.="VALUES ('".implode("', '", $values)."')";
        return $this;
    }

    public function space(): self{
        $this->query.=" ";
        return $this;
    }

    public function end(): self{
        $this->query.=";";
        return $this;
    }

    public function getQuery(): string{
        $temp = $this->query;
        $this->query = "";
        return $temp;
    }
}

?>