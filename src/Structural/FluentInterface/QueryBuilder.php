<?php


namespace App\Structural\FluentInterface;


class QueryBuilder
{
    private $table;
    private $columns = [];
    private $conditions = [];

    public function table($table)
    {
        $this->table = $table;
        return $this;
    }

    public function select($columns)
    {
        $this->columns = is_array($columns) ? $columns : func_get_args();
        return $this;
    }

    public function where($column, $operator, $value)
    {
        $this->conditions[] = [$column, $operator, $value];
        return $this;
    }

    public function getQuery()
    {
        $query = "SELECT " . implode(', ', $this->columns) . " FROM " . $this->table;

        if (!empty($this->conditions)) {
            $query .= " WHERE ";
            foreach ($this->conditions as $condition) {
                $query .= $condition[0] . " " . $condition[1] . " " . $condition[2] . " AND ";
            }
            $query = rtrim($query, " AND ");
        }

        return $query;
    }
}