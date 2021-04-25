<?php

namespace DigiComp\OpenproviderApi\Model;

class OrderReissueOrderRequest
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
    protected $csr;
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
     * @var int|null
     */
    protected $id;
    /**
     *
     *
     * @var string|null
     */
    protected $organizationHandle;
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
}
