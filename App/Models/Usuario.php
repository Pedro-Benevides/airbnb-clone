<?php

namespace App\Models;

/**
 * Class Usuario
 *
 * @property string $nome
 * @property string $cpf
 * @property string $email
 * @property string $senha
 * @property string $país
 * @property string $telefone
 * @property float $anfitriao
 * @property float $locatario
 * @property int $cartaoId
 *
 * @package App\Models
 */
class Usuario
{
    private $nome;
    private $cpf;
    private $email;
    private $telefone;
    private $cartaoId;
    private $pais;
    private $anfitriao;
    private $locatario;
    private $senha;

    function __construct(
        string $nome,
        string $cpf,
        string $email,
        string $senha,
        string $pais,
        string $telefone = null,
        string $anfitriao = null, //TODO: criar classes, são um tipo de usuario
        string $locatario = null, //TODO: criar classes, são um tipo de usuario
        string $cartaoId = null
    ) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->senha = password_hash($senha, PASSWORD_BCRYPT);
        $this->telefone = $telefone;
        $this->cartaoId = $cartaoId;
        $this->pais = $pais;
        $this->locatario = $locatario;
        $this->anfitriao = $anfitriao;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function getCartao()
    {
        return $this->cartaoId; //TODO: colocar query sql para buscar o cartao
    }

    public function getAnfitriao()
    {
        return $this->anfitriao;
    }

    public function getLocatario()
    {
        return $this->locatario;
    }

    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Set the value of cpf
     *
     * @return  self
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Set the value of senha
     *
     * @return  self
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Set the value of pais
     *
     * @return  self
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Set the value of telefone
     *
     * @return  self
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Set the value of cartaoId
     *
     * @return  self
     */
    public function setCartaoId($cartaoId)
    {
        $this->cartaoId = $cartaoId;

        return $this;
    }
}
