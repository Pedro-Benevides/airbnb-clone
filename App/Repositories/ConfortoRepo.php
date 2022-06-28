<?php

namespace App\Repositories;

require_once dirname(dirname(dirname(__FILE__))) . '\database\config\connection.php';
require_once dirname(dirname(__FILE__)) . '\Models\Conforto.php';
require_once 'BaseRepository.php';

use App\Models\Conforto;
use App\Repositories\BaseRepository;
use Connection;
use PDO;

class ConfortoRepo extends BaseRepository
{

    public function __construct()
    {
        parent::__construct('conforto');
    }

    public function all()
    {
        $db = Connection::Connect();
        $results = $db->query($this->getAll());

        $confortoArray = array();
        $i = 0;

        while ($linha = $results->fetch(PDO::FETCH_ASSOC)) {
            $confortoArray[$i] = $this->buildConforto($linha);
            $i++;
        }

        return $confortoArray;
    }

    public function whereId(int $id): ?Conforto
    {
        $db = Connection::Connect();
        $result = $db->query(
            $this->search(
                ' id ',
                ' = ',
                $id
            )
        )->fetch(PDO::FETCH_ASSOC);

        return $this->buildConforto($result);
    }

    private function buildConforto($queryResult)
    {
        $conforto = new Conforto(
            $queryResult['descricao']
        );

        $conforto->setId($queryResult['id']);

        return $conforto;
    }
}
