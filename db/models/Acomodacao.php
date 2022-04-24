<?php
class Acomodacao
{
    //Table Atributes
    private $cep;
    private $rua;
    private $numero;
    private $cidade;
    private $estado;
    private $pais;
    private $diaria;
    private $complemento;

    //Querys
    const WHERE  = 'FROM acomodacao WHERE'; // adicionar forma de indicar colunas especificas pro select
    const INSERT = 'INSERT INTO acomodacao';
    const DELETE = 'DELETE FROM acomodacao WHERE';
    const UPDATE = 'UPDATE acomodacao';

    function __construct(string $cep, string $rua, string $numero, string $cidade, string $estado, string $pais, string $diaria, string $complemento = null)
    {
        $this->cep = $cep;
        $this->rua = $rua;
        $this->numero = $numero;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->pais = $pais;
        $this->complemento = $complemento;
        $this->diaria = $diaria;
    }

    public function getCep()
    {
        return $this->cep;
    }

    public function getRua()
    {
        return $this->rua;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function getDiaria()
    {
        return $this->diaria;
    }

    public function getComplemento()
    {
        return $this->complemento;
    }

    public function getPais()
    {
        return $this->pais;
    }

    public function insertQuery(array $columns, array $values)
    {
        $columnsFormat = implode(', ', $columns);
        $valuesFormat = implode(', ', $values);

        return Acomodacao::INSERT . `($columnsFormat)` . 'VALUES' . `($valuesFormat)`;
    }

    public function whereQuery(string $column, string $operator, string $value, $selectColumns = 'SELECT *')
    {
        return $selectColumns . Acomodacao::WHERE . $column . $operator . $value;
    }

    public function updateQuery(string $setColumn, string $whereColumn, string $setValue, string $whereValue)
    {

        return Acomodacao::UPDATE . 'SET' . $setColumn . '=' . $setValue . 'FROM acomodacao WHERE' . $whereColumn . '=' . $whereValue;
    }

    public function deleteQuery(string $column, string $operator, string $value)
    {
        return Acomodacao::DELETE . $column . $operator . $value;
    }
}
