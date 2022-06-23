<?php

namespace App\Repositories;

require_once dirname(dirname(__FILE__)) . '\Models\Estado.php';
require_once dirname(dirname(dirname(__FILE__))) . '\database\config\connection.php';
require_once 'BaseRepository.php';
require_once 'PaisRepo.php';

use App\Models\Estado;
use App\Repositories\BaseRepository;
use App\Repositories\PaisRepo;
use Connection;
use PDO;

class EstadoRepo extends BaseRepository
{

    private $paisRepo;

    public function __construct()
    {
        $this->paisRepo = new PaisRepo();
        parent::__construct('estado');
    }

    public function whereId(int $id): ?Estado
    {
        $db = Connection::Connect();
        $result = $db->query(
            $this->search(
                ' id ',
                ' = ',
                $id
            )
        )->fetch(PDO::FETCH_ASSOC);

        return $this->buildCidade($result);
    }

    private function buildCidade($queryResult)
    {
        $pais = $this->paisRepo->whereId($queryResult['pais_id']);
        $queryResult['pais'] = $pais;

        return new Estado(
            $queryResult['nome'],
            $queryResult['pais'],
        );
    }
}
