<?php

namespace DigiComp\OpenproviderApi\Model;

class CsrCsrSubject
{
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
    protected $country;
    /**
     *
     *
     * @var string|null
     */
    protected $email;
    /**
     *
     *
     * @var string|null
     */
    protected $locality;
    /**
     *
     *
     * @var string|null
     */
    protected $organization;
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
    protected $unit;
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
     * @return string|null
     */
    public function getLocality(): ?string
    {
        return $this->locality;
    }
    /**
     *
     *
     * @param string|null $locality
     *
     * @return self
     */
    public function setLocality(?string $locality): self
    {
        $this->locality = $locality;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getOrganization(): ?string
    {
        return $this->organization;
    }
    /**
     *
     *
     * @param string|null $organization
     *
     * @return self
     */
    public function setOrganization(?string $organization): self
    {
        $this->organization = $organization;
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
    public function getUnit(): ?string
    {
        return $this->unit;
    }
    /**
     *
     *
     * @param string|null $unit
     *
     * @return self
     */
    public function setUnit(?string $unit): self
    {
        $this->unit = $unit;
        return $this;
    }
}
