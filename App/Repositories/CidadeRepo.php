<?php

namespace App\Repositories;

require_once dirname(dirname(__FILE__)) . '\Models\Cidade.php';
require_once dirname(dirname(dirname(__FILE__))) . '\database\config\connection.php';
require_once 'BaseRepository.php';
require_once 'EstadoRepo.php';

use App\Models\Cidade;
use App\Repositories\BaseRepository;
use App\Repositories\EstadoRepo;
use Connection;
use PDO;

class CidadeRepo extends BaseRepository
{
    private $estadoRepo;

    public function __construct()
    {
        $this->estadoRepo = new EstadoRepo();
        parent::__construct('cidade');
    }

    public function all()
    {
        $db = Connection::Connect();
        $results = $db->query($this->getAll());

        $cidadeArray = array();
        $i = 0;

        while ($linha = $results->fetch(PDO::FETCH_ASSOC)) {
            $cidadeArray[$i] = $this->buildCidade($linha);
            $i++;
        }

        return $cidadeArray;
    }

    public function whereId(int $id): ?Cidade
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
        $estado = $this->estadoRepo->whereId($queryResult['estado_id']);
        $queryResult['estado'] = $estado;

        $cidade = new Cidade(
            $queryResult['nome'],
            $queryResult['estado'],
        );

        $cidade->setId($queryResult['id']);

        return $cidade;
    }
}
