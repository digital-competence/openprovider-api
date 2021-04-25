<?php

namespace DigiComp\OpenproviderApi\Model;

class DomainTokenCreateTokenRequest
{
    /**
     *
     *
     * @var string|null
     */
    protected $domain;
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
}
