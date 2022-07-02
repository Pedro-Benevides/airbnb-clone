<?php

namespace App\Repositories;

require_once dirname(dirname(dirname(__FILE__))) . '\database\config\connection.php';
require_once dirname(dirname(__FILE__)) . '\Models\Locacao.php';
require_once 'BaseRepository.php';
require_once 'UsuarioRepo.php';
require_once 'AcomodacaoRepo.php';

use App\Models\Locacao;
use App\Repositories\BaseRepository;
use Connection;
use PDO;

class LocacaoRepo extends BaseRepository
{
    private $usuarioRepo;
    private $acomodacaoRepo;

    public function __construct()
    {
        $this->usuarioRepo = new UsuarioRepo();
        $this->acomodacaoRepo = new AcomodacaoRepo();

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

    public function whereAcomodacaoId(int $id): ?array
    {
        $db = Connection::Connect();
        $results = $db->query(
            $this->search(
                ' acomodacao_id ',
                ' = ',
                $id
            )
        );

        $locacaoArray = array();
        $i = 0;

        while ($linha = $results->fetch(PDO::FETCH_ASSOC)) {
            $locacaoArray[$i] = $this->buildLocacao($linha);
            $i++;
        }

        return $locacaoArray;
    }

    public function whereLocatarioId(int $id): ?array
    {
        $db = Connection::Connect();
        $results = $db->query(
            $this->search(
                ' usuario_locatario_id ',
                ' = ',
                $id
            )
        );

        $locacaoArray = array();
        $i = 0;

        while ($linha = $results->fetch(PDO::FETCH_ASSOC)) {
            $locacaoArray[$i] = $this->buildLocacao($linha);
            $i++;
        }

        return $locacaoArray;
    }

    private function buildLocacao($queryResult)
    {
        $locatario = $this->usuarioRepo->whereId($queryResult['usuario_locatario_id']);

        $locacao =  new Locacao(
            $locatario,
            null,
            $queryResult['diaria'],
            $queryResult['data_inicio'],
            $queryResult['data_fim'],
            $queryResult['multa'],
            $queryResult['checkin'],
            $queryResult['cancelamento']
        );

        $locacao->setId($queryResult['id']);

        return $locacao;
    }
}
