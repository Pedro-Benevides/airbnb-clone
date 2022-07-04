<?php

namespace App\Repositories;

require_once dirname(dirname(dirname(__FILE__))) . '\database\config\connection.php';
require_once dirname(dirname(__FILE__)) . '\Models\Usuario.php';
require_once dirname(dirname(__FILE__)) . '\Entities\Anfitriao.php';
require_once 'PaisRepo.php';
require_once 'BaseRepository.php';
require_once 'LocacaoRepo.php';

use App\Entities\Anfitriao;
use App\Entities\Locatario;
use App\Models\Usuario;
use App\Repositories\BaseRepository;
use App\Repositories\PaisRepo;
use Connection;
use PDO;

class UsuarioRepo extends BaseRepository
{
    public function __construct()
    {
        parent::__construct('usuario');
    }

    public function create(array $userForm)
    {
        $userForm['senha'] = $this->encrypt($userForm['senha']);

        $db = Connection::Connect();
        $columns = array_keys($userForm);
        $values = array_values($userForm);

        $db->query(
            $this->insert($columns, $values)
        );

        return $db->lastInsertId();
    }

    public function auth(array $credentials): ?Usuario
    {
        $db = Connection::Connect();
        $result = $db->query(
            $this->search(
                ' email ',
                ' = ',
                $credentials['email'],
                '*',
                true
            ) . $this->where(
                ' senha ',
                ' = ',
                md5(
                    htmlspecialchars(
                        stripslashes(
                            trim(
                                $credentials['password']
                            )
                        )
                    )
                ),
                ' and '
            )
        )->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $user = $this->buildUsuario($result);

            return $user;
        } else {
            return null;
        }
    }

    /**
     * Consulta um usuario no banco pelo ID
     * 
     * @param int id
     * @param int option valor para configurar o retorno, default: 0 traz um usuario padrão, 1 retorna um Locatario, 2 retorna um Anfitriao
     * 
     */
    public function whereId(int $id, $option = 0, $includeDetails = false)
    {
        $usuario = null;

        $db = Connection::Connect();
        $result = $db->query(
            $this->search(
                ' id ',
                ' = ',
                $id
            )
        )->fetch(PDO::FETCH_ASSOC);

        switch ($option) {
            case 1:
                $usuario = $this->buildLocatario($result);
                break;
            case 2:
                $usuario = $this->buildAnfitriao($result);
                break;
            default:
                $usuario = $this->buildUsuario($result);
                break;
        }

        return $usuario;
    }

    public function getComplete(int $id): ?array
    {
        $locacaoRepo = new LocacaoRepo();

        $db = Connection::Connect();
        $result = $db->query(
            $this->search(
                ' id ',
                ' = ',
                $id
            )
        )->fetch(PDO::FETCH_ASSOC);

        $stateAnfitriao = $this->buildAnfitriao($result);
        $stateAnfitriao->setLocacoes(array_map(function ($acomodacao) use ($locacaoRepo) {

            return $locacaoRepo->whereAcomodacaoId($acomodacao->getId());
        }, $stateAnfitriao->getAcomodacoes()));

        $stateLocatario = $this->buildLocatario($result);
        $stateLocatario->setLocacoes($locacaoRepo->whereLocatarioId($stateLocatario->getId()));

        $anfitrioesLocacoes = array_map(function ($locacaoLocatario) {

            return $locacaoLocatario->getAcomodacao()->getProprietario();
        }, $stateLocatario->getLocacoes());

        return [
            'nome' => $stateLocatario->getNome(),
            'cpf' => $stateLocatario->getCpf(),
            'email' => $stateLocatario->getEmail(),
            'telefone' => $stateLocatario->getTelefone(),
            'cartao' => $stateLocatario->getCartao(),
            'acomodacoes' => $stateAnfitriao->getAcomodacoes(),
            'locacoesAnfitriao' => $stateAnfitriao->getLocacoes(),
            'locacoesLocatario' => $stateLocatario->getLocacoes(),
            'anfitrioesLocacoes' => $anfitrioesLocacoes
        ];
    }

    private function buildUsuario($queryResult): Usuario
    {
        $paisRepo = new PaisRepo();
        $userPais = $paisRepo->whereId($queryResult['pais_id']);

        $queryResult['pais'] = $userPais;

        $user = new Usuario(
            $queryResult['nome'],
            $queryResult['cpf'],
            $queryResult['email'],
            $queryResult['senha'],
            $queryResult['pais'],
            $queryResult['telefone'],
            $queryResult['anfitriao'],
            $queryResult['locatario'],
        );

        $user->setId($queryResult['id']);

        return $user;
    }

    private function buildLocatario($queryResult): Locatario
    {
        $paisRepo = new PaisRepo();
        $userPais = $paisRepo->whereId($queryResult['pais_id']);

        $queryResult['pais'] = $userPais;

        $user = new Usuario(
            $queryResult['nome'],
            $queryResult['cpf'],
            $queryResult['email'],
            $queryResult['senha'],
            $queryResult['pais'],
            $queryResult['telefone'],
            $queryResult['anfitriao'],
            $queryResult['locatario'],
        );

        $cartaoRepo = new CartaoRepo();
        $cartao = $cartaoRepo->whereUsuarioId($queryResult['id']);

        $locatario = new Locatario($user, $cartao);
        $locatario->setId($queryResult['id']);

        return $locatario;
    }

    private function buildAnfitriao($queryResult): Anfitriao
    {
        $paisRepo = new PaisRepo();
        $userPais = $paisRepo->whereId($queryResult['pais_id']);

        $queryResult['pais'] = $userPais;

        $user = new Usuario(
            $queryResult['nome'],
            $queryResult['cpf'],
            $queryResult['email'],
            $queryResult['senha'],
            $queryResult['pais'],
            $queryResult['telefone'],
            $queryResult['anfitriao'],
            $queryResult['locatario'],
        );

        $acomodacaoRepo = new AcomodacaoRepo();
        $acomodacoes = $acomodacaoRepo->whereUsuarioId($queryResult['id']);

        $anfitriao = new Anfitriao($user, $acomodacoes);
        $anfitriao->setId($queryResult['id']);

        return $anfitriao;
    }

    private function encrypt($password)
    {
        return md5(
            htmlspecialchars(
                stripslashes(
                    trim(
                        $password
                    )
                )
            )
        );
    }
}
