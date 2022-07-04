<?php

namespace App\Repositories;

require_once dirname(dirname(dirname(__FILE__))) . '\database\config\connection.php';
require_once dirname(dirname(__FILE__)) . '\Models\Acomodacao.php';
require_once 'BaseRepository.php';
require_once 'UsuarioRepo.php';
require_once 'CidadeRepo.php';
require_once 'TipoAcomodacaoRepo.php';
require_once 'ConfortoRepo.php';
require_once 'ComentarioRepo.php';
require_once 'LocacaoRepo.php';

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
        $acomodacaoForm['usuario_id'] = $_SESSION['AUTH'];
        $acomodacaoForm['diaria'] = number_format($acomodacaoForm['diaria'], 2, '.', '');

        $db = Connection::Connect();
        $columns = array_keys($acomodacaoForm);
        $values = array_values($acomodacaoForm);

        $db->query(
            $this->insert($columns, $values)
        );

        $lastId  = $db->lastInsertId();

        $this->imageResolver($lastId);

        return $lastId;
    }

    public function all(array $filters = null)
    {
        $confortoRepo = new ConfortoRepo();
        $db = Connection::Connect();

        $results = $db->query($this->filterList($filters));

        $acomodacaoArray = array();
        $i = 0;

        while ($linha = $results->fetch(PDO::FETCH_ASSOC)) {
            $acomodacaoArray[$i] = $this->buildAcomodacao($linha);
            $i++;
        }

        array_map(function (Acomodacao $acomodacao) use ($confortoRepo) {
            $acomodacao->setConfortos($confortoRepo->filterByAcomodacao($acomodacao->getId()));
        }, $acomodacaoArray);

        return $acomodacaoArray;
    }

    public function whereId(int $id, $includeDetails = false): ?Acomodacao
    {
        $confortoRepo = new ConfortoRepo();
        $comentarioRepo = new ComentarioRepo();
        $locacaoRepo = new LocacaoRepo();

        $db = Connection::Connect();
        $result = $db->query(
            $this->search(
                ' id ',
                ' = ',
                $id
            )
        )->fetch(PDO::FETCH_ASSOC);

        $acomodacao = $this->buildAcomodacao($result);

        if ($includeDetails) {
            $acomodacao->setConfortos($confortoRepo->filterByAcomodacao($acomodacao->getId()));
            $acomodacao->setComentarios($comentarioRepo->whereAcomodacaoId($acomodacao->getId()));
            $acomodacao->setLocacoes($locacaoRepo->whereAcomodacaoId($acomodacao->getId()));
        }

        return $acomodacao;
    }

    public function whereUsuarioId(int $id): ?array
    {
        $confortoRepo = new ConfortoRepo();

        $db = Connection::Connect();

        $results = $db->query(
            $this->search(
                ' usuario_id ',
                ' = ',
                $id
            )
        );

        $acomodacaoArray = array();
        $i = 0;

        while ($linha = $results->fetch(PDO::FETCH_ASSOC)) {
            $acomodacaoArray[$i] = $this->buildAcomodacao($linha);
            $acomodacaoArray[$i]->setConfortos($confortoRepo->filterByAcomodacao($acomodacaoArray[$i]->getId()));
            $i++;
        }

        return $acomodacaoArray;
    }

    private function buildAcomodacao($queryResult)
    {
        $cidadeRepo = new CidadeRepo();
        $usuarioRepo = new UsuarioRepo();
        $tipoAcomodacaoRepo = new TipoAcomodacaoRepo();

        $proprietario = $usuarioRepo->whereId($queryResult['usuario_id']);
        $cidade = $cidadeRepo->whereId($queryResult['cidade_id']);
        $tipo = $tipoAcomodacaoRepo->whereId($queryResult['tipo_acomodacao_id']);

        $queryResult['cidade'] = $cidade;
        $queryResult['tipo'] = $tipo;
        $queryResult['proprietario'] = $proprietario;

        $acomodacao =  new Acomodacao(
            $queryResult['proprietario'],
            $queryResult['diaria'],
            $queryResult['capacidade'],
            $queryResult['cep'],
            $queryResult['rua'],
            $queryResult['numero'],
            $queryResult['cidade'],
            $queryResult['tipo'],
            $queryResult['complemento'],
            $queryResult['imagem_interior'],
            $queryResult['imagem_frontal'],
            $queryResult['imagem_adicional'],
            $queryResult['descricao']
        );

        $acomodacao->setId($queryResult['id']);

        return $acomodacao;
    }

    private function imageResolver(int $lastId)
    {
        $db = Connection::Connect();

        $imagemInterior = $_FILES['imagem_interior'];
        // $imagemAdicional = $_FILES['imagem_adicional'];
        // $imagemFrontal = $_FILES['imagem_frontal'];

        if (
            !empty($imagemInterior)
            ||
            !empty($imagemAdicional)
            ||
            !empty($imagemFrontal)
        ) {
            $interiorNomeFinal = 'Interior' . $lastId . '.jpg';
            // $adicionalNomeFinal = 'Adicional' . $lastId . '.jpg';
            // $frontalNomeFinal = 'FrontalF' . $lastId . '.jpg';

            if (
                move_uploaded_file($imagemInterior['tmp_name'], dirname(dirname(__FILE__)) . '\Views\assets\\' . $interiorNomeFinal)
                // ||
                // move_uploaded_file($imagemFrontal['tmp_name'], dirname(dirname(__FILE__)) . '\Views\assets\\' . $frontalNomeFinal)
                // ||
                // move_uploaded_file($imagemAdicional['tmp_name'], dirname(dirname(__FILE__)) . '\Views\assets\\' . $adicionalNomeFinal)
            ) {
                $db->query(
                    $this->update(
                        [
                            'imagem_interior',
                            // 'imagem_adicional',
                            // 'imagem_frontal'
                        ],
                        [
                            $interiorNomeFinal,
                            // $imagemAdicional,
                            // $imagemFrontal
                        ],
                        'id',
                        $lastId
                    )
                );
            }
        }
    }

    public function filterList(array $filters = null)
    {
        $baseQuery = $this->getAll();
        if (!empty($filters)) {

            $hasWhere = false;
            $and = null;

            $confortosIds = [];
            if ($filters['conforto1'] !== '0') {
                array_push($confortosIds, $filters['conforto1']);
            }
            if ($filters['conforto2'] !== '0') {
                array_push($confortosIds, $filters['conforto2']);
            }
            if ($filters['conforto3'] !== '0') {
                array_push($confortosIds, $filters['conforto3']);
            }

            if (!empty($confortosIds)) {
                $baseQuery .= $this->join(' conforto_has_acomodacao ',  ' conforto_has_acomodacao.acomodacao_id ',  ' acomodacao.id ')
                    . $this->whereIn(' conforto_id ', $confortosIds);
                $hasWhere = true;
            }

            if ($filters['cidade_id'] != '0') {
                if ($hasWhere) {
                    $and =  ' and ';
                }
                $baseQuery .= $this->where(' cidade_id ',  ' = ', $filters['cidade_id'], $and);
                $hasWhere = true;
            }

            if ($filters['tipo_acomodacao_id'] != '0') {
                if ($hasWhere) {
                    $and =  ' and ';
                }
                $baseQuery .= $this->where(' tipo_acomodacao_id ',  ' = ', $filters['tipo_acomodacao_id'], $and);
                $hasWhere = true;
            }

            if ($filters['diaria'] != '0') {
                switch ($filters['diaria']) {
                    case 1:
                        if ($hasWhere) {
                            $and =  ' and ';
                        }
                        $baseQuery .= $this->where(' diaria ',  ' >= ', 0, $and) . $this->where(' diaria ',  ' <= ', 50, $and);

                        break;

                    case 2:
                        if ($hasWhere) {
                            $and =  ' and ';
                        }
                        $baseQuery .= $this->where(' diaria ',  ' >= ', 50, $and) . $this->where(' diaria ',  ' <= ', 100, $and);

                        break;

                    case 3:
                        if ($hasWhere) {
                            $and =  ' and ';
                        }
                        $baseQuery .= $this->where(' diaria ',  ' >= ', 100, $and) . $this->where(' diaria ',  ' <= ', 300, $and);

                        break;

                    default:
                        break;
                }
            }
        }

        return $baseQuery . $this->groupBy('id', true);
    }
}
