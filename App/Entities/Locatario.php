<?php

namespace App\Entities;

use App\Models\Usuario;

require_once dirname(dirname(__FILE__)) . '\Models\Usuario.php';

class Locatario extends Usuario
{
    private $cartao;
    private $locacoes;
    private $comentarios;

    public function __construct(
        string $nome,
        string $cpf,
        string $email,
        string $senha,
        string $pais,
        string $telefone = null
    ) {
        parent::__construct(
            $nome,
            $cpf,
            $email,
            $senha,
            $pais,
            $telefone,
        );
    }

    /**
     * Get the value of cartao
     */ 
    public function getCartao()
    {
        return $this->cartao;
    }

    /**
     * Set the value of cartao
     *
     * @return  self
     */ 
    public function setCartao($cartao)
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
