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
        $schema = '`' . $_SESSION['DB_DATABASE'] . '`' . "." . "`{$tableName}`";
        $this->from = ' FROM ' . $schema;
        $this->insert = 'INSERT INTO ' . $schema;
        $this->delete = 'DELETE FROM ' .  $schema . ' WHERE ';
        $this->update = 'UPDATE ' . $schema;
    }

    private function formatArrayValues(array $columns = null)
    {
        if (is_array($columns)) {
            return implode(', ', array_map(function ($column) {
                return '\'' . $column . '\'';
            }, $columns));
        } else {
            return null;
        }
    }

    private function select($columns = null)
    {
        $columns = $this->formatArrayValues($columns);
        if (!empty($columns)) {
            return "select" . $columns;
        } else {
            return 'select * ';
        }
    }

    protected function insert(array $columns, array $values)
    {
        $columnsFormat = implode(', ', $columns);
        $valuesFormat = implode(', ', array_map(function ($value) {
            return '\'' . $value . '\'';
        }, $values));

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

    protected function search(string $column, string $operator, string $value, $selectColumns = null)
    {
        return $this->select($selectColumns) . $this->from . $this->where($column, $operator, $value);
    }

    protected function getAll()
    {
        return $this->select() . $this->from;
    }

    protected function update($setColumns, $setValue, string $whereColumn, string $whereValue)
    {
        if (is_array($setColumns)) {
            $setColumns = $this->formatArrayValues($setColumns);
        }

        if (is_array($setValue)) {
            $setValue = $this->formatArrayValues($setValue);
        }

        return $this->update . 'SET' . $setColumns . '=' . $setValue .  $this->where($whereColumn, '=', $whereValue);
    }

    protected function delete(string $column, string $operator, string $value)
    {
        return $this->delete . $this->where($column, $operator, $value);
    }
}
