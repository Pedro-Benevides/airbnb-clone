<?php

namespace App\Repositories;

require_once dirname(dirname(dirname(__FILE__))) . '\database\config\connection.php';
require_once dirname(dirname(__FILE__)) . '\Models\Acomodacao.php';
require_once 'BaseRepository.php';
require_once 'UsuarioRepo.php';
require_once 'CidadeRepo.php';
require_once 'TipoAcomodacaoRepo.php';

use App\Models\Acomodacao;
use App\Repositories\BaseRepository;
use Connection;
use PDO;

class AcomodacaoRepo extends BaseRepository
{
    private $usuarioRepo;
    private $cidadeRepo;
    private $tipoAcomodacaoRepo;

    public function __construct()
    {
        $this->cidadeRepo = new CidadeRepo();
        $this->usuarioRepo = new UsuarioRepo();
        $this->tipoAcomodacaoRepo = new TipoAcomodacaoRepo();
        parent::__construct('acomodacao');
    }

    public function create(array $acomodacaoForm)
    {
        $acomodacaoForm['usuario_id'] = $_SESSION['AUTH'];

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

    public function all()
    {
        $db = Connection::Connect();
        $results = $db->query($this->getAll());

        $acomodacaoArray = array();
        $i = 0;

        while ($linha = $results->fetch(PDO::FETCH_ASSOC)) {
            $acomodacaoArray[$i] = $this->buildAcomodacao($linha);
            $i++;
        }

        return $acomodacaoArray;
    }

    public function whereId(int $id): ?Acomodacao
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

        return $acomodacaoArray;
    }

    private function buildAcomodacao($queryResult)
    {
        $proprietario = $this->usuarioRepo->whereId($queryResult['usuario_id']);
        $cidade = $this->cidadeRepo->whereId($queryResult['cidade_id']);
        $tipo = $this->tipoAcomodacaoRepo->whereId($queryResult['tipo_acomodacao_id']);

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
        $imagemAdicional = $_FILES['imagem_adicional'];
        $imagemFrontal = $_FILES['imagem_frontal'];

        if (
            !empty($imagemInterior)
            ||
            !empty($imagemAdicional)
            ||
            !empty($imagemFrontal)
        ) {
            $interiorNomeFinal = 'Interior' . $lastId . '.jpg';
            $adicionalNomeFinal = 'Adicional' . $lastId . '.jpg';
            $frontalNomeFinal = 'FrontalF' . $lastId . '.jpg';

            if (
                move_uploaded_file($imagemInterior['tmp_name'], dirname(dirname(__FILE__)) . '\Views\assets\\' . $interiorNomeFinal)
                ||
                move_uploaded_file($imagemFrontal['tmp_name'], dirname(dirname(__FILE__)) . '\Views\assets\\' . $frontalNomeFinal)
                ||
                move_uploaded_file($imagemAdicional['tmp_name'], dirname(dirname(__FILE__)) . '\Views\assets\\' . $adicionalNomeFinal)
            ) {
                $db->query(
                    $this->update(
                        [
                            'imagem_interior',
                            'imagem_adicional',
                            'imagem_frontal'
                        ],
                        [
                            $interiorNomeFinal,
                            $imagemAdicional,
                            $imagemFrontal
                        ],
                        'id',
                        $lastId
                    )
                );
            }
        }
    }
}
