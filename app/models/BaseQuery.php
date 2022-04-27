<?php

namespace app\models;

class BaseQuery
{
    //TODO: adicionar query de relacionamento
    private $where;
    private $insert;
    private $delete;
    private $update;

    function __construct(string $tableName)
    {
        $this->where  = 'FROM' . `($tableName)` . 'WHERE';
        $this->insert = 'INSERT INTO' . `($tableName)`;
        $this->delete = 'DELETE FROM' . `($tableName)` . 'WHERE';
        $this->update = 'UPDATE' . `($tableName)`;
    }

    private function selectQuery($selectColumns = 'SELECT *')
    {
        return $selectColumns;
    }

    public function insertQuery(array $columns, array $values)
    {
        $columnsFormat = implode(', ', $columns);
        $valuesFormat = implode(', ', $values);

        return $this->insert . `($columnsFormat)` . 'VALUES' . `($valuesFormat)`;
    }

    public function whereQuery(string $column, string $operator, string $value, string $logicOperator = "")
    {
        return $logicOperator . $this->where . $column . $operator . $value;
    }

    public function searchQuery(string $column, string $operator, string $value, $selectColumns = 'SELECT *')
    {
        return $this->selectQuery($selectColumns) . $this->whereQuery($column, $operator, $value);
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
