<?php

namespace DigiComp\OpenproviderApi\Model;

class OrderCreateOrderRequest
{
    /**
     * Email for domain ownership verification. Should start with well-known generic name like admin@, hostmater@, administrator@, etc.
     *
     * @var string|null
     */
    protected $approverEmail;
    /**
     *
     *
     * @var string|null
     */
    protected $autorenew = 'off';
    /**
     *
     *
     * @var string|null
     */
    protected $csr;
    /**
     *
     *
     * @var int|null
     */
    protected $domainAmount;
    /**
     *
     *
     * @var OrderSslOrderDomainValidationMethods[]|null
     */
    protected $domainValidationMethods;
    /**
     *
     *
     * @var bool|null
     */
    protected $enableDnsAutomation = false;
    /**
     *
     *
     * @var string[]|null
     */
    protected $hostNames;
    /**
     *
     *
     * @var string|null
     */
    protected $organizationHandle;
    /**
     *
     *
     * @var int|null
     */
    protected $period;
    /**
     *
     *
     * @var int|null
     */
    protected $productId;
    /**
     *
     *
     * @var string|null
     */
    protected $signatureHashAlgorithm;
    /**
     *
     *
     * @var string|null
     */
    protected $softwareId;
    /**
     *
     *
     * @var bool|null
     */
    protected $startProvision = false;
    /**
     *
     *
     * @var string|null
     */
    protected $technicalHandle;
    /**
     *
     *
     * @var int|null
     */
    protected $wildcardDomainAmount;
    /**
     * Email for domain ownership verification. Should start with well-known generic name like admin@, hostmater@, administrator@, etc.
     *
     * @return string|null
     */
    public function getApproverEmail(): ?string
    {
        return $this->approverEmail;
    }
    /**
     * Email for domain ownership verification. Should start with well-known generic name like admin@, hostmater@, administrator@, etc.
     *
     * @param string|null $approverEmail
     *
     * @return self
     */
    public function setApproverEmail(?string $approverEmail): self
    {
        $this->approverEmail = $approverEmail;
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
    public function getCsr(): ?string
    {
        return $this->csr;
    }
    /**
     *
     *
     * @param string|null $csr
     *
     * @return self
     */
    public function setCsr(?string $csr): self
    {
        $this->csr = $csr;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getDomainAmount(): ?int
    {
        return $this->domainAmount;
    }
    /**
     *
     *
     * @param int|null $domainAmount
     *
     * @return self
     */
    public function setDomainAmount(?int $domainAmount): self
    {
        $this->domainAmount = $domainAmount;
        return $this;
    }
    /**
     *
     *
     * @return OrderSslOrderDomainValidationMethods[]|null
     */
    public function getDomainValidationMethods(): ?array
    {
        return $this->domainValidationMethods;
    }
    /**
     *
     *
     * @param OrderSslOrderDomainValidationMethods[]|null $domainValidationMethods
     *
     * @return self
     */
    public function setDomainValidationMethods(?array $domainValidationMethods): self
    {
        $this->domainValidationMethods = $domainValidationMethods;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getEnableDnsAutomation(): ?bool
    {
        return $this->enableDnsAutomation;
    }
    /**
     *
     *
     * @param bool|null $enableDnsAutomation
     *
     * @return self
     */
    public function setEnableDnsAutomation(?bool $enableDnsAutomation): self
    {
        $this->enableDnsAutomation = $enableDnsAutomation;
        return $this;
    }
    /**
     *
     *
     * @return string[]|null
     */
    public function getHostNames(): ?array
    {
        return $this->hostNames;
    }
    /**
     *
     *
     * @param string[]|null $hostNames
     *
     * @return self
     */
    public function setHostNames(?array $hostNames): self
    {
        $this->hostNames = $hostNames;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getOrganizationHandle(): ?string
    {
        return $this->organizationHandle;
    }
    /**
     *
     *
     * @param string|null $organizationHandle
     *
     * @return self
     */
    public function setOrganizationHandle(?string $organizationHandle): self
    {
        $this->organizationHandle = $organizationHandle;
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
     * @return int|null
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }
    /**
     *
     *
     * @param int|null $productId
     *
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getSignatureHashAlgorithm(): ?string
    {
        return $this->signatureHashAlgorithm;
    }
    /**
     *
     *
     * @param string|null $signatureHashAlgorithm
     *
     * @return self
     */
    public function setSignatureHashAlgorithm(?string $signatureHashAlgorithm): self
    {
        $this->signatureHashAlgorithm = $signatureHashAlgorithm;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getSoftwareId(): ?string
    {
        return $this->softwareId;
    }
    /**
     *
     *
     * @param string|null $softwareId
     *
     * @return self
     */
    public function setSoftwareId(?string $softwareId): self
    {
        $this->softwareId = $softwareId;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getStartProvision(): ?bool
    {
        return $this->startProvision;
    }
    /**
     *
     *
     * @param bool|null $startProvision
     *
     * @return self
     */
    public function setStartProvision(?bool $startProvision): self
    {
        $this->startProvision = $startProvision;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getTechnicalHandle(): ?string
    {
        return $this->technicalHandle;
    }
    /**
     *
     *
     * @param string|null $technicalHandle
     *
     * @return self
     */
    public function setTechnicalHandle(?string $technicalHandle): self
    {
        $this->technicalHandle = $technicalHandle;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getWildcardDomainAmount(): ?int
    {
        return $this->wildcardDomainAmount;
    }
    /**
     *
     *
     * @param int|null $wildcardDomainAmount
     *
     * @return self
     */
    public function setWildcardDomainAmount(?int $wildcardDomainAmount): self
    {
        $this->wildcardDomainAmount = $wildcardDomainAmount;
        return $this;
    }
}
