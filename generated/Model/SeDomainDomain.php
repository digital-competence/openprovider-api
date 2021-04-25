<?php

namespace DigiComp\OpenproviderApi\Model;

class SeDomainDomain
{
    /**
     *
     *
     * @var bool|null
     */
    protected $bundle;
    /**
     *
     *
     * @var string|null
     */
    protected $domainName;
    /**
     *
     *
     * @var string|null
     */
    protected $expirationDate;
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
    protected $isActive;
    /**
     *
     *
     * @var int|null
     */
    protected $orderId;
    /**
     *
     *
     * @var SeDomainProducts|null
     */
    protected $products;
    /**
     *
     *
     * @var SeDomainRecords|null
     */
    protected $records;
    /**
     *
     *
     * @var int|null
     */
    protected $resellerId;
    /**
     *
     *
     * @var string|null
     */
    protected $smtpPassword;
    /**
     *
     *
     * @var string|null
     */
    protected $userEmail;
    /**
     *
     *
     * @var string|null
     */
    protected $userPassword;
    /**
     *
     *
     * @var bool|null
     */
    protected $withOutgoingFilter;
    /**
     *
     *
     * @return bool|null
     */
    public function getBundle(): ?bool
    {
        return $this->bundle;
    }
    /**
     *
     *
     * @param bool|null $bundle
     *
     * @return self
     */
    public function setBundle(?bool $bundle): self
    {
        $this->bundle = $bundle;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getDomainName(): ?string
    {
        return $this->domainName;
    }
    /**
     *
     *
     * @param string|null $domainName
     *
     * @return self
     */
    public function setDomainName(?string $domainName): self
    {
        $this->domainName = $domainName;
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
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }
    /**
     *
     *
     * @param bool|null $isActive
     *
     * @return self
     */
    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     *
     *
     * @param int|null $orderId
     *
     * @return self
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }
    /**
     *
     *
     * @return SeDomainProducts|null
     */
    public function getProducts(): ?SeDomainProducts
    {
        return $this->products;
    }
    /**
     *
     *
     * @param SeDomainProducts|null $products
     *
     * @return self
     */
    public function setProducts(?SeDomainProducts $products): self
    {
        $this->products = $products;
        return $this;
    }
    /**
     *
     *
     * @return SeDomainRecords|null
     */
    public function getRecords(): ?SeDomainRecords
    {
        return $this->records;
    }
    /**
     *
     *
     * @param SeDomainRecords|null $records
     *
     * @return self
     */
    public function setRecords(?SeDomainRecords $records): self
    {
        $this->records = $records;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getResellerId(): ?int
    {
        return $this->resellerId;
    }
    /**
     *
     *
     * @param int|null $resellerId
     *
     * @return self
     */
    public function setResellerId(?int $resellerId): self
    {
        $this->resellerId = $resellerId;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getSmtpPassword(): ?string
    {
        return $this->smtpPassword;
    }
    /**
     *
     *
     * @param string|null $smtpPassword
     *
     * @return self
     */
    public function setSmtpPassword(?string $smtpPassword): self
    {
        $this->smtpPassword = $smtpPassword;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getUserEmail(): ?string
    {
        return $this->userEmail;
    }
    /**
     *
     *
     * @param string|null $userEmail
     *
     * @return self
     */
    public function setUserEmail(?string $userEmail): self
    {
        $this->userEmail = $userEmail;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getUserPassword(): ?string
    {
        return $this->userPassword;
    }
    /**
     *
     *
     * @param string|null $userPassword
     *
     * @return self
     */
    public function setUserPassword(?string $userPassword): self
    {
        $this->userPassword = $userPassword;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getWithOutgoingFilter(): ?bool
    {
        return $this->withOutgoingFilter;
    }
    /**
     *
     *
     * @param bool|null $withOutgoingFilter
     *
     * @return self
     */
    public function setWithOutgoingFilter(?bool $withOutgoingFilter): self
    {
        $this->withOutgoingFilter = $withOutgoingFilter;
        return $this;
    }
}
