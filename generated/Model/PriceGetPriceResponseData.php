<?php

namespace DigiComp\OpenproviderApi\Model;

class PriceGetPriceResponseData
{
    /**
     *
     *
     * @var bool|null
     */
    protected $isPremium;
    /**
     *
     *
     * @var bool|null
     */
    protected $isPromotion;
    /**
     *
     *
     * @var DomainPriceGroup|null
     */
    protected $membershipPrice;
    /**
     *
     *
     * @var DomainPriceGroup|null
     */
    protected $price;
    /**
     *
     *
     * @var PricePromotionData|null
     */
    protected $promotionData;
    /**
     *
     *
     * @var DomainPriceGroup|null
     */
    protected $tierPrice;
    /**
     *
     *
     * @return bool|null
     */
    public function getIsPremium(): ?bool
    {
        return $this->isPremium;
    }
    /**
     *
     *
     * @param bool|null $isPremium
     *
     * @return self
     */
    public function setIsPremium(?bool $isPremium): self
    {
        $this->isPremium = $isPremium;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getIsPromotion(): ?bool
    {
        return $this->isPromotion;
    }
    /**
     *
     *
     * @param bool|null $isPromotion
     *
     * @return self
     */
    public function setIsPromotion(?bool $isPromotion): self
    {
        $this->isPromotion = $isPromotion;
        return $this;
    }
    /**
     *
     *
     * @return DomainPriceGroup|null
     */
    public function getMembershipPrice(): ?DomainPriceGroup
    {
        return $this->membershipPrice;
    }
    /**
     *
     *
     * @param DomainPriceGroup|null $membershipPrice
     *
     * @return self
     */
    public function setMembershipPrice(?DomainPriceGroup $membershipPrice): self
    {
        $this->membershipPrice = $membershipPrice;
        return $this;
    }
    /**
     *
     *
     * @return DomainPriceGroup|null
     */
    public function getPrice(): ?DomainPriceGroup
    {
        return $this->price;
    }
    /**
     *
     *
     * @param DomainPriceGroup|null $price
     *
     * @return self
     */
    public function setPrice(?DomainPriceGroup $price): self
    {
        $this->price = $price;
        return $this;
    }
    /**
     *
     *
     * @return PricePromotionData|null
     */
    public function getPromotionData(): ?PricePromotionData
    {
        return $this->promotionData;
    }
    /**
     *
     *
     * @param PricePromotionData|null $promotionData
     *
     * @return self
     */
    public function setPromotionData(?PricePromotionData $promotionData): self
    {
        $this->promotionData = $promotionData;
        return $this;
    }
    /**
     *
     *
     * @return DomainPriceGroup|null
     */
    public function getTierPrice(): ?DomainPriceGroup
    {
        return $this->tierPrice;
    }
    /**
     *
     *
     * @param DomainPriceGroup|null $tierPrice
     *
     * @return self
     */
    public function setTierPrice(?DomainPriceGroup $tierPrice): self
    {
        $this->tierPrice = $tierPrice;
        return $this;
    }
}
