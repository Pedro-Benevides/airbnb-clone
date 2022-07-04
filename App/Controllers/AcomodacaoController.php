<?php
require_once dirname(dirname(__FILE__)) . '\Repositories\AcomodacaoRepo.php';
require_once dirname(dirname(__FILE__)) . '\Repositories\CidadeRepo.php';
require_once dirname(dirname(__FILE__)) . '\Repositories\TipoAcomodacaoRepo.php';
require_once dirname(dirname(__FILE__)) . '\Repositories\ConfortoRepo.php';
require_once dirname(dirname(__FILE__)) . '\Repositories\UsuarioRepo.php';

use App\Models\Acomodacao;
use App\Repositories\AcomodacaoRepo;
use App\Repositories\CidadeRepo;
use App\Repositories\ConfortoRepo;
use App\Repositories\TipoAcomodacaoRepo;
use App\Repositories\UsuarioRepo;

class AcomodacaoController
{

    private $cidades;
    private $tipos;
    private $confortos;

    public function __construct()
    {
        $cidadeRepo = new CidadeRepo();
        $this->cidades = $cidadeRepo->all();

        $tipoAcomodacaoRepo = new TipoAcomodacaoRepo();
        $this->tipos = $tipoAcomodacaoRepo->all();

        $confortoRepo = new ConfortoRepo();
        $this->confortos = $confortoRepo->all();
    }

    public function form()
    {
        $cidades = $this->cidades;
        $tipos = $this->tipos;
        require dirname(dirname(__FILE__)) . '\Views\pages\accommodationRegister.php';
    }

    public function list()
    {
        $acomodacaoRepo = new AcomodacaoRepo();

        $acomodacoes = $acomodacaoRepo->all($_POST);
        $cidades = $this->cidades;
        $tipos = $this->tipos;
        $confortos = $this->confortos;

        require dirname(dirname(__FILE__)) . '\Views\pages\accommodationList.php';
    }

    public function create()
    {
        $acomodacaoRepo = new AcomodacaoRepo();

        $newAcomodacaoId = $acomodacaoRepo->create($_POST);

        header('Location:accommodationPage?accommodation=' . $newAcomodacaoId, true, 302);
    }

    public function getAcomodacao()
    {
        $usuarioRepo = new UsuarioRepo();
        $acomodacaoRepo = new AcomodacaoRepo();

        $acomodacao = $acomodacaoRepo->whereId($_GET['accommodation'], true);
        $loggedUser = $usuarioRepo->whereId($_SESSION['AUTH'], 1);

        require dirname(dirname(__FILE__)) . '\Views\pages\accommodationDetails.php';
    }
}
