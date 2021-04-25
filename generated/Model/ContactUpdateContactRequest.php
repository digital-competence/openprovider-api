<?php

namespace DigiComp\OpenproviderApi\Model;

class ContactUpdateContactRequest
{
    /**
     *
     *
     * @var ContactAdditionalData|null
     */
    protected $additionalData;
    /**
     *
     *
     * @var ContactAddress|null
     */
    protected $address;
    /**
     *
     *
     * @var bool|null
     */
    protected $apiAccessEnabled;
    /**
     *
     *
     * @var ContactClientIpList|null
     */
    protected $apiClientIpList;
    /**
     *
     *
     * @var string|null
     */
    protected $authType;
    /**
     *
     *
     * @var string|null
     */
    protected $comments;
    /**
     *
     *
     * @var string|null
     */
    protected $companyName;
    /**
     *
     *
     * @var string|null
     */
    protected $email;
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
    protected $inn;
    /**
     *
     *
     * @var bool|null
     */
    protected $isActive;
    /**
     *
     *
     * @var string|null
     */
    protected $kpp;
    /**
     *
     *
     * @var string|null
     */
    protected $locale;
    /**
     *
     *
     * @var ContactName|null
     */
    protected $name;
    /**
     *
     *
     * @var string|null
     */
    protected $passwordChangeDeclinedAt;
    /**
     *
     *
     * @var ContactPhone|null
     */
    protected $phone;
    /**
     *
     *
     * @var ContactClientIpList|null
     */
    protected $rcpClientIpList;
    /**
     *
     *
     * @var string|null
     */
    protected $role;
    /**
     *
     *
     * @var string|null
     */
    protected $type;
    /**
     *
     *
     * @var string|null
     */
    protected $vat;
    /**
     *
     *
     * @return ContactAdditionalData|null
     */
    public function getAdditionalData(): ?ContactAdditionalData
    {
        return $this->additionalData;
    }
    /**
     *
     *
     * @param ContactAdditionalData|null $additionalData
     *
     * @return self
     */
    public function setAdditionalData(?ContactAdditionalData $additionalData): self
    {
        $this->additionalData = $additionalData;
        return $this;
    }
    /**
     *
     *
     * @return ContactAddress|null
     */
    public function getAddress(): ?ContactAddress
    {
        return $this->address;
    }
    /**
     *
     *
     * @param ContactAddress|null $address
     *
     * @return self
     */
    public function setAddress(?ContactAddress $address): self
    {
        $this->address = $address;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getApiAccessEnabled(): ?bool
    {
        return $this->apiAccessEnabled;
    }
    /**
     *
     *
     * @param bool|null $apiAccessEnabled
     *
     * @return self
     */
    public function setApiAccessEnabled(?bool $apiAccessEnabled): self
    {
        $this->apiAccessEnabled = $apiAccessEnabled;
        return $this;
    }
    /**
     *
     *
     * @return ContactClientIpList|null
     */
    public function getApiClientIpList(): ?ContactClientIpList
    {
        return $this->apiClientIpList;
    }
    /**
     *
     *
     * @param ContactClientIpList|null $apiClientIpList
     *
     * @return self
     */
    public function setApiClientIpList(?ContactClientIpList $apiClientIpList): self
    {
        $this->apiClientIpList = $apiClientIpList;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getAuthType(): ?string
    {
        return $this->authType;
    }
    /**
     *
     *
     * @param string|null $authType
     *
     * @return self
     */
    public function setAuthType(?string $authType): self
    {
        $this->authType = $authType;
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
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }
    /**
     *
     *
     * @param string|null $companyName
     *
     * @return self
     */
    public function setCompanyName(?string $companyName): self
    {
        $this->companyName = $companyName;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     *
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;
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
    public function getInn(): ?string
    {
        return $this->inn;
    }
    /**
     *
     *
     * @param string|null $inn
     *
     * @return self
     */
    public function setInn(?string $inn): self
    {
        $this->inn = $inn;
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
     * @return string|null
     */
    public function getKpp(): ?string
    {
        return $this->kpp;
    }
    /**
     *
     *
     * @param string|null $kpp
     *
     * @return self
     */
    public function setKpp(?string $kpp): self
    {
        $this->kpp = $kpp;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }
    /**
     *
     *
     * @param string|null $locale
     *
     * @return self
     */
    public function setLocale(?string $locale): self
    {
        $this->locale = $locale;
        return $this;
    }
    /**
     *
     *
     * @return ContactName|null
     */
    public function getName(): ?ContactName
    {
        return $this->name;
    }
    /**
     *
     *
     * @param ContactName|null $name
     *
     * @return self
     */
    public function setName(?ContactName $name): self
    {
        $this->name = $name;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getPasswordChangeDeclinedAt(): ?string
    {
        return $this->passwordChangeDeclinedAt;
    }
    /**
     *
     *
     * @param string|null $passwordChangeDeclinedAt
     *
     * @return self
     */
    public function setPasswordChangeDeclinedAt(?string $passwordChangeDeclinedAt): self
    {
        $this->passwordChangeDeclinedAt = $passwordChangeDeclinedAt;
        return $this;
    }
    /**
     *
     *
     * @return ContactPhone|null
     */
    public function getPhone(): ?ContactPhone
    {
        return $this->phone;
    }
    /**
     *
     *
     * @param ContactPhone|null $phone
     *
     * @return self
     */
    public function setPhone(?ContactPhone $phone): self
    {
        $this->phone = $phone;
        return $this;
    }
    /**
     *
     *
     * @return ContactClientIpList|null
     */
    public function getRcpClientIpList(): ?ContactClientIpList
    {
        return $this->rcpClientIpList;
    }
    /**
     *
     *
     * @param ContactClientIpList|null $rcpClientIpList
     *
     * @return self
     */
    public function setRcpClientIpList(?ContactClientIpList $rcpClientIpList): self
    {
        $this->rcpClientIpList = $rcpClientIpList;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getRole(): ?string
    {
        return $this->role;
    }
    /**
     *
     *
     * @param string|null $role
     *
     * @return self
     */
    public function setRole(?string $role): self
    {
        $this->role = $role;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     *
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getVat(): ?string
    {
        return $this->vat;
    }
    /**
     *
     *
     * @param string|null $vat
     *
     * @return self
     */
    public function setVat(?string $vat): self
    {
        $this->vat = $vat;
        return $this;
    }
}
