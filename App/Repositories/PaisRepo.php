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

    public function getAll(): ?array
    {
        $db = Connection::Connect();
        $results = $db->query($this->search());

        $paisArray = array();
        $i = 0;

        while ($linha = $results->fetch(PDO::FETCH_ASSOC)) {
            $paisArray[$i] = $this->buildPais($linha);
            $i++;
        }

        return $paisArray;
    }

    private function buildPais($queryResult)
    {
        $pais = new Pais(
            $queryResult['nome']
        );

        if (!empty($queryResult['id'])) {
            $pais->SetId($queryResult['id']);
        }

        return $pais;
    }
}
