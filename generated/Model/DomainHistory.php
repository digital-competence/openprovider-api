<?php

namespace DigiComp\OpenproviderApi\Model;

class DomainHistory
{
    /**
     *
     *
     * @var string|null
     */
    protected $contents;
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
    protected $ip;
    /**
     *
     *
     * @var string|null
     */
    protected $subject;
    /**
     *
     *
     * @var string|null
     */
    protected $timestamp;
    /**
     *
     *
     * @var string|null
     */
    protected $type;
    /**
     *
     *
     * @return string|null
     */
    public function getContents(): ?string
    {
        return $this->contents;
    }
    /**
     *
     *
     * @param string|null $contents
     *
     * @return self
     */
    public function setContents(?string $contents): self
    {
        $this->contents = $contents;
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
    public function getIp(): ?string
    {
        return $this->ip;
    }
    /**
     *
     *
     * @param string|null $ip
     *
     * @return self
     */
    public function setIp(?string $ip): self
    {
        $this->ip = $ip;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return $this->subject;
    }
    /**
     *
     *
     * @param string|null $subject
     *
     * @return self
     */
    public function setSubject(?string $subject): self
    {
        $this->subject = $subject;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }
    /**
     *
     *
     * @param string|null $timestamp
     *
     * @return self
     */
    public function setTimestamp(?string $timestamp): self
    {
        $this->timestamp = $timestamp;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     *
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }
}
