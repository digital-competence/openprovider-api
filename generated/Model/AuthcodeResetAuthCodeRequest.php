<?php

namespace DigiComp\OpenproviderApi\Model;

class AuthcodeResetAuthCodeRequest
{
    /**
     *
     *
     * @var string|null
     */
    protected $authCodeType;
    /**
     *
     *
     * @var DomainDomain|null
     */
    protected $domain;
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
    protected $sendingType;
    /**
     *
     *
     * @return string|null
     */
    public function getAuthCodeType(): ?string
    {
        return $this->authCodeType;
    }
    /**
     *
     *
     * @param string|null $authCodeType
     *
     * @return self
     */
    public function setAuthCodeType(?string $authCodeType): self
    {
        $this->authCodeType = $authCodeType;
        return $this;
    }
    /**
     *
     *
     * @return DomainDomain|null
     */
    public function getDomain(): ?DomainDomain
    {
        return $this->domain;
    }
    /**
     *
     *
     * @param DomainDomain|null $domain
     *
     * @return self
     */
    public function setDomain(?DomainDomain $domain): self
    {
        $this->domain = $domain;
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
    public function getSendingType(): ?string
    {
        return $this->sendingType;
    }
    /**
     *
     *
     * @param string|null $sendingType
     *
     * @return self
     */
    public function setSendingType(?string $sendingType): self
    {
        $this->sendingType = $sendingType;
        return $this;
    }
}
