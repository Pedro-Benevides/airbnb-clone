<?php

namespace App\Models;

/**
 * Class TipoAcomodacao
 *
 * @property string $nome
 *
 * @package App\Models
 */

class TipoAcomodacao
{
    private $nome;

    public function __construct(string $nome)
    {
        $this->nome = ucwords($nome);
    }

    /**
     * Get the value of nome
     */
    public function getTipo(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setTipo(string $nome)
    {
        $this->nome = $nome;

        return $this;
    }
}
