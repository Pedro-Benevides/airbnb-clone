<?php

namespace App\Models;

use App\Entities\Anfitriao;
use App\Entities\Locatario;

/**
 * Class Locacao
 *
 * @property Locatario $locatario
 * @property Acomodacao $acomodacao
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
    private $anfitriao;
    private $locatario;
    private $acomodacao;
    private $diaria;
    private $multa;
    private $dataInicio;
    private $dataFim;
    private $checkin;
    private $cancelamento;
    private $id;

    function __construct(
        Locatario $locatario,
        Acomodacao $acomodacao = null,
        float $diaria,
        string $dataInicio,
        string $dataFim,
        float $multa = null,
        bool $checkin = false,
        bool $cancelamento = false
    ) {
        $this->locatario = $locatario;
        $this->acomodacao = $acomodacao;
        $this->diaria = floatval(number_format($diaria, 2, '.', ''));
        $this->multa = floatval(number_format($multa, 2, '.', ''));
        $this->dataInicio = $dataInicio;
        $this->dataFim = $dataFim;
        $this->checkin = $checkin;
        $this->cancelamento = $cancelamento;
    }

    public function getAcomodacao(): ?Acomodacao
    {
        return $this->acomodacao;
    }

    public function getLocatario(): ?Locatario
    {
        return $this->locatario;
    }

    public function getAnfitriao(): ?Anfitriao
    {
        return $this->anfitriao;
    }

    public function getDataFim(): string
    {
        return date('d/m/y', strtotime($this->dataFim));
    }

    public function getDataInicio(): string
    {
        return date('d/m/y', strtotime($this->dataInicio));
    }

    public function getMulta(): float
    {
        return $this->multa;
    }

    public function getDiaria(): float
    {
        return $this->diaria;
    }

    public function getCheckin(): bool
    {
        return $this->checkin;
    }

    public function getCancelamento(): bool
    {
        return $this->cancelamento;
    }

    /**
     * Set the value of anfitriao
     *
     * @return  self
     */
    public function setAnfitriao(Anfitriao $anfitriao)
    {
        $this->anfitriao = $anfitriao;

        return $this;
    }

    /**
     * Set the value of locatario
     *
     * @return  self
     */
    public function setLocatario(Locatario $locatario)
    {
        $this->locatario = $locatario;

        return $this;
    }

    /**
     * Set the value of acomodacao
     *
     * @return  self
     */
    public function setAcomodacao(Acomodacao $acomodacao)
    {
        $this->acomodacao = $acomodacao;

        return $this;
    }

    /**
     * Set the value of diaria
     *
     * @return  self
     */
    public function setDiaria(float $diaria)
    {

        $this->diaria = floatval(number_format($diaria, 2, '.', ''));

        return $this;
    }

    /**
     * Set the value of dataInicio
     *
     * @return  self
     */
    public function setDataInicio(string $dataInicio)
    {
        $this->dataInicio = $dataInicio;

        return $this;
    }

    /**
     * Set the value of dataFim
     *
     * @return  self
     */
    public function setDataFim(string $dataFim)
    {
        $this->dataFim = $dataFim;

        return $this;
    }

    /**
     * Set the value of multa
     *
     * @return  self
     */
    public function setMulta(float $multa)
    {
        $this->multa = floatval(number_format($multa, 2, '.', ''));

        return $this;
    }

    /**
     * Set the value of checkin
     *
     * @return  self
     */
    public function setCheckin(bool $checkin)
    {
        $this->checkin = $checkin;

        return $this;
    }

    /**
     * Set the value of cancelamento
     *
     * @return  self
     */
    public function setCancelamento(bool $cancelamento)
    {
        $this->cancelamento = $cancelamento;

        return $this;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
