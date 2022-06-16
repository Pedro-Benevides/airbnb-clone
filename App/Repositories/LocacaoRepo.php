<?php

namespace App\Repositories;

require_once dirname(dirname(dirname(__FILE__))) . '\database\config\connection.php';
require_once dirname(dirname(__FILE__)) . '\Models\Locacao.php';
require_once 'BaseRepository.php';

use App\Models\Locacao;
use App\Repositories\BaseRepository;
use Connection;
use PDO;

class LocacaoRepo extends BaseRepository
{
    public function __construct()
    {
        parent::__construct('locacao');
    }

    public function create(array $locacaoData)
    {
        $db = Connection::Connect();
        $columns = array_keys($locacaoData);
        $values = array_values($locacaoData);

        return
            $db->query(
                $this->insert($columns, $values)
            );
    }

    public function get(int $id): ?Locacao
    {
        $db = Connection::Connect();
        $result = $db->query(
            $this->search(
                ' id ',
                ' = ',
                $id
            )
        )->fetch(PDO::FETCH_ASSOC);

        $acomodacaoArray = $this->buildLocacao($result);

        return array_shift($acomodacaoArray);
    }

    private function buildLocacao($queryResult)
    {
        return array_map(function ($row) {
            return new Locacao(
                $row['usuarioAnfitriaoId'],
                $row['usuarioLocatarioId'],
                $row['acomodacaoId'],
                $row['diaria'],
                $row['dataInicio'],
                $row['dataFim'],
                $row['multa'],
                $row['checkin'],
                $row['cancelamento']
            );
        }, $queryResult);
    }
}
