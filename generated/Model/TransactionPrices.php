<?php

namespace DigiComp\OpenproviderApi\Model;

class TransactionPrices
{
    /**
     *
     *
     * @var TransactionPrice|null
     */
    protected $product;
    /**
     *
     *
     * @var TransactionPrice|null
     */
    protected $reseller;
    /**
     *
     *
     * @return TransactionPrice|null
     */
    public function getProduct(): ?TransactionPrice
    {
        return $this->product;
    }
    /**
     *
     *
     * @param TransactionPrice|null $product
     *
     * @return self
     */
    public function setProduct(?TransactionPrice $product): self
    {
        $this->product = $product;
        return $this;
    }
    /**
     *
     *
     * @return TransactionPrice|null
     */
    public function getReseller(): ?TransactionPrice
    {
        return $this->reseller;
    }
    /**
     *
     *
     * @param TransactionPrice|null $reseller
     *
     * @return self
     */
    public function setReseller(?TransactionPrice $reseller): self
    {
        $this->reseller = $reseller;
        return $this;
    }
}
