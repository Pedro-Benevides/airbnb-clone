<?php

namespace App\Models;

/**
 * Class TipoAcomodacao
 *
 * @property string $descricao
 *
 * @package App\Models
 */

class TipoAcomodacao
{
    private $descricao;
    private $id;

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
        $this->descricao = $descricao;

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
}
