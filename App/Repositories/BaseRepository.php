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

    private function select($columns)
    {
        if (is_array($columns)) {
            return implode(', ', $columns);
        } else {
            return $columns = 'select * ';
        }
    }

    protected function insert(array $columns, array $values)
    {
        $columnsFormat = implode(', ', $columns);

        $valuesFormat = array_map(
            function ($value) {
                return '\'' . $value . '\'';
            },
            $values
        );
        $valuesFormat = implode(', ', $valuesFormat);

        return $this->insert . " ({$columnsFormat}) " . ' VALUES ' . " ({$valuesFormat}) ";
    }

    protected function where(string $column, string $operator, string $value, string $logicOperator = null)
    {
        if ($logicOperator) {
            return $logicOperator . $column . $operator . '\'' . $value . '\'';
        } else {
            return ' WHERE ' . $column . $operator . '\'' . $value . '\'';
        }
    }

    protected function search(string $column = null, string $operator = null, string $value = null, $selectColumns = null, $addwhere = false)
    {
        if ($addwhere) {
            return $this->select($selectColumns) . $this->from . $this->where($column, $operator, $value);
        } else {
            return $this->select($selectColumns) . $this->from;
        }
    }

    protected function update(string $setColumn, string $whereColumn, string $setValue, string $whereValue)
    {
        return $this->update . 'SET' . $setColumn . '=' . $setValue .  $this->where($whereColumn, '=', $whereValue);
    }

    protected function delete(string $column, string $operator, string $value)
    {
        return $this->delete . $this->where($column, $operator, $value);
    }
}
