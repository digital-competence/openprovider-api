<?php

namespace DigiComp\OpenproviderApi\Model;

class SettingsPaymentMethodSettings
{
    /**
     *
     *
     * @var SettingsPaymentMethodLimits|null
     */
    protected $limit;
    /**
     *
     *
     * @var float|null
     */
    protected $transactionFee;
    /**
     *
     *
     * @var float|null
     */
    protected $transactionFeeAbsolute;
    /**
     *
     *
     * @return SettingsPaymentMethodLimits|null
     */
    public function getLimit(): ?SettingsPaymentMethodLimits
    {
        return $this->limit;
    }
    /**
     *
     *
     * @param SettingsPaymentMethodLimits|null $limit
     *
     * @return self
     */
    public function setLimit(?SettingsPaymentMethodLimits $limit): self
    {
        $this->limit = $limit;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getTransactionFee(): ?float
    {
        return $this->transactionFee;
    }
    /**
     *
     *
     * @param float|null $transactionFee
     *
     * @return self
     */
    public function setTransactionFee(?float $transactionFee): self
    {
        $this->transactionFee = $transactionFee;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getTransactionFeeAbsolute(): ?float
    {
        return $this->transactionFeeAbsolute;
    }
    /**
     *
     *
     * @param float|null $transactionFeeAbsolute
     *
     * @return self
     */
    public function setTransactionFeeAbsolute(?float $transactionFeeAbsolute): self
    {
        $this->transactionFeeAbsolute = $transactionFeeAbsolute;
        return $this;
    }
}
