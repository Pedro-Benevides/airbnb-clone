<?php

namespace App\Models;

/**
 * Class Acomodacao
 *
 * @property string $cep
 * @property string $rua
 * @property string $numero
 * @property string $cidade
 * @property string $estado
 * @property string $país
 * @property float $diaria
 * @property string $complemento
 *
 * @package App\Models
 */
class Acomodacao
{
    private $cep;
    private $rua;
    private $numero;
    private $cidade;
    private $estado;
    private $pais;
    private $diaria;
    private $complemento;

    function __construct(
        string $cep,
        string $rua,
        string $numero,
        string $cidade,
        string $estado,
        string $pais,
        float $diaria,
        string $complemento = null
    ) {
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
}
