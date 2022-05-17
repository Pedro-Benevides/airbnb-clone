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
    private $capacidade;
    private $descricao;
    private $imagemInterior;
    private $imagemFrontal;
    private $imagemAdicional;

    function __construct(
        string $cep,
        string $rua,
        string $numero,
        string $cidade,
        string $estado,
        string $pais,
        float $diaria,
        int $capacidade,
        string $complemento = null,
        string $descricao = null,
        string $imagemInterior = null,
        string $imagemFrontal = null,
        string $imagemAdicional = null

    ) {
        $this->cep = $cep;
        $this->rua = $rua;
        $this->numero = $numero;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->pais = $pais;
        $this->complemento = $complemento;
        $this->diaria = $diaria;
        $this->capacidade = $capacidade;
        $this->descricao = $descricao;
        $this->imagemInterior = $imagemInterior;
        $this->imagemFrontal = $imagemFrontal;
        $this->imagemAdicional = $imagemAdicional;
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

    /**
     * Get the value of capacidade
     */
    public function getCapacidade()
    {
        return $this->capacidade;
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Get the value of imagemInterior
     */
    public function getImagemInterior()
    {
        return $this->imagemInterior;
    }

    /**
     * Get the value of imagemFrontal
     */
    public function getImagemFrontal()
    {
        return $this->imagemFrontal;
    }

    /**
     * Get the value of imagemAdicional
     */
    public function getImagemAdicional()
    {
        return $this->imagemAdicional;
    }

    /**
     * Set the value of cep
     *
     * @return  self
     */
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Set the value of rua
     *
     * @return  self
     */
    public function setRua($rua)
    {
        $this->rua = $rua;

        return $this;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Set the value of cidade
     *
     * @return  self
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Set the value of pais
     *
     * @return  self
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Set the value of diaria
     *
     * @return  self
     */
    public function setDiaria($diaria)
    {
        $this->diaria = $diaria;

        return $this;
    }

    /**
     * Set the value of complemento
     *
     * @return  self
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;

        return $this;
    }

    /**
     * Set the value of capacidade
     *
     * @return  self
     */
    public function setCapacidade($capacidade)
    {
        $this->capacidade = $capacidade;

        return $this;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Set the value of imagemInterior
     *
     * @return  self
     */
    public function setImagemInterior($imagemInterior)
    {
        $this->imagemInterior = $imagemInterior;

        return $this;
    }

    /**
     * Set the value of imagemFrontal
     *
     * @return  self
     */
    public function setImagemFrontal($imagemFrontal)
    {
        $this->imagemFrontal = $imagemFrontal;

        return $this;
    }

    /**
     * Set the value of imagemAdicional
     *
     * @return  self
     */
    public function setImagemAdicional($imagemAdicional)
    {
        $this->imagemAdicional = $imagemAdicional;

        return $this;
    }
}
