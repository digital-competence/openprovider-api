<?php

namespace DigiComp\OpenproviderApi\Model;

class CustomerCreateCustomerRequest
{
    /**
     *
     *
     * @var CustomerCustomerAdditionalData|null
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
     * @var CustomerExtensionAdditionalData[]|null
     */
    protected $extensionAdditionalData;
    /**
     *
     *
     * @var CustomerFax|null
     */
    protected $fax;
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
     * @var ContactPhone|null
     */
    protected $phone;
    /**
     *
     *
     * @var CustomerTags[]|null
     */
    protected $tags;
    /**
     *
     *
     * @var string|null
     */
    protected $vat;
    /**
     *
     *
     * @return CustomerCustomerAdditionalData|null
     */
    public function getAdditionalData(): ?CustomerCustomerAdditionalData
    {
        return $this->additionalData;
    }
    /**
     *
     *
     * @param CustomerCustomerAdditionalData|null $additionalData
     *
     * @return self
     */
    public function setAdditionalData(?CustomerCustomerAdditionalData $additionalData): self
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
     * @return CustomerExtensionAdditionalData[]|null
     */
    public function getExtensionAdditionalData(): ?array
    {
        return $this->extensionAdditionalData;
    }
    /**
     *
     *
     * @param CustomerExtensionAdditionalData[]|null $extensionAdditionalData
     *
     * @return self
     */
    public function setExtensionAdditionalData(?array $extensionAdditionalData): self
    {
        $this->extensionAdditionalData = $extensionAdditionalData;
        return $this;
    }
    /**
     *
     *
     * @return CustomerFax|null
     */
    public function getFax(): ?CustomerFax
    {
        return $this->fax;
    }
    /**
     *
     *
     * @param CustomerFax|null $fax
     *
     * @return self
     */
    public function setFax(?CustomerFax $fax): self
    {
        $this->fax = $fax;
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
     * @return CustomerTags[]|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }
    /**
     *
     *
     * @param CustomerTags[]|null $tags
     *
     * @return self
     */
    public function setTags(?array $tags): self
    {
        $this->tags = $tags;
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
