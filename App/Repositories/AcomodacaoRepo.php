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

        $imagemInterior = $_FILES['imagem_interior'];
        $imagemAdicional = $_FILES['imagem_adicional'];
        $imagemFrontal = $_FILES['imagem_frontal'];
        var_dump($imagemInterior);
        if (!empty($imagemInterior) || !empty($imagemAdicional) || !empty($imagemFrontal)) {
            // echo "entrou no if da imagem !=null";
            //defini o nome do novo arquivo, que será o id gerado para o livro
            $interiorNomeFinal = 'Interior' . $lastId . '.jpg';
            $adicionalNomeFinal = 'Adicional' . $lastId . '.jpg';
            $frontalNomeFinal = 'FrontalF' . $lastId . '.jpg';
            //move o arquivo para a pasta atual com esse novo nome
            if (
                move_uploaded_file($imagemInterior['tmp_name'], dirname(dirname(__FILE__)) . '\Views\assets\\' . $interiorNomeFinal) ||
                move_uploaded_file($imagemFrontal['tmp_name'], dirname(dirname(__FILE__)) . '\Views\assets\\' . $frontalNomeFinal) ||
                move_uploaded_file($imagemAdicional['tmp_name'], dirname(dirname(__FILE__)) . '\Views\assets\\' . $adicionalNomeFinal)
            ) {
                // echo "Copiou a imagem";
                //atualiza o banco de dados para guardar o nome do arquivo gerado.
                $db->query(
                    $this->update(
                        ['imagem_interior', 'imagem_adicional', 'imagem_frontal'],
                        [$imagemInterior, $imagemAdicional, $imagemFrontal],
                        'id',
                        $lastId
                    )
                );
                // echo "atulizou o nome da imagem no bd";
            }
        }

        return $lastId;
    }

    public function all()
    {
        $db = Connection::Connect();
        $result = array($db->query($this->getAll())->fetch(PDO::FETCH_ASSOC));

        $acomodacaoArray = array_map(function ($dbAcomodacao) {
            if (is_array($dbAcomodacao)) {
                return $this->buildAcomodacao($dbAcomodacao);
            } else {
                return array();
            }
        }, $result);

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
}
