<?php

namespace App\Models;

/**
 * Class País
 *
 * @property Usuario $titular
 * @property string $numero
 * @property string $vencimento
 * @property string $cvv
 *
 * @package App\Models
 */

class Pais
{
    private $titular;
    private $numero;
    private $vencimento;
    private $cvv;

    public function __construct(Usuario $titular, string $numero, string $vencimento, string $cvv)
    {
        $this->titular = $titular;
        $this->numero = $numero;
        $this->vencimento = $vencimento;
        $this->cvv = $cvv;
    }

    /**
     * Get the value of numero
     */
    public function getNumero(): string
    {
        return $this->numero;
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
     * Get the value of vencimento
     */
    public function getVencimento(): string
    {
        return $this->vencimento;
    }

    /**
     * Set the value of vencimento
     *
     * @return  self
     */
    public function setVencimento(string $vencimento)
    {
        $this->vencimento = $vencimento;

        return $this;
    }

    /**
     * Get the value of cvv
     */
    public function getCvv(): string
    {
        return $this->cvv;
    }

    /**
     * Set the value of cvv
     *
     * @return  self
     */
    public function setCvv(string $cvv)
    {
        $this->cvv = $cvv;

        return $this;
    }

    /**
     * Get the value of titular
     */
    public function getTitular(): Usuario
    {
        return $this->titular;
    }

    /**
     * Set the value of titular
     *
     * @return  self
     */
    public function setTitular(Usuario $titular)
    {
        $this->titular = $titular;

        return $this;
    }
}
