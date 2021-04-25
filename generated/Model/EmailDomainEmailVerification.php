<?php

namespace DigiComp\OpenproviderApi\Model;

class EmailDomainEmailVerification
{
    /**
     *
     *
     * @var string|null
     */
    protected $description;
    /**
     *
     *
     * @var string|null
     */
    protected $domain;
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
    protected $expirationDate;
    /**
     *
     *
     * @var string|null
     */
    protected $handle;
    /**
     *
     *
     * @var bool|null
     */
    protected $isSuspended;
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
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     *
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getDomain(): ?string
    {
        return $this->domain;
    }
    /**
     *
     *
     * @param string|null $domain
     *
     * @return self
     */
    public function setDomain(?string $domain): self
    {
        $this->domain = $domain;
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
     * @return string|null
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }
    /**
     *
     *
     * @param string|null $handle
     *
     * @return self
     */
    public function setHandle(?string $handle): self
    {
        $this->handle = $handle;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getIsSuspended(): ?bool
    {
        return $this->isSuspended;
    }
    /**
     *
     *
     * @param bool|null $isSuspended
     *
     * @return self
     */
    public function setIsSuspended(?bool $isSuspended): self
    {
        $this->isSuspended = $isSuspended;
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
