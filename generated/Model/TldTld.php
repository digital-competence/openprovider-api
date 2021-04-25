<?php

namespace DigiComp\OpenproviderApi\Model;

class TldTld
{
    /**
     *
     *
     * @var bool|null
     */
    protected $adminHandleSupported;
    /**
     *
     *
     * @var bool|null
     */
    protected $billingHandleEnabled;
    /**
     *
     *
     * @var bool|null
     */
    protected $billingHandleSupported;
    /**
     *
     *
     * @var TldDescription|null
     */
    protected $description;
    /**
     *
     *
     * @var int[]|null
     */
    protected $dnssecAlgorithms;
    /**
     *
     *
     * @var bool|null
     */
    protected $dnssecAllowed;
    /**
     *
     *
     * @var bool|null
     */
    protected $dnssecDigestsAllowed;
    /**
     *
     *
     * @var bool|null
     */
    protected $dnssecKeysAllowed;
    /**
     *
     *
     * @var int|null
     */
    protected $dnssecMaxRecordsAmount;
    /**
     *
     *
     * @var bool|null
     */
    protected $domicileAvailable;
    /**
     *
     *
     * @var bool|null
     */
    protected $isAuthCodeAvailable;
    /**
     *
     *
     * @var bool|null
     */
    protected $isAuthCodeChangeable;
    /**
     *
     *
     * @var bool|null
     */
    protected $isAuthCodeRequested;
    /**
     *
     *
     * @var bool|null
     */
    protected $isPrivateWhoisAllowed;
    /**
     *
     *
     * @var bool|null
     */
    protected $isTradeAuthCodeRequired;
    /**
     *
     *
     * @var bool|null
     */
    protected $isTransferAuthCodeRequired;
    /**
     *
     *
     * @var TldLevelPrice[]|null
     */
    protected $levelPrices;
    /**
     *
     *
     * @var int|null
     */
    protected $maxPeriod;
    /**
     *
     *
     * @var int|null
     */
    protected $minPeriod;
    /**
     *
     *
     * @var string|null
     */
    protected $name;
    /**
     *
     *
     * @var bool|null
     */
    protected $ownerHandleSupported;
    /**
     *
     *
     * @var TldPrices|null
     */
    protected $prices;
    /**
     *
     *
     * @var int|null
     */
    protected $quarantinePeriod;
    /**
     *
     *
     * @var bool|null
     */
    protected $renewAvailable;
    /**
     *
     *
     * @var bool|null
     */
    protected $resellerHandleEnabled;
    /**
     *
     *
     * @var bool|null
     */
    protected $resellerHandleSupported;
    /**
     *
     *
     * @var string[]|null
     */
    protected $restrictions;
    /**
     *
     *
     * @var int|null
     */
    protected $softQuarantinePeriod;
    /**
     *
     *
     * @var string|null
     */
    protected $status;
    /**
     *
     *
     * @var TldApplicationMode[]|null
     */
    protected $supportedApplicationMode;
    /**
     *
     *
     * @var TldIdnScript[]|null
     */
    protected $supportedIdnScripts;
    /**
     *
     *
     * @var bool|null
     */
    protected $techHandleSupported;
    /**
     *
     *
     * @var bool|null
     */
    protected $tradeAvailable;
    /**
     *
     *
     * @var bool|null
     */
    protected $transferAvailable;
    /**
     *
     *
     * @var int|null
     */
    protected $usageCount;
    /**
     *
     *
     * @return bool|null
     */
    public function getAdminHandleSupported(): ?bool
    {
        return $this->adminHandleSupported;
    }
    /**
     *
     *
     * @param bool|null $adminHandleSupported
     *
     * @return self
     */
    public function setAdminHandleSupported(?bool $adminHandleSupported): self
    {
        $this->adminHandleSupported = $adminHandleSupported;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getBillingHandleEnabled(): ?bool
    {
        return $this->billingHandleEnabled;
    }
    /**
     *
     *
     * @param bool|null $billingHandleEnabled
     *
     * @return self
     */
    public function setBillingHandleEnabled(?bool $billingHandleEnabled): self
    {
        $this->billingHandleEnabled = $billingHandleEnabled;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getBillingHandleSupported(): ?bool
    {
        return $this->billingHandleSupported;
    }
    /**
     *
     *
     * @param bool|null $billingHandleSupported
     *
     * @return self
     */
    public function setBillingHandleSupported(?bool $billingHandleSupported): self
    {
        $this->billingHandleSupported = $billingHandleSupported;
        return $this;
    }
    /**
     *
     *
     * @return TldDescription|null
     */
    public function getDescription(): ?TldDescription
    {
        return $this->description;
    }
    /**
     *
     *
     * @param TldDescription|null $description
     *
     * @return self
     */
    public function setDescription(?TldDescription $description): self
    {
        $this->description = $description;
        return $this;
    }
    /**
     *
     *
     * @return int[]|null
     */
    public function getDnssecAlgorithms(): ?array
    {
        return $this->dnssecAlgorithms;
    }
    /**
     *
     *
     * @param int[]|null $dnssecAlgorithms
     *
     * @return self
     */
    public function setDnssecAlgorithms(?array $dnssecAlgorithms): self
    {
        $this->dnssecAlgorithms = $dnssecAlgorithms;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getDnssecAllowed(): ?bool
    {
        return $this->dnssecAllowed;
    }
    /**
     *
     *
     * @param bool|null $dnssecAllowed
     *
     * @return self
     */
    public function setDnssecAllowed(?bool $dnssecAllowed): self
    {
        $this->dnssecAllowed = $dnssecAllowed;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getDnssecDigestsAllowed(): ?bool
    {
        return $this->dnssecDigestsAllowed;
    }
    /**
     *
     *
     * @param bool|null $dnssecDigestsAllowed
     *
     * @return self
     */
    public function setDnssecDigestsAllowed(?bool $dnssecDigestsAllowed): self
    {
        $this->dnssecDigestsAllowed = $dnssecDigestsAllowed;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getDnssecKeysAllowed(): ?bool
    {
        return $this->dnssecKeysAllowed;
    }
    /**
     *
     *
     * @param bool|null $dnssecKeysAllowed
     *
     * @return self
     */
    public function setDnssecKeysAllowed(?bool $dnssecKeysAllowed): self
    {
        $this->dnssecKeysAllowed = $dnssecKeysAllowed;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getDnssecMaxRecordsAmount(): ?int
    {
        return $this->dnssecMaxRecordsAmount;
    }
    /**
     *
     *
     * @param int|null $dnssecMaxRecordsAmount
     *
     * @return self
     */
    public function setDnssecMaxRecordsAmount(?int $dnssecMaxRecordsAmount): self
    {
        $this->dnssecMaxRecordsAmount = $dnssecMaxRecordsAmount;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getDomicileAvailable(): ?bool
    {
        return $this->domicileAvailable;
    }
    /**
     *
     *
     * @param bool|null $domicileAvailable
     *
     * @return self
     */
    public function setDomicileAvailable(?bool $domicileAvailable): self
    {
        $this->domicileAvailable = $domicileAvailable;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getIsAuthCodeAvailable(): ?bool
    {
        return $this->isAuthCodeAvailable;
    }
    /**
     *
     *
     * @param bool|null $isAuthCodeAvailable
     *
     * @return self
     */
    public function setIsAuthCodeAvailable(?bool $isAuthCodeAvailable): self
    {
        $this->isAuthCodeAvailable = $isAuthCodeAvailable;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getIsAuthCodeChangeable(): ?bool
    {
        return $this->isAuthCodeChangeable;
    }
    /**
     *
     *
     * @param bool|null $isAuthCodeChangeable
     *
     * @return self
     */
    public function setIsAuthCodeChangeable(?bool $isAuthCodeChangeable): self
    {
        $this->isAuthCodeChangeable = $isAuthCodeChangeable;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getIsAuthCodeRequested(): ?bool
    {
        return $this->isAuthCodeRequested;
    }
    /**
     *
     *
     * @param bool|null $isAuthCodeRequested
     *
     * @return self
     */
    public function setIsAuthCodeRequested(?bool $isAuthCodeRequested): self
    {
        $this->isAuthCodeRequested = $isAuthCodeRequested;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getIsPrivateWhoisAllowed(): ?bool
    {
        return $this->isPrivateWhoisAllowed;
    }
    /**
     *
     *
     * @param bool|null $isPrivateWhoisAllowed
     *
     * @return self
     */
    public function setIsPrivateWhoisAllowed(?bool $isPrivateWhoisAllowed): self
    {
        $this->isPrivateWhoisAllowed = $isPrivateWhoisAllowed;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getIsTradeAuthCodeRequired(): ?bool
    {
        return $this->isTradeAuthCodeRequired;
    }
    /**
     *
     *
     * @param bool|null $isTradeAuthCodeRequired
     *
     * @return self
     */
    public function setIsTradeAuthCodeRequired(?bool $isTradeAuthCodeRequired): self
    {
        $this->isTradeAuthCodeRequired = $isTradeAuthCodeRequired;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getIsTransferAuthCodeRequired(): ?bool
    {
        return $this->isTransferAuthCodeRequired;
    }
    /**
     *
     *
     * @param bool|null $isTransferAuthCodeRequired
     *
     * @return self
     */
    public function setIsTransferAuthCodeRequired(?bool $isTransferAuthCodeRequired): self
    {
        $this->isTransferAuthCodeRequired = $isTransferAuthCodeRequired;
        return $this;
    }
    /**
     *
     *
     * @return TldLevelPrice[]|null
     */
    public function getLevelPrices(): ?array
    {
        return $this->levelPrices;
    }
    /**
     *
     *
     * @param TldLevelPrice[]|null $levelPrices
     *
     * @return self
     */
    public function setLevelPrices(?array $levelPrices): self
    {
        $this->levelPrices = $levelPrices;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getMaxPeriod(): ?int
    {
        return $this->maxPeriod;
    }
    /**
     *
     *
     * @param int|null $maxPeriod
     *
     * @return self
     */
    public function setMaxPeriod(?int $maxPeriod): self
    {
        $this->maxPeriod = $maxPeriod;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getMinPeriod(): ?int
    {
        return $this->minPeriod;
    }
    /**
     *
     *
     * @param int|null $minPeriod
     *
     * @return self
     */
    public function setMinPeriod(?int $minPeriod): self
    {
        $this->minPeriod = $minPeriod;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     *
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getOwnerHandleSupported(): ?bool
    {
        return $this->ownerHandleSupported;
    }
    /**
     *
     *
     * @param bool|null $ownerHandleSupported
     *
     * @return self
     */
    public function setOwnerHandleSupported(?bool $ownerHandleSupported): self
    {
        $this->ownerHandleSupported = $ownerHandleSupported;
        return $this;
    }
    /**
     *
     *
     * @return TldPrices|null
     */
    public function getPrices(): ?TldPrices
    {
        return $this->prices;
    }
    /**
     *
     *
     * @param TldPrices|null $prices
     *
     * @return self
     */
    public function setPrices(?TldPrices $prices): self
    {
        $this->prices = $prices;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getQuarantinePeriod(): ?int
    {
        return $this->quarantinePeriod;
    }
    /**
     *
     *
     * @param int|null $quarantinePeriod
     *
     * @return self
     */
    public function setQuarantinePeriod(?int $quarantinePeriod): self
    {
        $this->quarantinePeriod = $quarantinePeriod;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getRenewAvailable(): ?bool
    {
        return $this->renewAvailable;
    }
    /**
     *
     *
     * @param bool|null $renewAvailable
     *
     * @return self
     */
    public function setRenewAvailable(?bool $renewAvailable): self
    {
        $this->renewAvailable = $renewAvailable;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getResellerHandleEnabled(): ?bool
    {
        return $this->resellerHandleEnabled;
    }
    /**
     *
     *
     * @param bool|null $resellerHandleEnabled
     *
     * @return self
     */
    public function setResellerHandleEnabled(?bool $resellerHandleEnabled): self
    {
        $this->resellerHandleEnabled = $resellerHandleEnabled;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getResellerHandleSupported(): ?bool
    {
        return $this->resellerHandleSupported;
    }
    /**
     *
     *
     * @param bool|null $resellerHandleSupported
     *
     * @return self
     */
    public function setResellerHandleSupported(?bool $resellerHandleSupported): self
    {
        $this->resellerHandleSupported = $resellerHandleSupported;
        return $this;
    }
    /**
     *
     *
     * @return string[]|null
     */
    public function getRestrictions(): ?array
    {
        return $this->restrictions;
    }
    /**
     *
     *
     * @param string[]|null $restrictions
     *
     * @return self
     */
    public function setRestrictions(?array $restrictions): self
    {
        $this->restrictions = $restrictions;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getSoftQuarantinePeriod(): ?int
    {
        return $this->softQuarantinePeriod;
    }
    /**
     *
     *
     * @param int|null $softQuarantinePeriod
     *
     * @return self
     */
    public function setSoftQuarantinePeriod(?int $softQuarantinePeriod): self
    {
        $this->softQuarantinePeriod = $softQuarantinePeriod;
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
     * @return TldApplicationMode[]|null
     */
    public function getSupportedApplicationMode(): ?array
    {
        return $this->supportedApplicationMode;
    }
    /**
     *
     *
     * @param TldApplicationMode[]|null $supportedApplicationMode
     *
     * @return self
     */
    public function setSupportedApplicationMode(?array $supportedApplicationMode): self
    {
        $this->supportedApplicationMode = $supportedApplicationMode;
        return $this;
    }
    /**
     *
     *
     * @return TldIdnScript[]|null
     */
    public function getSupportedIdnScripts(): ?array
    {
        return $this->supportedIdnScripts;
    }
    /**
     *
     *
     * @param TldIdnScript[]|null $supportedIdnScripts
     *
     * @return self
     */
    public function setSupportedIdnScripts(?array $supportedIdnScripts): self
    {
        $this->supportedIdnScripts = $supportedIdnScripts;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getTechHandleSupported(): ?bool
    {
        return $this->techHandleSupported;
    }
    /**
     *
     *
     * @param bool|null $techHandleSupported
     *
     * @return self
     */
    public function setTechHandleSupported(?bool $techHandleSupported): self
    {
        $this->techHandleSupported = $techHandleSupported;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getTradeAvailable(): ?bool
    {
        return $this->tradeAvailable;
    }
    /**
     *
     *
     * @param bool|null $tradeAvailable
     *
     * @return self
     */
    public function setTradeAvailable(?bool $tradeAvailable): self
    {
        $this->tradeAvailable = $tradeAvailable;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getTransferAvailable(): ?bool
    {
        return $this->transferAvailable;
    }
    /**
     *
     *
     * @param bool|null $transferAvailable
     *
     * @return self
     */
    public function setTransferAvailable(?bool $transferAvailable): self
    {
        $this->transferAvailable = $transferAvailable;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getUsageCount(): ?int
    {
        return $this->usageCount;
    }
    /**
     *
     *
     * @param int|null $usageCount
     *
     * @return self
     */
    public function setUsageCount(?int $usageCount): self
    {
        $this->usageCount = $usageCount;
        return $this;
    }
}
