<?php

namespace App\Models;

/**
 * Class Anuncio
 *
 * @property string $dataInicio
 * @property string $dataFim
 * @property float $valor
 * @property Acomodacao $acomodacao
 *
 * @package App\Models
 */

class Anuncio
{
    private $dataInicio;
    private $dataFim;
    private $valor;
    private $acomodacao;

    public function __construct(string $dataInicio, string $dataFim, float $valor, Acomodacao $acomodacao)
    {
        $this->dataInicio = $dataInicio;
        $this->dataFim = $dataFim;
        $this->valor = floatval(number_format($valor, 2, '.', ''));
        $this->acomodacao = $acomodacao;
    }

    /**
     * Get the value of dataInicio
     */
    public function getDataInicio(): string
    {
        return $this->dataInicio;
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
     * Get the value of dataFim
     */
    public function getDataFim(): string
    {
        return $this->dataFim;
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
     * Get the value of valor
     */
    public function getValor(): float
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     *
     * @return  self
     */
    public function setValor(float $valor)
    {
        $this->valor = floatval(number_format($valor, 2, '.', ''));

        return $this;
    }

    /**
     * Get the value of acomodacao
     */
    public function getAcomodacao(): Acomodacao
    {
        return $this->acomodacao;
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
}
