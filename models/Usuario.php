<?php
class Usuario
{
    //Table Atributes
    private $nome;
    private $cpf;
    private $email;
    private $telefone;
    private $cartaoId;
    private $pais;
    private $anfitriao;
    private $locatario;
    private $senha;

    //Querys
    const WHERE  = 'FROM usuario WHERE'; // adicionar forma de indicar colunas especificas pro select
    const INSERT = 'INSERT INTO usuario';
    const DELETE = 'DELETE FROM usuario WHERE';
    const UPDATE = 'UPDATE usuario';

    function __construct(string $nome, string $cpf, string $email, string $pais, string $senha, $telefone = null, string $cartaoId = null, string $anfitriao = null, string $locatario = null)
    {
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

    public function insertQuery(array $columns, array $values)
    {
        $columnsFormat = implode(', ', $columns);
        $valuesFormat = implode(', ', $values);

        return Usuario::INSERT . `($columnsFormat)` . 'VALUES' . `($valuesFormat)`;
    }

    public function whereQuery(string $column, string $operator, string $value, $selectColumns = 'SELECT *')
    {
        return $selectColumns . Usuario::WHERE . $column . $operator . $value;
    }

    public function updateQuery(string $setColumn, string $whereColumn, string $setValue, string $whereValue)
    {

        return Usuario::UPDATE . 'SET' . $setColumn . '=' . $setValue . 'FROM usuario WHERE' . $whereColumn . '=' . $whereValue;
    }

    public function deleteQuery(string $column, string $operator, string $value)
    {
        return Usuario::DELETE . $column . $operator . $value;
    }
}
