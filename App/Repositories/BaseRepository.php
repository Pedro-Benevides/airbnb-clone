<?php

namespace App\Repositories;

class BaseRepository
{
    private $from;
    private $insert;
    private $delete;
    private $update;
    private $schema;

    function __construct(string $tableName)
    {
        $schema = '`' . $_SESSION['DB_DATABASE'] . '`' . "." . "`{$tableName}`";
        $this->from = ' FROM ' . $schema;
        $this->insert = 'INSERT INTO ' . $schema;
        $this->delete = 'DELETE FROM ' .  $schema . ' WHERE ';
        $this->update = 'UPDATE ' . $schema;
        $this->schema = $schema;
    }

    private function formatArrayValues(array $values = null)
    {
        if (is_array($values)) {
            return implode(', ', array_map(function ($value) {
                return '\'' . $value . '\'';
            }, $values));
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

    protected function whereIn(string $column, array $values, string $logicOperator = null)
    {
        if ($logicOperator) {
            return $logicOperator . $column . ' IN ' .  " ({$this->formatArrayValues($values)}) ";
        } else {
            return ' WHERE ' . $column . ' IN ' . " ({$this->formatArrayValues($values)}) ";
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

    protected function getAll($columns = null)
    {
        return $this->select($columns) . $this->from;
    }

    protected function update($setColumns, array $setValue, string $whereColumn, string $whereValue)
    {
        if (is_array($setColumns)) {
            $setColumns = implode(', ', $setColumns);
        }

        $setValue = $this->formatArrayValues($setValue);

        return $this->update . ' SET ' . $setColumns . ' = ' . $setValue .  $this->where($whereColumn, ' = ', $whereValue);
    }

    protected function delete(string $column, string $operator, string $value)
    {
        return $this->delete . $this->where($column, $operator, $value);
    }

    protected function join(string $table, string $joinColumn, string $fkColumn)
    {
        return ' JOIN ' . $table . ' ON ' . $joinColumn . ' = ' . $fkColumn;
    }

    protected function groupBy(string $column, $thisTable = false)
    {
        $groupQuery = ' GROUP BY ' . $column;

        if ($thisTable) {
            $groupQuery = ' GROUP BY ' . $this->schema . "." . $column;
        }

        return $groupQuery;
    }
}
