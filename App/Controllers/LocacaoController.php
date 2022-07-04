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
        $dataInicio = $_GET['dataInicio'];
        $dataFim = $_GET['dataFim'];

        require dirname(dirname(__FILE__)) . '\Views\pages\purchaseDetails.php';
    }

    public function create()
    {
        $locacaoRepo = new LocacaoRepo();

        $result = $locacaoRepo->create($_POST);

        if ($result) {
            header('Location:userPage', true, 302);
        } else {
            return dirname(dirname(__FILE__)) . '\Views\pages\error500.php';
        }
    }

    public function checkin()
    {
        $locacaoRepo = new LocacaoRepo();

        $locacaoRepo->checkin($_POST);

        header('Location:userPage', true, 302);
    }

    public function cancel()
    {
        $locacaoRepo = new LocacaoRepo();

        $locacaoRepo->cancel($_POST);

        header('Location:userPage', true, 302);
    }
}
