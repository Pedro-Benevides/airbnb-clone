<?php

namespace App\Repositories;

require_once dirname(dirname(__FILE__)) . '\Models\Pais.php';
require_once dirname(dirname(dirname(__FILE__))) . '\database\config\connection.php';
require_once 'BaseRepository.php';

use App\Models\Pais;
use App\Repositories\BaseRepository;
use Connection;
use PDO;

class PaisRepo extends BaseRepository
{

    public function __construct()
    {
        parent::__construct('pais');
    }

    public function whereId(int $id): ?Pais
    {
        $db = Connection::Connect();
        $result = $db->query(
            $this->search(
                ' id ',
                ' = ',
                $id
            )
        )->fetch(PDO::FETCH_ASSOC);

        return $this->buildPais($result);
    }

    private function buildPais($queryResult)
    {
        return new Pais(
            $queryResult['nome']
        );
    }
}
