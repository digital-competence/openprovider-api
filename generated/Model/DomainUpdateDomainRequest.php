<?php

namespace DigiComp\OpenproviderApi\Model;

class DomainUpdateDomainRequest
{
    /**
     *
     *
     * @var float|null
     */
    protected $acceptUpdateFee;
    /**
     *
     *
     * @var DomainUpdateAdditionalData|null
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
     * @var int|null
     */
    protected $id;
    /**
     *
     *
     * @var bool|null
     */
    protected $isDnssecEnabled;
    /**
     *
     *
     * @var bool|null
     */
    protected $isLocked;
    /**
     *
     *
     * @var bool|null
     */
    protected $isPrivateWhoisEnabled;
    /**
     *
     *
     * @var bool|null
     */
    protected $isSpamexpertsEnabled;
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
     * @var bool|null
     */
    protected $removeNses;
    /**
     *
     *
     * @var string|null
     */
    protected $resellerHandle;
    /**
     *
     *
     * @var bool|null
     */
    protected $resetAuthCode;
    /**
     *
     *
     * @var string|null
     */
    protected $scheduledAt;
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
     * @return float|null
     */
    public function getAcceptUpdateFee(): ?float
    {
        return $this->acceptUpdateFee;
    }
    /**
     *
     *
     * @param float|null $acceptUpdateFee
     *
     * @return self
     */
    public function setAcceptUpdateFee(?float $acceptUpdateFee): self
    {
        $this->acceptUpdateFee = $acceptUpdateFee;
        return $this;
    }
    /**
     *
     *
     * @return DomainUpdateAdditionalData|null
     */
    public function getAdditionalData(): ?DomainUpdateAdditionalData
    {
        return $this->additionalData;
    }
    /**
     *
     *
     * @param DomainUpdateAdditionalData|null $additionalData
     *
     * @return self
     */
    public function setAdditionalData(?DomainUpdateAdditionalData $additionalData): self
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
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     *
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getIsDnssecEnabled(): ?bool
    {
        return $this->isDnssecEnabled;
    }
    /**
     *
     *
     * @param bool|null $isDnssecEnabled
     *
     * @return self
     */
    public function setIsDnssecEnabled(?bool $isDnssecEnabled): self
    {
        $this->isDnssecEnabled = $isDnssecEnabled;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getIsLocked(): ?bool
    {
        return $this->isLocked;
    }
    /**
     *
     *
     * @param bool|null $isLocked
     *
     * @return self
     */
    public function setIsLocked(?bool $isLocked): self
    {
        $this->isLocked = $isLocked;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getIsPrivateWhoisEnabled(): ?bool
    {
        return $this->isPrivateWhoisEnabled;
    }
    /**
     *
     *
     * @param bool|null $isPrivateWhoisEnabled
     *
     * @return self
     */
    public function setIsPrivateWhoisEnabled(?bool $isPrivateWhoisEnabled): self
    {
        $this->isPrivateWhoisEnabled = $isPrivateWhoisEnabled;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getIsSpamexpertsEnabled(): ?bool
    {
        return $this->isSpamexpertsEnabled;
    }
    /**
     *
     *
     * @param bool|null $isSpamexpertsEnabled
     *
     * @return self
     */
    public function setIsSpamexpertsEnabled(?bool $isSpamexpertsEnabled): self
    {
        $this->isSpamexpertsEnabled = $isSpamexpertsEnabled;
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
     * @return bool|null
     */
    public function getRemoveNses(): ?bool
    {
        return $this->removeNses;
    }
    /**
     *
     *
     * @param bool|null $removeNses
     *
     * @return self
     */
    public function setRemoveNses(?bool $removeNses): self
    {
        $this->removeNses = $removeNses;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getResellerHandle(): ?string
    {
        return $this->resellerHandle;
    }
    /**
     *
     *
     * @param string|null $resellerHandle
     *
     * @return self
     */
    public function setResellerHandle(?string $resellerHandle): self
    {
        $this->resellerHandle = $resellerHandle;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getResetAuthCode(): ?bool
    {
        return $this->resetAuthCode;
    }
    /**
     *
     *
     * @param bool|null $resetAuthCode
     *
     * @return self
     */
    public function setResetAuthCode(?bool $resetAuthCode): self
    {
        $this->resetAuthCode = $resetAuthCode;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getScheduledAt(): ?string
    {
        return $this->scheduledAt;
    }
    /**
     *
     *
     * @param string|null $scheduledAt
     *
     * @return self
     */
    public function setScheduledAt(?string $scheduledAt): self
    {
        $this->scheduledAt = $scheduledAt;
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
