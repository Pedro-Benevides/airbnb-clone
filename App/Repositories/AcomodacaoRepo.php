<?php

namespace App\Repositories;

require_once dirname(dirname(__FILE__)) . '\Models\Acomodacao.php';
require_once 'BaseRepository.php';

use App\Models\Acomodacao;
use App\Repositories\BaseRepository;
use mysqli;

class AcomodacaoRepo extends BaseRepository
{
    private $db;

    public function __construct(mysqli $db)
    {
        $this->db = $db;
        parent::__construct('acomodacao');
    }

    public function create(array $acomodacaoForm)
    {
        $columns = array_keys($acomodacaoForm);
        $values = array_values($acomodacaoForm);

        return
            $this->db->query(
                $this->insert($columns, $values)
            );
    }

    public function get(int $id): ?Acomodacao
    {
        $result = $this->db->query(
            $this->search(
                ' id ',
                ' = ',
                $id
            )
        )->fetch_all(MYSQLI_ASSOC);

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
