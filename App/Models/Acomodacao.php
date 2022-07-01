<?php

namespace App\Models;

/**
 * Class Acomodacao
 *
 * @property Usuario $proprietario
 * @property float $diaria
 * @property string $capacidade
 * @property string $cep
 * @property string $rua
 * @property string $numero
 * @property Cidade $cidade
 * @property TipoAcomodacao $tipoAcomodacao
 * @property string $complemento
 * @property string $imagemInterior
 * @property string $imagemFrontal
 * @property string $imagemAdicional
 * @property string $descricao
 * 
 *
 * @package App\Models
 */
class Acomodacao
{
    private $id;
    private $proprietario;
    private $tipoAcomodacao;
    private $cep;
    private $rua;
    private $numero;
    private $cidade;
    private $diaria;
    private $complemento;
    private $capacidade;
    private $descricao;
    private $imagemInterior;
    private $imagemFrontal;
    private $imagemAdicional;
    private $confortos;

    function __construct(
        Usuario $proprietario,
        float $diaria,
        int $capacidade,
        string $cep,
        string $rua,
        string $numero,
        Cidade $cidade,
        TipoAcomodacao $tipoAcomodacao,
        string $complemento = null,
        string $imagemInterior = null,
        string $imagemFrontal = null,
        string $imagemAdicional = null,
        string $descricao = null

    ) {
        $this->proprietario = $proprietario;
        $this->tipoAcomodacao = $tipoAcomodacao;
        $this->cep = $cep;
        $this->rua = $rua;
        $this->numero = $numero;
        $this->cidade = $cidade;
        $this->complemento = $complemento;
        $this->diaria = floatval(number_format($diaria, 2, '.', ''));
        $this->capacidade = $capacidade;
        $this->descricao = $descricao;
        $this->imagemInterior = $imagemInterior;
        $this->imagemFrontal = $imagemFrontal;
        $this->imagemAdicional = $imagemAdicional;
    }

    public function getCep(): string
    {
        return $this->cep;
    }

    public function getRua(): string
    {
        return $this->rua;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function getCidade(): Cidade
    {
        return $this->cidade;
    }

    public function getDiaria(): float
    {
        return $this->diaria;
    }

    public function getComplemento(): string
    {
        return $this->complemento;
    }

    /**
     * Get the value of capacidade
     */
    public function getCapacidade(): int
    {
        return $this->capacidade;
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * Get the value of imagemInterior
     */
    public function getImagemInterior(): string
    {
        return $this->imagemInterior;
    }

    /**
     * Get the value of imagemFrontal
     */
    public function getImagemFrontal(): string
    {
        return $this->imagemFrontal;
    }

    /**
     * Get the value of imagemAdicional
     */
    public function getImagemAdicional(): string
    {
        return $this->imagemAdicional;
    }

    /**
     * Set the value of cep
     *
     * @return  self
     */
    public function setCep(string $cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Set the value of rua
     *
     * @return  self
     */
    public function setRua(string $rua)
    {
        $this->rua = $rua;

        return $this;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */
    public function setNumero(string $numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Set the value of cidade
     *
     * @return  self
     */
    public function setCidade(Cidade $cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Set the value of diaria
     *
     * @return  self
     */
    public function setDiaria(float $diaria)
    {
        $this->diaria = floatval(number_format($diaria, 2, '.', ''));

        return $this;
    }

    /**
     * Set the value of complemento
     *
     * @return  self
     */
    public function setComplemento(string $complemento)
    {
        $this->complemento = $complemento;

        return $this;
    }

    /**
     * Set the value of capacidade
     *
     * @return  self
     */
    public function setCapacidade(int $capacidade)
    {
        $this->capacidade = $capacidade;

        return $this;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */
    public function setDescricao(string $descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Set the value of imagemInterior
     *
     * @return  self
     */
    public function setImagemInterior(string $imagemInterior)
    {
        $this->imagemInterior = $imagemInterior;

        return $this;
    }

    /**
     * Set the value of imagemFrontal
     *
     * @return  self
     */
    public function setImagemFrontal(string $imagemFrontal)
    {
        $this->imagemFrontal = $imagemFrontal;

        return $this;
    }

    /**
     * Set the value of imagemAdicional
     *
     * @return  self
     */
    public function setImagemAdicional(string $imagemAdicional)
    {
        $this->imagemAdicional = $imagemAdicional;

        return $this;
    }

    /**
     * Get the value of proprietario
     */
    public function getProprietario(): Usuario
    {
        return $this->proprietario;
    }

    /**
     * Set the value of proprietario
     *
     * @return  self
     */
    public function setProprietario(Usuario $proprietario)
    {
        $this->proprietario = $proprietario;

        return $this;
    }

    /**
     * Get the value of tipoAcomodacao
     */
    public function getTipoAcomodacao(): TipoAcomodacao
    {
        return $this->tipoAcomodacao;
    }

    /**
     * Set the value of tipoAcomodacao
     *
     * @return  self
     */
    public function setTipoAcomodacao(TipoAcomodacao $tipoAcomodacao)
    {
        $this->tipoAcomodacao = $tipoAcomodacao;

        return $this;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of confortos
     */ 
    public function getConfortos()
    {
        return $this->confortos;
    }

    /**
     * Set the value of confortos
     *
     * @return  self
     */ 
    public function setConfortos($confortos)
    {
        $this->confortos = $confortos;

        return $this;
    }
}
