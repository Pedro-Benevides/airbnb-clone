<?php

namespace App\Models;

/**
 * Class Locacao
 *
 * @property int $usuarioAnfitriaoId
 * @property int $usuarioLocatarioId
 * @property int $acomodacaoId
 * @property float $diaria
 * @property float $multa
 * @property string $dataInicio
 * @property string $dataFim
 * @property bool $checkin
 * @property bool $cancelamento
 *
 * @package App\Models
 */
class Locacao
{
    private $usuarioAnfitriaoId;
    private $usuarioLocatarioId;
    private $acomodacaoId;
    private $diaria;
    private $multa;
    private $dataInicio;
    private $dataFim;
    private $checkin;
    private $cancelamento;

    function __construct(
        int $usuarioAnfitriaoId,
        int $usuarioLocatarioId,
        int $acomodacaoId,
        float $diaria,
        string $dataInicio,
        string $dataFim,
        float $multa = null,
        bool $checkin = false,
        bool $cancelamento = false
    ) {
        $this->usuarioAnfitriaoId = $usuarioAnfitriaoId;
        $this->usuarioLocatarioId = $usuarioLocatarioId;
        $this->acomodacaoId = $acomodacaoId;
        $this->diaria = $diaria;
        $this->multa = $multa;
        $this->dataInicio = $dataInicio;
        $this->dataFim = $dataFim;
        $this->checkin = $checkin;
        $this->cancelamento = $cancelamento;
    }

    public function getAcomodacao()
    {
        return $this->acomodacaoId;
    }

    public function getLocatario()
    {
        return $this->usuarioLocatarioId;
    }

    public function getAnfitriao()
    {
        return $this->usuarioAnfitriaoId;
    }

    public function getDataFim()
    {
        return $this->dataFim;
    }

    public function getDataInicio()
    {
        return $this->dataInicio;
    }

    public function getMulta()
    {
        return $this->multa;
    }

    public function getDiaria()
    {
        return $this->diaria;
    }

    public function getCheckin()
    {
        return $this->checkin;
    }

    public function getCancelamento()
    {
        return $this->cancelamento;
    }

    /**
     * Set the value of usuarioAnfitriaoId
     *
     * @return  self
     */
    public function setUsuarioAnfitriaoId($usuarioAnfitriaoId)
    {
        $this->usuarioAnfitriaoId = $usuarioAnfitriaoId;

        return $this;
    }

    /**
     * Set the value of usuarioLocatarioId
     *
     * @return  self
     */
    public function setUsuarioLocatarioId($usuarioLocatarioId)
    {
        $this->usuarioLocatarioId = $usuarioLocatarioId;

        return $this;
    }

    /**
     * Set the value of acomodacaoId
     *
     * @return  self
     */
    public function setAcomodacaoId($acomodacaoId)
    {
        $this->acomodacaoId = $acomodacaoId;

        return $this;
    }

    /**
     * Set the value of diaria
     *
     * @return  self
     */
    public function setDiaria($diaria)
    {
        $this->diaria = $diaria;

        return $this;
    }

    /**
     * Set the value of dataInicio
     *
     * @return  self
     */
    public function setDataInicio($dataInicio)
    {
        $this->dataInicio = $dataInicio;

        return $this;
    }

    /**
     * Set the value of dataFim
     *
     * @return  self
     */
    public function setDataFim($dataFim)
    {
        $this->dataFim = $dataFim;

        return $this;
    }

    /**
     * Set the value of multa
     *
     * @return  self
     */
    public function setMulta($multa)
    {
        $this->multa = $multa;

        return $this;
    }

    /**
     * Set the value of checkin
     *
     * @return  self
     */
    public function setCheckin($checkin)
    {
        $this->checkin = $checkin;

        return $this;
    }

    /**
     * Set the value of cancelamento
     *
     * @return  self
     */
    public function setCancelamento($cancelamento)
    {
        $this->cancelamento = $cancelamento;

        return $this;
    }
}
