<?php

namespace DigiComp\OpenproviderApi\Model;

class DomainPriceGroup
{
    /**
     *
     *
     * @var DomainPrice|null
     */
    protected $product;
    /**
     *
     *
     * @var DomainPrice|null
     */
    protected $reseller;
    /**
     *
     *
     * @return DomainPrice|null
     */
    public function getProduct(): ?DomainPrice
    {
        return $this->product;
    }
    /**
     *
     *
     * @param DomainPrice|null $product
     *
     * @return self
     */
    public function setProduct(?DomainPrice $product): self
    {
        $this->product = $product;
        return $this;
    }
    /**
     *
     *
     * @return DomainPrice|null
     */
    public function getReseller(): ?DomainPrice
    {
        return $this->reseller;
    }
    /**
     *
     *
     * @param DomainPrice|null $reseller
     *
     * @return self
     */
    public function setReseller(?DomainPrice $reseller): self
    {
        $this->reseller = $reseller;
        return $this;
    }
}
