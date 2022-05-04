<?php

namespace App\Repositories;

class BaseRepository
{
    //TODO: adicionar query de relacionamento
    private $from;
    private $insert;
    private $delete;
    private $update;

    function __construct(string $tableName)
    {
        $this->from = ' FROM ' . "`{$tableName}`";
        $this->insert = 'INSERT INTO ' . "`{$tableName}`";
        $this->delete = 'DELETE FROM ' . "`{$tableName}`" . ' WHERE ';
        $this->update = 'UPDATE ' . "`{$tableName}`";
    }

    private function selectQuery($columns)
    {
        if (is_array($columns)) {
            return implode(', ', $columns);
        } else {
            return $columns = 'select * ';
        }
    }

    public function insertQuery(array $columns, array $values)
    {
        $columnsFormat = implode(', ', $columns);
        $valuesFormat = implode(', ', $values);

        return $this->insert . " ({$columnsFormat}) " . ' VALUES ' . " ({$valuesFormat}) ";
    }

    public function whereQuery(string $column, string $operator, string $value, string $logicOperator = null)
    {
        if ($logicOperator) {
            return $logicOperator . $column . $operator . '\'' . $value . '\'';
        } else {
            return ' WHERE ' . $column . $operator . '\'' . $value . '\'';
        }
    }

    public function searchQuery(string $column, string $operator, string $value, $selectColumns = null)
    {
        return $this->selectQuery($selectColumns) . $this->from . $this->whereQuery($column, $operator, $value);
    }

    public function updateQuery(string $setColumn, string $whereColumn, string $setValue, string $whereValue)
    {
        return $this->update . 'SET' . $setColumn . '=' . $setValue .  $this->whereQuery($whereColumn, '=', $whereValue);
    }

    public function deleteQuery(string $column, string $operator, string $value)
    {
        return $this->delete . $this->whereQuery($column, $operator, $value);
    }
}
