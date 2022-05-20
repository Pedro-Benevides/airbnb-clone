<?php

namespace App\Repositories;

require_once dirname(dirname(__FILE__)) . '\Models\Usuario.php';
require_once 'BaseRepository.php';

use App\Models\Usuario;
use App\Repositories\BaseRepository;
use mysqli;

class UsuarioRepo extends BaseRepository
{
    private $db;

    public function __construct(mysqli $db)
    {
        $this->db = $db;
        parent::__construct('usuario');
    }

    public function create(array $userForm)
    {
        $columns = array_keys($userForm);
        $values = array_values($userForm);

        return
            $this->db->query(
                $this->insert($columns, $values)
            );
    }

    public function auth(array $credentials): ?Usuario
    {
        $result = $this->db->query(
            $this->search(
                ' email ',
                ' = ',
                $credentials['email']
            ) . $this->where(
                ' senha ',
                ' = ',
                md5(
                    htmlspecialchars(
                        stripslashes(
                            trim(
                                $credentials['password']
                            )
                        )
                    )
                ),
                ' and '
            )
        )->fetch_all(MYSQLI_ASSOC);

        $userArray = $this->buildUsuario($result);

        return array_shift($userArray);
    }

    private function buildUsuario($queryResult)
    {
        return array_map(function ($row) {
            return new Usuario(
                $row['nome'],
                $row['cpf'],
                $row['email'],
                $row['senha'],
                $row['pais'],
                $row['telefone'],
                $row['anfitriao'],
                $row['locatario'],
                $row['cartao_id'], //TODO: puxar relacionamento com cartao
            );
        }, $queryResult);
    }
}
