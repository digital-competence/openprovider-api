<?php

namespace DigiComp\OpenproviderApi\Model;

class DomainApproveTransferRequest
{
    /**
     *
     *
     * @var int|null
     */
    protected $approve;
    /**
     *
     *
     * @var string|null
     */
    protected $authCode;
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
    protected $registrarTag;
    /**
     *
     *
     * @return int|null
     */
    public function getApprove(): ?int
    {
        return $this->approve;
    }
    /**
     *
     *
     * @param int|null $approve
     *
     * @return self
     */
    public function setApprove(?int $approve): self
    {
        $this->approve = $approve;
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
    public function getRegistrarTag(): ?string
    {
        return $this->registrarTag;
    }
    /**
     *
     *
     * @param string|null $registrarTag
     *
     * @return self
     */
    public function setRegistrarTag(?string $registrarTag): self
    {
        $this->registrarTag = $registrarTag;
        return $this;
    }
}
