<?php

namespace DigiComp\OpenproviderApi\Model;

class TldPrice
{
    /**
     *
     *
     * @var TldPriceInCurrency|null
     */
    protected $product;
    /**
     *
     *
     * @var TldPriceInCurrency|null
     */
    protected $reseller;
    /**
     *
     *
     * @return TldPriceInCurrency|null
     */
    public function getProduct(): ?TldPriceInCurrency
    {
        return $this->product;
    }
    /**
     *
     *
     * @param TldPriceInCurrency|null $product
     *
     * @return self
     */
    public function setProduct(?TldPriceInCurrency $product): self
    {
        $this->product = $product;
        return $this;
    }
    /**
     *
     *
     * @return TldPriceInCurrency|null
     */
    public function getReseller(): ?TldPriceInCurrency
    {
        return $this->reseller;
    }
    /**
     *
     *
     * @param TldPriceInCurrency|null $reseller
     *
     * @return self
     */
    public function setReseller(?TldPriceInCurrency $reseller): self
    {
        $this->reseller = $reseller;
        return $this;
    }
}
