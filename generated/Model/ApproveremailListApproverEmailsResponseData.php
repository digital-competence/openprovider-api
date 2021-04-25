<?php

namespace DigiComp\OpenproviderApi\Model;

class ApproveremailListApproverEmailsResponseData
{
    /**
     *
     *
     * @var string[]|null
     */
    protected $results;
    /**
     *
     *
     * @return string[]|null
     */
    public function getResults(): ?array
    {
        return $this->results;
    }
    /**
     *
     *
     * @param string[]|null $results
     *
     * @return self
     */
    public function setResults(?array $results): self
    {
        $this->results = $results;
        return $this;
    }
}
