<?php

namespace DigiComp\OpenproviderApi\Model;

class ResellerUpdateResellerRequest
{
    /**
     *
     *
     * @var ResellerResellerAdditionalData|null
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
     * @var CustomerFax|null
     */
    protected $fax;
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
     * @var ContactPhone|null
     */
    protected $phone;
    /**
     *
     *
     * @var string|null
     */
    protected $vat;
    /**
     *
     *
     * @return ResellerResellerAdditionalData|null
     */
    public function getAdditionalData(): ?ResellerResellerAdditionalData
    {
        return $this->additionalData;
    }
    /**
     *
     *
     * @param ResellerResellerAdditionalData|null $additionalData
     *
     * @return self
     */
    public function setAdditionalData(?ResellerResellerAdditionalData $additionalData): self
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
