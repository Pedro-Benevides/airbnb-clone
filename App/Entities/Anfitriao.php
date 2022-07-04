<?php

namespace App\Entities;

use App\Models\Usuario;

require_once dirname(dirname(__FILE__)) . '\Models\Usuario.php';

/**
 * Class Locatario
 *
 * @property array $locacoes
 * @property array $acomodacoes
 *
 * @package App\Entities
 */
class Anfitriao extends Usuario
{
    private $locacoes;
    private $acomodacoes;

    public function __construct(
        Usuario $usuario,
        array $acomodacoes = array()
    ) {
        $this->acomodacoes = $acomodacoes;

        parent::__construct(
            $usuario->getNome(),
            $usuario->getCpf(),
            $usuario->getEmail(),
            $usuario->getSenha(),
            $usuario->getPais(),
            $usuario->getTelefone(),
        );
    }

    /**
     * Get the value of locacoes
     */
    public function getLocacoes(): array
    {
        return $this->locacoes;
    }

    /**
     * Set the value of locacoes
     *
     * @return  self
     */
    public function setLocacoes(array $locacoes)
    {
        $this->locacoes = $locacoes;

        return $this;
    }

    /**
     * Get the value of acomodacoes
     */
    public function getAcomodacoes(): array
    {
        return $this->acomodacoes;
    }

    /**
     * Set the value of acomodacoes
     *
     * @return  self
     */
    public function setAcomodacoes(array $acomodacoes)
    {
        $this->acomodacoes = $acomodacoes;

        return $this;
    }
}
