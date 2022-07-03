<?php

namespace App\Repositories;

require_once dirname(dirname(dirname(__FILE__))) . '\database\config\connection.php';
require_once dirname(dirname(__FILE__)) . '\Models\Cartao.php';
require_once 'BaseRepository.php';
require_once 'UsuarioRepo.php';

use App\Models\Cartao;
use App\Repositories\BaseRepository;
use App\Repositories\UsuarioRepo;
use Connection;
use PDO;

class CartaoRepo extends BaseRepository
{
    public function __construct()
    {
        parent::__construct('cartao');
    }

    public function whereUsuarioId(int $id): ?Cartao
    {
        $db = Connection::Connect();

        $result = $db->query(
            $this->search(
                ' usuario_id ',
                ' = ',
                $id
            )
        )->fetch(PDO::FETCH_ASSOC);

        $cartao = $this->buildCartao($result);

        return $cartao;
    }

    private function buildCartao($queryResult)
    {
        $cartao = null;

        if ($queryResult) {
            $usuarioRepo = new UsuarioRepo();
            $usuario = $usuarioRepo->whereId($queryResult['usuario_id']);

            $cartao = new Cartao(
                $usuario,
                $queryResult['numero'],
                $queryResult['vencimento'],
                $queryResult['cvv']
            );
        }

        return $cartao;
    }
}
