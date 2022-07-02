<?php

namespace App\Repositories;

require_once dirname(dirname(dirname(__FILE__))) . '\database\config\connection.php';
require_once dirname(dirname(__FILE__)) . '\Models\ComentarioAcomodacao.php';
require_once 'BaseRepository.php';

use App\Models\ComentarioAcomodacao;
use App\Repositories\BaseRepository;
use Connection;
use PDO;

class ComentarioRepo extends BaseRepository
{
    public function __construct()
    {
        parent::__construct('comentario_acomodacao');
    }

    public function all()
    {
        $db = Connection::Connect();
        $results = $db->query($this->getAll());

        $comentarioArray = array();
        $i = 0;

        while ($linha = $results->fetch(PDO::FETCH_ASSOC)) {
            $comentarioArray[$i] = $this->buildComentario($linha);
            $i++;
        }

        return $comentarioArray;
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

        $comentarioArray = array();
        $i = 0;

        while ($linha = $results->fetch(PDO::FETCH_ASSOC)) {
            $comentarioArray[$i] = $this->buildComentario($linha);
            $i++;
        }

        return $comentarioArray;
    }

    public function whereUsuarioId(int $id): ?array
    {
        $db = Connection::Connect();
        $results = $db->query(
            $this->search(
                ' usuario_id ',
                ' = ',
                $id
            )
        );

        $comentarioArray = array();
        $i = 0;

        while ($linha = $results->fetch(PDO::FETCH_ASSOC)) {
            $comentarioArray[$i] = $this->buildComentario($linha);
            $i++;
        }

        return $comentarioArray;
    }

    private function buildComentario($queryResult)
    {
        $conforto = new ComentarioAcomodacao(
            $queryResult['comentario']
        );

        return $conforto;
    }
}
