<?php

namespace DigiComp\OpenproviderApi\Model;

class ProductSslProductPriceGroup
{
    /**
     *
     *
     * @var ProductSslProductPrice|null
     */
    protected $product;
    /**
     *
     *
     * @var ProductSslProductReseller|null
     */
    protected $reseller;
    /**
     *
     *
     * @return ProductSslProductPrice|null
     */
    public function getProduct(): ?ProductSslProductPrice
    {
        return $this->product;
    }
    /**
     *
     *
     * @param ProductSslProductPrice|null $product
     *
     * @return self
     */
    public function setProduct(?ProductSslProductPrice $product): self
    {
        $this->product = $product;
        return $this;
    }
    /**
     *
     *
     * @return ProductSslProductReseller|null
     */
    public function getReseller(): ?ProductSslProductReseller
    {
        return $this->reseller;
    }
    /**
     *
     *
     * @param ProductSslProductReseller|null $reseller
     *
     * @return self
     */
    public function setReseller(?ProductSslProductReseller $reseller): self
    {
        $this->reseller = $reseller;
        return $this;
    }
}
