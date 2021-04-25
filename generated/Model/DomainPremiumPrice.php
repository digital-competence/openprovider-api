<?php

namespace DigiComp\OpenproviderApi\Model;

class DomainPremiumPrice
{
    /**
     *
     *
     * @var string|null
     */
    protected $currency;
    /**
     *
     *
     * @var DomainOperationPrice|null
     */
    protected $price;
    /**
     *
     *
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     *
     *
     * @param string|null $currency
     *
     * @return self
     */
    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;
        return $this;
    }
    /**
     *
     *
     * @return DomainOperationPrice|null
     */
    public function getPrice(): ?DomainOperationPrice
    {
        return $this->price;
    }
    /**
     *
     *
     * @param DomainOperationPrice|null $price
     *
     * @return self
     */
    public function setPrice(?DomainOperationPrice $price): self
    {
        $this->price = $price;
        return $this;
    }
}
