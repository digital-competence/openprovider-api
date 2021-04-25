<?php

namespace DigiComp\OpenproviderApi\Model;

class DomainSendFoa1Request
{
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
}
