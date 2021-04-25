<?php

namespace DigiComp\OpenproviderApi\Model;

class ProductSslProductPrices
{
    /**
     *
     *
     * @var ProductSslProductPriceGroup|null
     */
    protected $extraDomainPrice;
    /**
     *
     *
     * @var ProductSslProductPriceGroup|null
     */
    protected $extraWildcardDomainPrice;
    /**
     *
     *
     * @var int|null
     */
    protected $period;
    /**
     *
     *
     * @var ProductSslProductPriceGroup|null
     */
    protected $price;
    /**
     *
     *
     * @return ProductSslProductPriceGroup|null
     */
    public function getExtraDomainPrice(): ?ProductSslProductPriceGroup
    {
        return $this->extraDomainPrice;
    }
    /**
     *
     *
     * @param ProductSslProductPriceGroup|null $extraDomainPrice
     *
     * @return self
     */
    public function setExtraDomainPrice(?ProductSslProductPriceGroup $extraDomainPrice): self
    {
        $this->extraDomainPrice = $extraDomainPrice;
        return $this;
    }
    /**
     *
     *
     * @return ProductSslProductPriceGroup|null
     */
    public function getExtraWildcardDomainPrice(): ?ProductSslProductPriceGroup
    {
        return $this->extraWildcardDomainPrice;
    }
    /**
     *
     *
     * @param ProductSslProductPriceGroup|null $extraWildcardDomainPrice
     *
     * @return self
     */
    public function setExtraWildcardDomainPrice(?ProductSslProductPriceGroup $extraWildcardDomainPrice): self
    {
        $this->extraWildcardDomainPrice = $extraWildcardDomainPrice;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getPeriod(): ?int
    {
        return $this->period;
    }
    /**
     *
     *
     * @param int|null $period
     *
     * @return self
     */
    public function setPeriod(?int $period): self
    {
        $this->period = $period;
        return $this;
    }
    /**
     *
     *
     * @return ProductSslProductPriceGroup|null
     */
    public function getPrice(): ?ProductSslProductPriceGroup
    {
        return $this->price;
    }
    /**
     *
     *
     * @param ProductSslProductPriceGroup|null $price
     *
     * @return self
     */
    public function setPrice(?ProductSslProductPriceGroup $price): self
    {
        $this->price = $price;
        return $this;
    }
}
