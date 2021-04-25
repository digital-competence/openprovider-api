<?php

namespace DigiComp\OpenproviderApi\Model;

class DomainWhoisPrivacyData
{
    /**
     *
     *
     * @var string|null
     */
    protected $expirationDate;
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
}
