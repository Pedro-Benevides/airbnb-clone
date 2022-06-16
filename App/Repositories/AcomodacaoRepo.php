<?php

namespace App\Repositories;

require_once dirname(dirname(dirname(__FILE__))) . '\database\config\connection.php';
require_once dirname(dirname(__FILE__)) . '\Models\Acomodacao.php';
require_once 'BaseRepository.php';

use App\Models\Acomodacao;
use App\Repositories\BaseRepository;
use Connection;
use PDO;

class AcomodacaoRepo extends BaseRepository
{
    public function __construct()
    {
        parent::__construct('acomodacao');
    }

    public function create(array $acomodacaoForm)
    {
        $db = Connection::Connect();
        $columns = array_keys($acomodacaoForm);
        $values = array_values($acomodacaoForm);

        return
            $db->query(
                $this->insert($columns, $values)
            );
    }

    public function get(int $id): ?Acomodacao
    {
        $db = Connection::Connect();
        $result = $db->query(
            $this->search(
                ' id ',
                ' = ',
                $id
            )
        )->fetch(PDO::FETCH_ASSOC);

        $acomodacaoArray = $this->buildAcomodacao($result);

        return array_shift($acomodacaoArray);
    }

    private function buildAcomodacao($queryResult)
    {
        return array_map(function ($row) {
            return new Acomodacao(
                $row['cep'],
                $row['rua'],
                $row['numero'],
                $row['cidade'],
                $row['estado'],
                $row['pais'],
                $row['diaria'],
                $row['capacidade'],
                $row['complemento'],
                $row['descricao'],
                $row['imagemInterior'],
                $row['imagemFrontal'],
                $row['imagemAdicional']
            );
        }, $queryResult);
    }
}
