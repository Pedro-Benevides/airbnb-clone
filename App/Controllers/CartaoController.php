<?php
require_once dirname(dirname(__FILE__)) . '\Repositories\CartaoRepo.php';

use App\Repositories\CartaoRepo;

class CartaoController
{
    public function __construct()
    {
    }

    public function form()
    {
        $expirationMonths = array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12");
        $expirationYears = array("2023", "2023", "2024", "2025", "2026", "2027", "2028", "2029", "2030");

        require dirname(dirname(__FILE__)) . '\Views\pages\cardRegister.php';
    }

    public function create()
    {
        $cartaoRepo = new CartaoRepo();

        $result = $cartaoRepo->create($_POST);

        if (is_array($result)) {
            list($dataInicio, $dataFim, $accommodation) = $result;

            if ($dataInicio && $dataFim) {
                header('Location:purchaseDetails?dataInicio=' . $dataInicio . '&dataFim=' . $dataFim, '&accommodation=' . $accommodation, true, 302);
            } else {
                header('Location:accommodationList', true, 302);
            }
        } else {
            header('Location:cardForm', true, 302);
        }
    }
}
