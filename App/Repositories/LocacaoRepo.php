<?php

namespace App\Repositories;

require_once dirname(dirname(dirname(__FILE__))) . '\database\config\connection.php';
require_once dirname(dirname(__FILE__)) . '\Models\Locacao.php';
require_once dirname(dirname(__FILE__)) . '\Entities\Locatario.php';

require_once 'BaseRepository.php';
require_once 'UsuarioRepo.php';
require_once 'AcomodacaoRepo.php';
require_once 'CartaoRepo.php';

use App\Entities\Locatario;
use App\Models\Locacao;
use App\Repositories\BaseRepository;
use Connection;
use DateTime;
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

    public function whereAcomodacaoId(int $id): ?array
    {
        $db = Connection::Connect();
        $hoje = new DateTime();
        $results = $db->query(
            $this->search(
                ' acomodacao_id ',
                ' = ',
                $id
            ) . $this->where(' data_inicio ', ' >= ', $hoje->format("Y-m-d"), ' and ')
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
        $usuarioRepo = new UsuarioRepo();
        $locatario = $usuarioRepo->whereId($queryResult['usuario_locatario_id'], 1);

        $locacao =  new Locacao(
            $locatario,
            null,
            $queryResult['valor'],
            $queryResult['data_inicio'],
            $queryResult['data_fim'],
            $queryResult['valor_multa'],
            $queryResult['checkin'],
            $queryResult['cancelamento']
        );

        $locacao->setId($queryResult['id']);

        return $locacao;
    }
}
