<?php

namespace App\Models;

/**
 * Class Usuario
 *
 * @property string $nome
 * @property string $cpf
 * @property string $email
 * @property string $senha
 * @property Pais $país
 * @property string $telefone
 *
 * @package App\Models
 */
class Usuario
{
    private $nome;
    private $cpf;
    private $email;
    private $telefone;
    private $pais;
    private $senha;

    function __construct(
        string $nome,
        string $cpf,
        string $email,
        string $senha,
        Pais $pais,
        string $telefone = null
    ) {
        $this->nome = ucwords($nome);
        $this->cpf = $cpf;
        $this->email = $email;
        $this->senha = password_hash($senha, PASSWORD_BCRYPT);
        $this->telefone = $telefone;
        $this->pais = $pais;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getTelefone(): string
    {
        return $this->telefone;
    }

    public function getPais(): Pais
    {
        return $this->pais;
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
     * Set the value of cpf
     *
     * @return  self
     */
    public function setCpf(string $cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Set the value of senha
     *
     * @return  self
     */
    public function setSenha(string $senha)
    {
        $this->senha = password_hash($senha, PASSWORD_BCRYPT);

        return $this;
    }

    /**
     * Set the value of pais
     *
     * @return  self
     */
    public function setPais(Pais $pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Set the value of telefone
     *
     * @return  self
     */
    public function setTelefone(string $telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }
}
