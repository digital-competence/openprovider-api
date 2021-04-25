<?php

namespace DigiComp\OpenproviderApi\Model;

class PaymentPrices
{
    /**
     *
     *
     * @var PaymentPrice|null
     */
    protected $product;
    /**
     *
     *
     * @var PaymentPrice|null
     */
    protected $reseller;
    /**
     *
     *
     * @return PaymentPrice|null
     */
    public function getProduct(): ?PaymentPrice
    {
        return $this->product;
    }
    /**
     *
     *
     * @param PaymentPrice|null $product
     *
     * @return self
     */
    public function setProduct(?PaymentPrice $product): self
    {
        $this->product = $product;
        return $this;
    }
    /**
     *
     *
     * @return PaymentPrice|null
     */
    public function getReseller(): ?PaymentPrice
    {
        return $this->reseller;
    }
    /**
     *
     *
     * @param PaymentPrice|null $reseller
     *
     * @return self
     */
    public function setReseller(?PaymentPrice $reseller): self
    {
        $this->reseller = $reseller;
        return $this;
    }
}
