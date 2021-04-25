<?php

namespace DigiComp\OpenproviderApi\Model;

class ContactAddress
{
    /**
     *
     *
     * @var string|null
     */
    protected $city;
    /**
     *
     *
     * @var string|null
     */
    protected $country;
    /**
     *
     *
     * @var string|null
     */
    protected $number;
    /**
     *
     *
     * @var string|null
     */
    protected $state;
    /**
     *
     *
     * @var string|null
     */
    protected $street;
    /**
     *
     *
     * @var string|null
     */
    protected $suffix;
    /**
     *
     *
     * @var string|null
     */
    protected $zipcode;
    /**
     *
     *
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     *
     *
     * @param string|null $city
     *
     * @return self
     */
    public function setCity(?string $city): self
    {
        $this->city = $city;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }
    /**
     *
     *
     * @param string|null $country
     *
     * @return self
     */
    public function setCountry(?string $country): self
    {
        $this->country = $country;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }
    /**
     *
     *
     * @param string|null $number
     *
     * @return self
     */
    public function setNumber(?string $number): self
    {
        $this->number = $number;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }
    /**
     *
     *
     * @param string|null $state
     *
     * @return self
     */
    public function setState(?string $state): self
    {
        $this->state = $state;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }
    /**
     *
     *
     * @param string|null $street
     *
     * @return self
     */
    public function setStreet(?string $street): self
    {
        $this->street = $street;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getSuffix(): ?string
    {
        return $this->suffix;
    }
    /**
     *
     *
     * @param string|null $suffix
     *
     * @return self
     */
    public function setSuffix(?string $suffix): self
    {
        $this->suffix = $suffix;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getZipcode(): ?string
    {
        return $this->zipcode;
    }
    /**
     *
     *
     * @param string|null $zipcode
     *
     * @return self
     */
    public function setZipcode(?string $zipcode): self
    {
        $this->zipcode = $zipcode;
        return $this;
    }
}
