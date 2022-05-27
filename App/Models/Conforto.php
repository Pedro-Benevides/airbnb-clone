<?php

namespace App\Models;

/**
 * Class Conforto
 *
 * @property string $descricao
 *
 * @package App\Models
 */

class Conforto
{
    private $descricao;

    public function __construct(string $descricao)
    {
        $this->descricao = ucwords($descricao);
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */
    public function setDescricao(string $descricao)
    {
        $this->descricao = ucwords($descricao);

        return $this;
    }
}
