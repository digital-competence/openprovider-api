<?php

namespace DigiComp\OpenproviderApi\Model;

class SettingsTransactionFee
{
    /**
     *
     *
     * @var float|null
     */
    protected $bank;
    /**
     *
     *
     * @var float|null
     */
    protected $creditCard;
    /**
     *
     *
     * @var float|null
     */
    protected $ideal;
    /**
     *
     *
     * @var float|null
     */
    protected $paypal;
    /**
     *
     *
     * @var float|null
     */
    protected $westernUnion;
    /**
     *
     *
     * @var float|null
     */
    protected $yandex;
    /**
     *
     *
     * @return float|null
     */
    public function getBank(): ?float
    {
        return $this->bank;
    }
    /**
     *
     *
     * @param float|null $bank
     *
     * @return self
     */
    public function setBank(?float $bank): self
    {
        $this->bank = $bank;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getCreditCard(): ?float
    {
        return $this->creditCard;
    }
    /**
     *
     *
     * @param float|null $creditCard
     *
     * @return self
     */
    public function setCreditCard(?float $creditCard): self
    {
        $this->creditCard = $creditCard;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getIdeal(): ?float
    {
        return $this->ideal;
    }
    /**
     *
     *
     * @param float|null $ideal
     *
     * @return self
     */
    public function setIdeal(?float $ideal): self
    {
        $this->ideal = $ideal;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getPaypal(): ?float
    {
        return $this->paypal;
    }
    /**
     *
     *
     * @param float|null $paypal
     *
     * @return self
     */
    public function setPaypal(?float $paypal): self
    {
        $this->paypal = $paypal;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getWesternUnion(): ?float
    {
        return $this->westernUnion;
    }
    /**
     *
     *
     * @param float|null $westernUnion
     *
     * @return self
     */
    public function setWesternUnion(?float $westernUnion): self
    {
        $this->westernUnion = $westernUnion;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getYandex(): ?float
    {
        return $this->yandex;
    }
    /**
     *
     *
     * @param float|null $yandex
     *
     * @return self
     */
    public function setYandex(?float $yandex): self
    {
        $this->yandex = $yandex;
        return $this;
    }
}
