<?php

namespace DigiComp\OpenproviderApi\Model;

class TldPriceWithPromoInfo
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
     * @var TldPromoDetails|null
     */
    protected $promotionDetails;
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
     * @return TldPromoDetails|null
     */
    public function getPromotionDetails(): ?TldPromoDetails
    {
        return $this->promotionDetails;
    }
    /**
     *
     *
     * @param TldPromoDetails|null $promotionDetails
     *
     * @return self
     */
    public function setPromotionDetails(?TldPromoDetails $promotionDetails): self
    {
        $this->promotionDetails = $promotionDetails;
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
