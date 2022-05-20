<?php

namespace App\Repositories;

require_once dirname(dirname(__FILE__)) . '\Models\Locacao.php';
require_once 'BaseRepository.php';

use App\Models\Locacao;
use App\Repositories\BaseRepository;
use mysqli;

class LocacaoRepo extends BaseRepository
{
    private $db;

    public function __construct(mysqli $db)
    {
        $this->db = $db;
        parent::__construct('locacao');
    }

    public function create(array $locacaoData)
    {
        $columns = array_keys($locacaoData);
        $values = array_values($locacaoData);

        return
            $this->db->query(
                $this->insert($columns, $values)
            );
    }

    public function get(int $id): ?Locacao
    {
        $result = $this->db->query(
            $this->search(
                ' id ',
                ' = ',
                $id
            )
        )->fetch_all(MYSQLI_ASSOC);

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
