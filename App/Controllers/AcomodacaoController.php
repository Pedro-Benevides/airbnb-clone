<?php
require_once dirname(dirname(__FILE__)) . '\Repositories\AcomodacaoRepo.php';

use App\Models\Acomodacao;
use App\Repositories\AcomodacaoRepo;

class AcomodacaoController
{

    private $acomodacaoRepo;

    public function __construct()
    {
        $this->acomodacaoRepo = new AcomodacaoRepo();
    }

    public function form()
    {
        require dirname(dirname(__FILE__)) . '\Views\pages\accommodationRegister.php';
    }

    public function create(array $acomodacaoForm)
    {
        $newAcomodacaoId = $this->acomodacaoRepo->create($acomodacaoForm);

        header('Location:accommodationPage\?accommodation=' . `{$newAcomodacaoId}`, true, 302);
    }

    public function getAcomodacao()
    {
        $acomodacao = $this->acomodacaoRepo->whereId($_GET['accommodation']);

        require dirname(dirname(__FILE__)) . '\Views\pages\accommodationDetails.php';
    }
}
