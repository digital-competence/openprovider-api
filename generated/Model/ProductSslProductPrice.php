<?php

namespace DigiComp\OpenproviderApi\Model;

class ProductSslProductPrice
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
     * @var float|null
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
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    /**
     *
     *
     * @param float|null $price
     *
     * @return self
     */
    public function setPrice(?float $price): self
    {
        $this->price = $price;
        return $this;
    }
}
