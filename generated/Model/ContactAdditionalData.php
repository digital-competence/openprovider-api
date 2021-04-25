<?php

namespace DigiComp\OpenproviderApi\Model;

class ContactAdditionalData
{
    /**
     *
     *
     * @var string|null
     */
    protected $birthCity;
    /**
     *
     *
     * @var string|null
     */
    protected $birthDate;
    /**
     *
     *
     * @var string|null
     */
    protected $socialSecurityNumber;
    /**
     *
     *
     * @return string|null
     */
    public function getBirthCity(): ?string
    {
        return $this->birthCity;
    }
    /**
     *
     *
     * @param string|null $birthCity
     *
     * @return self
     */
    public function setBirthCity(?string $birthCity): self
    {
        $this->birthCity = $birthCity;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getBirthDate(): ?string
    {
        return $this->birthDate;
    }
    /**
     *
     *
     * @param string|null $birthDate
     *
     * @return self
     */
    public function setBirthDate(?string $birthDate): self
    {
        $this->birthDate = $birthDate;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getSocialSecurityNumber(): ?string
    {
        return $this->socialSecurityNumber;
    }
    /**
     *
     *
     * @param string|null $socialSecurityNumber
     *
     * @return self
     */
    public function setSocialSecurityNumber(?string $socialSecurityNumber): self
    {
        $this->socialSecurityNumber = $socialSecurityNumber;
        return $this;
    }
}
