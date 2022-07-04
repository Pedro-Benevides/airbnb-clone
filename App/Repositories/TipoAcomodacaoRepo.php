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
        parent::__construct('tipo_acomodacao');
    }

    public function all()
    {
        $db = Connection::Connect();
        $results = $db->query($this->getAll());

        $tipoAcomodacaoArray = array();
        $i = 0;

        while ($linha = $results->fetch(PDO::FETCH_ASSOC)) {
            $tipoAcomodacaoArray[$i] = $this->buildTipoAcomodacao($linha);
            $i++;
        }

        return $tipoAcomodacaoArray;
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
        $tipo = new TipoAcomodacao(
            $queryResult['descricao']
        );

        $tipo->setId($queryResult['id']);

        return $tipo;
    }
}
