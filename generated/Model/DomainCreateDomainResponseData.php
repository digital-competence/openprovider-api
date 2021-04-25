<?php

namespace DigiComp\OpenproviderApi\Model;

class DomainCreateDomainResponseData
{
    /**
     *
     *
     * @var string|null
     */
    protected $activationDate;
    /**
     *
     *
     * @var DomainAdditionalData|null
     */
    protected $additionalData;
    /**
     *
     *
     * @var string|null
     */
    protected $authCode;
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
     * @var string|null
     */
    protected $renewalDate;
    /**
     *
     *
     * @var string|null
     */
    protected $status;
    /**
     *
     *
     * @return string|null
     */
    public function getActivationDate(): ?string
    {
        return $this->activationDate;
    }
    /**
     *
     *
     * @param string|null $activationDate
     *
     * @return self
     */
    public function setActivationDate(?string $activationDate): self
    {
        $this->activationDate = $activationDate;
        return $this;
    }
    /**
     *
     *
     * @return DomainAdditionalData|null
     */
    public function getAdditionalData(): ?DomainAdditionalData
    {
        return $this->additionalData;
    }
    /**
     *
     *
     * @param DomainAdditionalData|null $additionalData
     *
     * @return self
     */
    public function setAdditionalData(?DomainAdditionalData $additionalData): self
    {
        $this->additionalData = $additionalData;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getAuthCode(): ?string
    {
        return $this->authCode;
    }
    /**
     *
     *
     * @param string|null $authCode
     *
     * @return self
     */
    public function setAuthCode(?string $authCode): self
    {
        $this->authCode = $authCode;
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
     * @return string|null
     */
    public function getRenewalDate(): ?string
    {
        return $this->renewalDate;
    }
    /**
     *
     *
     * @param string|null $renewalDate
     *
     * @return self
     */
    public function setRenewalDate(?string $renewalDate): self
    {
        $this->renewalDate = $renewalDate;
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
}
