<?php

namespace App\Models;

/**
 * Class País
 *
 * @property string $nome
 *
 * @package App\Models
 */

class Pais
{
    private $id;
    private $nome;

    public function __construct(string $nome)
    {
        $this->nome = ucwords($nome);
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
