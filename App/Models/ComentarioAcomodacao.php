<?php

namespace App\Models;

use App\Entities\Locatario;

/**
 * Class ComentarioAcomodacao
 *
 * @property string $comentario
 * @property Acomodacao $acomodacao
 * @property Locatario $autor
 *
 * @package App\Models
 */

class ComentarioAcomodacao
{
    private $comentario;
    private $acomodacao;
    private $autor;

    public function __construct(string $comentario, Acomodacao $acomodacao, Locatario $autor)
    {
        $this->comentario = $comentario;
        $this->acomodacao = $acomodacao;
        $this->autor = $autor;
    }

    /**
     * Get the value of comentario
     */
    public function getComentario(): string
    {
        return $this->comentario;
    }

    /**
     * Set the value of comentario
     *
     * @return  self
     */
    public function setComentario(string $comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get the value of acomodacao
     */
    public function getAcomodacao(): Acomodacao
    {
        return $this->acomodacao;
    }

    /**
     * Set the value of acomodacao
     *
     * @return  self
     */
    public function setAcomodacao(Acomodacao $acomodacao)
    {
        $this->acomodacao = $acomodacao;

        return $this;
    }

    /**
     * Get the value of autor
     */
    public function getAutor(): Usuario
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     *
     * @return  self
     */
    public function setAutor(Usuario $autor)
    {
        $this->autor = $autor;

        return $this;
    }
}
