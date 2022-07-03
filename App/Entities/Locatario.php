<?php

namespace App\Entities;

use App\Models\Usuario;
use App\Models\Cartao;

require_once dirname(dirname(__FILE__)) . '\Models\Usuario.php';
require_once dirname(dirname(__FILE__)) . '\Models\Cartao.php';

/**
 * Class Locatario
 *
 * @property Cartao $cartao
 * @property array $locacoes
 * @property array $comentarios
 *
 * @package App\Entities
 */
class Locatario extends Usuario
{
    private $cartao;
    private $locacoes;
    private $comentarios;

    public function __construct(
        Usuario $usuario,
        Cartao $cartao = null,
    ) {
        $this->cartao = $cartao;

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
     * Get the value of cartao
     */
    public function getCartao(): ?Cartao
    {
        return $this->cartao;
    }

    /**
     * Set the value of cartao
     *
     * @return  self
     */
    public function setCartao(Cartao $cartao = null)
    {
        $this->cartao = $cartao;

        return $this;
    }

    /**
     * Get the value of locacoes
     */
    public function getLocacoes()
    {
        return $this->locacoes;
    }

    /**
     * Set the value of locacoes
     *
     * @return  self
     */
    public function setLocacoes($locacoes)
    {
        $this->locacoes = $locacoes;

        return $this;
    }

    /**
     * Get the value of comentarios
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }

    /**
     * Set the value of comentarios
     *
     * @return  self
     */
    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;

        return $this;
    }
}
