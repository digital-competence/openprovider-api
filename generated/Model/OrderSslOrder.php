<?php

namespace DigiComp\OpenproviderApi\Model;

class OrderSslOrder
{
    /**
     *
     *
     * @var string|null
     */
    protected $activeDate;
    /**
     *
     *
     * @var OrderSslOrderAdditionalData[]|null
     */
    protected $additionalData;
    /**
     *
     *
     * @var string|null
     */
    protected $administrativeHandle;
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
    protected $brandName;
    /**
     *
     *
     * @var string|null
     */
    protected $certificate;
    /**
     *
     *
     * @var string|null
     */
    protected $commonName;
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
     * @var OrderSslOrderDomainValidationStatuses|null
     */
    protected $domainValidationStatuses;
    /**
     *
     *
     * @var string|null
     */
    protected $emailApprover;
    /**
     *
     *
     * @var string|null
     */
    protected $emailReissue;
    /**
     *
     *
     * @var string|null
     */
    protected $expirationDate;
    /**
     *
     *
     * @var string|null
     */
    protected $features;
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
    protected $intermediateCertificate;
    /**
     *
     *
     * @var OrderSslOrderOptions|null
     */
    protected $options;
    /**
     *
     *
     * @var string|null
     */
    protected $orderDate;
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
    protected $productName;
    /**
     *
     *
     * @var string|null
     */
    protected $rootCertificate;
    /**
     *
     *
     * @var string|null
     */
    protected $software;
    /**
     *
     *
     * @var string|null
     */
    protected $sslinhvaOrderId;
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
    protected $technicalHandle;
    /**
     *
     *
     * @var string|null
     */
    protected $validationMethod;
    /**
     *
     *
     * @var string|null
     */
    protected $vendorOrderId;
    /**
     *
     *
     * @var string|null
     */
    protected $vendorReferenceId;
    /**
     *
     *
     * @return string|null
     */
    public function getActiveDate(): ?string
    {
        return $this->activeDate;
    }
    /**
     *
     *
     * @param string|null $activeDate
     *
     * @return self
     */
    public function setActiveDate(?string $activeDate): self
    {
        $this->activeDate = $activeDate;
        return $this;
    }
    /**
     *
     *
     * @return OrderSslOrderAdditionalData[]|null
     */
    public function getAdditionalData(): ?array
    {
        return $this->additionalData;
    }
    /**
     *
     *
     * @param OrderSslOrderAdditionalData[]|null $additionalData
     *
     * @return self
     */
    public function setAdditionalData(?array $additionalData): self
    {
        $this->additionalData = $additionalData;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getAdministrativeHandle(): ?string
    {
        return $this->administrativeHandle;
    }
    /**
     *
     *
     * @param string|null $administrativeHandle
     *
     * @return self
     */
    public function setAdministrativeHandle(?string $administrativeHandle): self
    {
        $this->administrativeHandle = $administrativeHandle;
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
    public function getBrandName(): ?string
    {
        return $this->brandName;
    }
    /**
     *
     *
     * @param string|null $brandName
     *
     * @return self
     */
    public function setBrandName(?string $brandName): self
    {
        $this->brandName = $brandName;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getCertificate(): ?string
    {
        return $this->certificate;
    }
    /**
     *
     *
     * @param string|null $certificate
     *
     * @return self
     */
    public function setCertificate(?string $certificate): self
    {
        $this->certificate = $certificate;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getCommonName(): ?string
    {
        return $this->commonName;
    }
    /**
     *
     *
     * @param string|null $commonName
     *
     * @return self
     */
    public function setCommonName(?string $commonName): self
    {
        $this->commonName = $commonName;
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
     * @return OrderSslOrderDomainValidationStatuses|null
     */
    public function getDomainValidationStatuses(): ?OrderSslOrderDomainValidationStatuses
    {
        return $this->domainValidationStatuses;
    }
    /**
     *
     *
     * @param OrderSslOrderDomainValidationStatuses|null $domainValidationStatuses
     *
     * @return self
     */
    public function setDomainValidationStatuses(?OrderSslOrderDomainValidationStatuses $domainValidationStatuses): self
    {
        $this->domainValidationStatuses = $domainValidationStatuses;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getEmailApprover(): ?string
    {
        return $this->emailApprover;
    }
    /**
     *
     *
     * @param string|null $emailApprover
     *
     * @return self
     */
    public function setEmailApprover(?string $emailApprover): self
    {
        $this->emailApprover = $emailApprover;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getEmailReissue(): ?string
    {
        return $this->emailReissue;
    }
    /**
     *
     *
     * @param string|null $emailReissue
     *
     * @return self
     */
    public function setEmailReissue(?string $emailReissue): self
    {
        $this->emailReissue = $emailReissue;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getExpirationDate(): ?string
    {
        return $this->expirationDate;
    }
    /**
     *
     *
     * @param string|null $expirationDate
     *
     * @return self
     */
    public function setExpirationDate(?string $expirationDate): self
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getFeatures(): ?string
    {
        return $this->features;
    }
    /**
     *
     *
     * @param string|null $features
     *
     * @return self
     */
    public function setFeatures(?string $features): self
    {
        $this->features = $features;
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
    public function getIntermediateCertificate(): ?string
    {
        return $this->intermediateCertificate;
    }
    /**
     *
     *
     * @param string|null $intermediateCertificate
     *
     * @return self
     */
    public function setIntermediateCertificate(?string $intermediateCertificate): self
    {
        $this->intermediateCertificate = $intermediateCertificate;
        return $this;
    }
    /**
     *
     *
     * @return OrderSslOrderOptions|null
     */
    public function getOptions(): ?OrderSslOrderOptions
    {
        return $this->options;
    }
    /**
     *
     *
     * @param OrderSslOrderOptions|null $options
     *
     * @return self
     */
    public function setOptions(?OrderSslOrderOptions $options): self
    {
        $this->options = $options;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getOrderDate(): ?string
    {
        return $this->orderDate;
    }
    /**
     *
     *
     * @param string|null $orderDate
     *
     * @return self
     */
    public function setOrderDate(?string $orderDate): self
    {
        $this->orderDate = $orderDate;
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
    public function getProductName(): ?string
    {
        return $this->productName;
    }
    /**
     *
     *
     * @param string|null $productName
     *
     * @return self
     */
    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getRootCertificate(): ?string
    {
        return $this->rootCertificate;
    }
    /**
     *
     *
     * @param string|null $rootCertificate
     *
     * @return self
     */
    public function setRootCertificate(?string $rootCertificate): self
    {
        $this->rootCertificate = $rootCertificate;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getSoftware(): ?string
    {
        return $this->software;
    }
    /**
     *
     *
     * @param string|null $software
     *
     * @return self
     */
    public function setSoftware(?string $software): self
    {
        $this->software = $software;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getSslinhvaOrderId(): ?string
    {
        return $this->sslinhvaOrderId;
    }
    /**
     *
     *
     * @param string|null $sslinhvaOrderId
     *
     * @return self
     */
    public function setSslinhvaOrderId(?string $sslinhvaOrderId): self
    {
        $this->sslinhvaOrderId = $sslinhvaOrderId;
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
     * @return string|null
     */
    public function getValidationMethod(): ?string
    {
        return $this->validationMethod;
    }
    /**
     *
     *
     * @param string|null $validationMethod
     *
     * @return self
     */
    public function setValidationMethod(?string $validationMethod): self
    {
        $this->validationMethod = $validationMethod;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getVendorOrderId(): ?string
    {
        return $this->vendorOrderId;
    }
    /**
     *
     *
     * @param string|null $vendorOrderId
     *
     * @return self
     */
    public function setVendorOrderId(?string $vendorOrderId): self
    {
        $this->vendorOrderId = $vendorOrderId;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getVendorReferenceId(): ?string
    {
        return $this->vendorReferenceId;
    }
    /**
     *
     *
     * @param string|null $vendorReferenceId
     *
     * @return self
     */
    public function setVendorReferenceId(?string $vendorReferenceId): self
    {
        $this->vendorReferenceId = $vendorReferenceId;
        return $this;
    }
}
