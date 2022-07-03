<?php
require_once dirname(dirname(__FILE__)) . '\Repositories\LocacaoRepo.php';
require_once dirname(dirname(__FILE__)) . '\Repositories\AcomodacaoRepo.php';

use App\Repositories\AcomodacaoRepo;
use App\Repositories\LocacaoRepo;

class LocacaoController
{
    public function __construct()
    {
    }

    public function confirm()
    {
        $acomodacaoRepo = new AcomodacaoRepo();

        $acomodacao = $acomodacaoRepo->whereId($_GET['accommodation'], true);
        $dataInicio = date("d/m/y", strtotime($_GET['dataInicio']));
        $dataFim = date("d/m/y", strtotime($_GET['dataFim']));

        require dirname(dirname(__FILE__)) . '\Views\pages\purchaseDetails.php';
    }

    public function create()
    {
        $locacaoRepo = new LocacaoRepo();

        $result = $locacaoRepo->create($_POST);
    }
}
