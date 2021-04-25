<?php

namespace DigiComp\OpenproviderApi\Model;

class DomainTradeDomainRequest
{
    /**
     *
     *
     * @var DomainAdditionalData|null
     */
    protected $additionalData;
    /**
     *
     *
     * @var string|null
     */
    protected $adminHandle;
    /**
     *
     *
     * @var string|null
     */
    protected $authCode;
    /**
     *
     *
     * @var string|null
     */
    protected $autorenew;
    /**
     *
     *
     * @var string|null
     */
    protected $billingHandle;
    /**
     *
     *
     * @var string|null
     */
    protected $comments;
    /**
     *
     *
     * @var DomainDnssecKey[]|null
     */
    protected $dnssecKeys;
    /**
     *
     *
     * @var DomainDomain|null
     */
    protected $domain;
    /**
     *
     *
     * @var DomainNameserver[]|null
     */
    protected $nameServers;
    /**
     *
     *
     * @var string|null
     */
    protected $nsGroup;
    /**
     *
     *
     * @var int|null
     */
    protected $nsTemplateId;
    /**
     *
     *
     * @var string|null
     */
    protected $nsTemplateName;
    /**
     *
     *
     * @var string|null
     */
    protected $ownerHandle;
    /**
     *
     *
     * @var int|null
     */
    protected $period;
    /**
     *
     *
     * @var string|null
     */
    protected $promoCode;
    /**
     *
     *
     * @var string|null
     */
    protected $techHandle;
    /**
     *
     *
     * @var bool|null
     */
    protected $useDomicile;
    /**
     *
     *
     * @return DomainAdditionalData|null
     */
    public function getAdditionalData(): ?DomainAdditionalData
    {
        return $this->additionalData;
    }
    /**
     *
     *
     * @param DomainAdditionalData|null $additionalData
     *
     * @return self
     */
    public function setAdditionalData(?DomainAdditionalData $additionalData): self
    {
        $this->additionalData = $additionalData;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getAdminHandle(): ?string
    {
        return $this->adminHandle;
    }
    /**
     *
     *
     * @param string|null $adminHandle
     *
     * @return self
     */
    public function setAdminHandle(?string $adminHandle): self
    {
        $this->adminHandle = $adminHandle;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getAuthCode(): ?string
    {
        return $this->authCode;
    }
    /**
     *
     *
     * @param string|null $authCode
     *
     * @return self
     */
    public function setAuthCode(?string $authCode): self
    {
        $this->authCode = $authCode;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getAutorenew(): ?string
    {
        return $this->autorenew;
    }
    /**
     *
     *
     * @param string|null $autorenew
     *
     * @return self
     */
    public function setAutorenew(?string $autorenew): self
    {
        $this->autorenew = $autorenew;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getBillingHandle(): ?string
    {
        return $this->billingHandle;
    }
    /**
     *
     *
     * @param string|null $billingHandle
     *
     * @return self
     */
    public function setBillingHandle(?string $billingHandle): self
    {
        $this->billingHandle = $billingHandle;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getComments(): ?string
    {
        return $this->comments;
    }
    /**
     *
     *
     * @param string|null $comments
     *
     * @return self
     */
    public function setComments(?string $comments): self
    {
        $this->comments = $comments;
        return $this;
    }
    /**
     *
     *
     * @return DomainDnssecKey[]|null
     */
    public function getDnssecKeys(): ?array
    {
        return $this->dnssecKeys;
    }
    /**
     *
     *
     * @param DomainDnssecKey[]|null $dnssecKeys
     *
     * @return self
     */
    public function setDnssecKeys(?array $dnssecKeys): self
    {
        $this->dnssecKeys = $dnssecKeys;
        return $this;
    }
    /**
     *
     *
     * @return DomainDomain|null
     */
    public function getDomain(): ?DomainDomain
    {
        return $this->domain;
    }
    /**
     *
     *
     * @param DomainDomain|null $domain
     *
     * @return self
     */
    public function setDomain(?DomainDomain $domain): self
    {
        $this->domain = $domain;
        return $this;
    }
    /**
     *
     *
     * @return DomainNameserver[]|null
     */
    public function getNameServers(): ?array
    {
        return $this->nameServers;
    }
    /**
     *
     *
     * @param DomainNameserver[]|null $nameServers
     *
     * @return self
     */
    public function setNameServers(?array $nameServers): self
    {
        $this->nameServers = $nameServers;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getNsGroup(): ?string
    {
        return $this->nsGroup;
    }
    /**
     *
     *
     * @param string|null $nsGroup
     *
     * @return self
     */
    public function setNsGroup(?string $nsGroup): self
    {
        $this->nsGroup = $nsGroup;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getNsTemplateId(): ?int
    {
        return $this->nsTemplateId;
    }
    /**
     *
     *
     * @param int|null $nsTemplateId
     *
     * @return self
     */
    public function setNsTemplateId(?int $nsTemplateId): self
    {
        $this->nsTemplateId = $nsTemplateId;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getNsTemplateName(): ?string
    {
        return $this->nsTemplateName;
    }
    /**
     *
     *
     * @param string|null $nsTemplateName
     *
     * @return self
     */
    public function setNsTemplateName(?string $nsTemplateName): self
    {
        $this->nsTemplateName = $nsTemplateName;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getOwnerHandle(): ?string
    {
        return $this->ownerHandle;
    }
    /**
     *
     *
     * @param string|null $ownerHandle
     *
     * @return self
     */
    public function setOwnerHandle(?string $ownerHandle): self
    {
        $this->ownerHandle = $ownerHandle;
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
     * @return string|null
     */
    public function getPromoCode(): ?string
    {
        return $this->promoCode;
    }
    /**
     *
     *
     * @param string|null $promoCode
     *
     * @return self
     */
    public function setPromoCode(?string $promoCode): self
    {
        $this->promoCode = $promoCode;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getTechHandle(): ?string
    {
        return $this->techHandle;
    }
    /**
     *
     *
     * @param string|null $techHandle
     *
     * @return self
     */
    public function setTechHandle(?string $techHandle): self
    {
        $this->techHandle = $techHandle;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getUseDomicile(): ?bool
    {
        return $this->useDomicile;
    }
    /**
     *
     *
     * @param bool|null $useDomicile
     *
     * @return self
     */
    public function setUseDomicile(?bool $useDomicile): self
    {
        $this->useDomicile = $useDomicile;
        return $this;
    }
}
