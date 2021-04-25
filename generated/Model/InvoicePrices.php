<?php

namespace DigiComp\OpenproviderApi\Model;

class InvoicePrices
{
    /**
     *
     *
     * @var InvoicePrice|null
     */
    protected $product;
    /**
     *
     *
     * @var InvoicePrice|null
     */
    protected $reseller;
    /**
     *
     *
     * @return InvoicePrice|null
     */
    public function getProduct(): ?InvoicePrice
    {
        return $this->product;
    }
    /**
     *
     *
     * @param InvoicePrice|null $product
     *
     * @return self
     */
    public function setProduct(?InvoicePrice $product): self
    {
        $this->product = $product;
        return $this;
    }
    /**
     *
     *
     * @return InvoicePrice|null
     */
    public function getReseller(): ?InvoicePrice
    {
        return $this->reseller;
    }
    /**
     *
     *
     * @param InvoicePrice|null $reseller
     *
     * @return self
     */
    public function setReseller(?InvoicePrice $reseller): self
    {
        $this->reseller = $reseller;
        return $this;
    }
}
