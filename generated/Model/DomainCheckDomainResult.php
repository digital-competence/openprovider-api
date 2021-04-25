<?php

namespace DigiComp\OpenproviderApi\Model;

class DomainCheckDomainResult
{
    /**
     *
     *
     * @var string|null
     */
    protected $claimKey;
    /**
     *
     *
     * @var string|null
     */
    protected $domain;
    /**
     *
     *
     * @var bool|null
     */
    protected $isPremium;
    /**
     *
     *
     * @var DomainPremiumPrice|null
     */
    protected $premium;
    /**
     *
     *
     * @var DomainPriceGroup|null
     */
    protected $price;
    /**
     *
     *
     * @var string|null
     */
    protected $reason;
    /**
     *
     *
     * @var string|null
     */
    protected $status;
    /**
     *
     *
     * @var string|null
     */
    protected $whois;
    /**
     *
     *
     * @return string|null
     */
    public function getClaimKey(): ?string
    {
        return $this->claimKey;
    }
    /**
     *
     *
     * @param string|null $claimKey
     *
     * @return self
     */
    public function setClaimKey(?string $claimKey): self
    {
        $this->claimKey = $claimKey;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getDomain(): ?string
    {
        return $this->domain;
    }
    /**
     *
     *
     * @param string|null $domain
     *
     * @return self
     */
    public function setDomain(?string $domain): self
    {
        $this->domain = $domain;
        return $this;
    }
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
     * @return DomainPremiumPrice|null
     */
    public function getPremium(): ?DomainPremiumPrice
    {
        return $this->premium;
    }
    /**
     *
     *
     * @param DomainPremiumPrice|null $premium
     *
     * @return self
     */
    public function setPremium(?DomainPremiumPrice $premium): self
    {
        $this->premium = $premium;
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
     * @return string|null
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }
    /**
     *
     *
     * @param string|null $reason
     *
     * @return self
     */
    public function setReason(?string $reason): self
    {
        $this->reason = $reason;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     *
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getWhois(): ?string
    {
        return $this->whois;
    }
    /**
     *
     *
     * @param string|null $whois
     *
     * @return self
     */
    public function setWhois(?string $whois): self
    {
        $this->whois = $whois;
        return $this;
    }
}
