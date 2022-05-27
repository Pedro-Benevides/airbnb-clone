<?php

namespace App\Models;

/**
 * Class TipoAcomodacao
 *
 * @property string $tipo
 *
 * @package App\Models
 */

class TipoAcomodacao
{
    private $tipo;

    public function __construct(string $tipo)
    {
        $this->tipo = ucwords($tipo);
    }

    /**
     * Get the value of tipo
     */
    public function getTipo(): string
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */
    public function setTipo(string $tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }
}
