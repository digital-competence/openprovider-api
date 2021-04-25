<?php

namespace DigiComp\OpenproviderApi\Model;

class DomainRenewDomainRequest
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
     * @var int|null
     */
    protected $period;
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
     * @return int|null
     */
    public function getPeriod(): ?int
    {
        return $this->period;
    }
    /**
     *
     *
     * @param int|null $period
     *
     * @return self
     */
    public function setPeriod(?int $period): self
    {
        $this->period = $period;
        return $this;
    }
}
