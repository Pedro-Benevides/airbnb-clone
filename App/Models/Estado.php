<?php

namespace App\Models;

/**
 * Class Estado
 *
 * @property string $nome
 * @property Pais $pais
 *
 * @package App\Models
 */

class Estado
{
    private $nome;
    private $pais;

    public function __construct(string $nome, Pais $pais)
    {
        $this->nome = ucwords($nome);
        $this->pais = $pais;
    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNome(string $nome)
    {
        $this->nome = ucwords($nome);

        return $this;
    }

    /**
     * Get the value of pais
     */
    public function getPais(): Pais
    {
        return $this->pais;
    }

    /**
     * Set the value of pais
     *
     * @return  self
     */
    public function setPais(Pais $pais)
    {
        $this->pais = $pais;

        return $this;
    }
}
