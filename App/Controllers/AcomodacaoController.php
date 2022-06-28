<?php
require_once dirname(dirname(__FILE__)) . '\Repositories\AcomodacaoRepo.php';
require_once dirname(dirname(__FILE__)) . '\Repositories\CidadeRepo.php';
require_once dirname(dirname(__FILE__)) . '\Repositories\TipoAcomodacaoRepo.php';
require_once dirname(dirname(__FILE__)) . '\Repositories\ConfortoRepo.php';

use App\Models\Acomodacao;
use App\Repositories\AcomodacaoRepo;
use App\Repositories\CidadeRepo;
use App\Repositories\ConfortoRepo;
use App\Repositories\TipoAcomodacaoRepo;

class AcomodacaoController
{

    private $acomodacaoRepo;
    private $cidadeRepo;
    private $tipoAcomodacaoRepo;
    private $confortoRepo;

    public function __construct()
    {
        $this->acomodacaoRepo = new AcomodacaoRepo();
        $this->cidadeRepo = new CidadeRepo();
        $this->tipoAcomodacaoRepo = new TipoAcomodacaoRepo();
        $this->confortoRepo = new ConfortoRepo();
    }

    public function form()
    {
        $cidades = $this->cidadeRepo->all();
        $tipos = $this->tipoAcomodacaoRepo->all();
        require dirname(dirname(__FILE__)) . '\Views\pages\accommodationRegister.php';
    }

    public function list()
    {
        $acomodacoes = $this->acomodacaoRepo->all();
        $cidades = $this->cidadeRepo->all();
        $tipos = $this->tipoAcomodacaoRepo->all();
        $confortos = $this->confortoRepo->all();

        require dirname(dirname(__FILE__)) . '\Views\pages\accommodationList.php';
    }

    public function create()
    {
        $newAcomodacaoId = $this->acomodacaoRepo->create($_POST);

        header('Location:accommodationPage?accommodation=' . $newAcomodacaoId, true, 302);
    }

    public function getAcomodacao()
    {
        $acomodacao = $this->acomodacaoRepo->whereId($_GET['accommodation']);

        require dirname(dirname(__FILE__)) . '\Views\pages\accommodationDetails.php';
    }
}
