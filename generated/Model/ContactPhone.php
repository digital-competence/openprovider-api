<?php

namespace DigiComp\OpenproviderApi\Model;

class ContactPhone
{
    /**
     *
     *
     * @var string|null
     */
    protected $areaCode;
    /**
     *
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     *
     *
     * @var string|null
     */
    protected $subscriberNumber;
    /**
     *
     *
     * @return string|null
     */
    public function getAreaCode(): ?string
    {
        return $this->areaCode;
    }
    /**
     *
     *
     * @param string|null $areaCode
     *
     * @return self
     */
    public function setAreaCode(?string $areaCode): self
    {
        $this->areaCode = $areaCode;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
    /**
     *
     *
     * @param string|null $countryCode
     *
     * @return self
     */
    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getSubscriberNumber(): ?string
    {
        return $this->subscriberNumber;
    }
    /**
     *
     *
     * @param string|null $subscriberNumber
     *
     * @return self
     */
    public function setSubscriberNumber(?string $subscriberNumber): self
    {
        $this->subscriberNumber = $subscriberNumber;
        return $this;
    }
}
