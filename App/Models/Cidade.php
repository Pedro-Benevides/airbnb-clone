<?php

namespace App\Models;

/**
 * Class Cidade
 *
 * @property string $nome
 * @property Estado $estado
 *
 * @package App\Models
 */

class Cidade
{
    private $nome;
    private $estado;

    public function __construct(string $nome, Estado $estado)
    {
        $this->nome = ucwords($nome);
        $this->estado = $estado;
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
     * Get the value of estado
     */
    public function getEstado(): Estado
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */
    public function setEstado(Estado $estado)
    {
        $this->estado = $estado;

        return $this;
    }
}
