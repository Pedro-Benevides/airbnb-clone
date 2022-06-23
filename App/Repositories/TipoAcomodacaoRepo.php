<?php

namespace App\Repositories;

require_once dirname(dirname(dirname(__FILE__))) . '\database\config\connection.php';
require_once dirname(dirname(__FILE__)) . '\Models\TipoAcomodacao.php';
require_once 'BaseRepository.php';

use App\Models\TipoAcomodacao;
use App\Repositories\BaseRepository;
use Connection;
use PDO;

class TipoAcomodacaoRepo extends BaseRepository
{

    public function __construct()
    {
        parent::__construct('pais');
    }

    public function whereId(int $id): ?TipoAcomodacao
    {
        $db = Connection::Connect();
        $result = $db->query(
            $this->search(
                ' id ',
                ' = ',
                $id
            )
        )->fetch(PDO::FETCH_ASSOC);

        return $this->buildTipoAcomodacao($result);
    }

    private function buildTipoAcomodacao($queryResult)
    {
        return new TipoAcomodacao(
            $queryResult['nome']
        );
    }
}
