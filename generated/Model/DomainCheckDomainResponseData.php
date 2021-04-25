<?php

namespace DigiComp\OpenproviderApi\Model;

class DomainCheckDomainResponseData
{
    /**
     *
     *
     * @var DomainCheckDomainResult[]|null
     */
    protected $results;
    /**
     *
     *
     * @return DomainCheckDomainResult[]|null
     */
    public function getResults(): ?array
    {
        return $this->results;
    }
    /**
     *
     *
     * @param DomainCheckDomainResult[]|null $results
     *
     * @return self
     */
    public function setResults(?array $results): self
    {
        $this->results = $results;
        return $this;
    }
}
